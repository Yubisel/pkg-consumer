<?php

namespace Pkg\Configurations\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OAuthClient
 *
 * This class allows to interact with oauth_clients table
 *
 * @package Pkg\Configurations\Entities
 * @author  Eborio Linarez
 */
class OAuthClient extends Model
{
    /**
     * Table
     *
     * @var string
     */
    protected $table = 'oauth_clients';
}
