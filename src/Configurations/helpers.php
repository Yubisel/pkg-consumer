<?php

use Pkg\Configurations\Configurations;
use Pkg\Configurations\Enums\Components;

if (!function_exists('global_asset')) {

    function global_asset($path, $whitelabel = null)
    {
        $s3URL = str_replace('https://', '', env('AWS_S3_URL'));
        $url = 'https://' . env('AWS_DEFAULT_BUCKET') . '.' . $s3URL;
        $cdn = env('CDN');

        if (!is_null($cdn)) {
            $url = $cdn;

        } else {
            if (!is_null($whitelabel)) {
                $configuration = Configurations::getComponentConfiguration($whitelabel, Components::$design);

                if (!is_null($configuration->cdn)) {
                    $url = $configuration->cdn;
                }
            } else {
                $configurations = config('whitelabels.configurations');
                $configuration = $configurations[Components::$design - 1]->data;

                if (!is_null($configuration->cdn)) {
                    $url = $configuration->cdn;
                }
            }
        }
        return "$url/$path";
    }
}

if (!function_exists('s3_asset')) {

    function s3_asset($path, $whitelabel = null)
    {
        if (!is_null($whitelabel)) {
            $configuration = Configurations::getComponentConfiguration($whitelabel, Components::$design);
        } else {
            $configurations = config('whitelabels.configurations');
            $configuration = $configurations[Components::$design - 1]->data;
        }

        if (is_null($configuration->cdn)) {
            $s3URL = str_replace('https://', '', env('AWS_S3_URL'));
            $url = 'https://' . env('AWS_DEFAULT_BUCKET') . '.' . $s3URL . '/site/' . $configuration->s3_directory;
        } else {
            $url = $configuration->cdn . '/site/' . $configuration->s3_directory;;
        }
        return "$url/$path";
    }
}
