<?php

namespace Pkg\Configurations\Repositories;

use Pkg\Configurations\Entities\OAuthClient;

/**
 * Class OAuthClientsRepo
 *
 * This class allows to interact with OAuthClient entity
 *
 * @package Pkg\Configurations\Repositories
 * @author  Eborio Linarez
 */
class OAuthClientsRepo
{
    public function getConfigurationsByDomain($domain)
    {
        return OAuthClient::on(config('configurations.replica'))
            ->select('oauth_clients.id AS whitelabel_id', 'oauth_clients.name AS whitelabel_name', 'oauth_clients.revoked')
            ->where('domain', $domain)
            ->where('password_client', false)
            ->get();
    }
}