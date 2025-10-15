<?php

namespace Pkg\Configurations\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Page
 *
 * This class allows to interact with pages table
 *
 * @package Pkg\Configurations\Entities
 * @author  Eborio Linarez
 */
class Page extends Model
{
    /**
     * Table
     *
     * @var string
     */
    protected $table = 'pages';
}
