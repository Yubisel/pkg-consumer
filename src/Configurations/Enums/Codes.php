<?php

namespace Pkg\Configurations\Enums;

/**
 * Class Codes
 *
 * This class allows to define response codes
 *
 * @package Pkg\Configurations\Enums
 * @author  Eborio Linarez
 */
class Codes
{
    /**
     * 200
     *
     * @var int
     */
    public static $ok = 200;

    /**
     * Unauthenticated
     *
     * @var int
     */
    public static $unauthenticated = 401;

    /**
     * 403
     *
     * @var int
     */
    public static $forbidden = 403;

    /**
     * 404
     *
     * @var int
     */
    public static $not_found = 404;

    /**
     * 422
     *
     * @var int
     */
    public static $validation_errors = 422;

    /**
     * Locked transaction
     *
     * @var int
     */
    public static $locked = 423;

    /**
     * 500
     *
     * @var int
     */
    public static $failed = 500;

    /**
     * 503
     *
     * @var int
     */
    public static $maintenance = 503;
}
