<?php

namespace Pkg\Configurations\Repositories;

use Pkg\Configurations\Entities\Page;

/**
 * Class PagesRepo
 *
 * This class allows to interact with Page entity
 *
 * @package Pkg\Configurations\Repositories
 * @author  Eborio Linarez
 */
class PagesRepo
{
    /**
     * Find page by whitelabel and slug
     *
     * @param string $whitelabel Whitelabel ID
     * @param string $slug Page slug
     * @return mixed
     */
    public function find($whitelabel, $slug)
    {
        $page = Page::select('page_whitelabel.title', 'page_whitelabel.content')
            ->join('page_whitelabel', 'pages.id', '=', 'page_whitelabel.page_id')
            ->where('whitelabel_id', $whitelabel)
            ->where('slug', $slug)
            ->first();
        return $page;
    }
}
