<?php namespace Arvindkumar\EntrustMongoDB;

/**
 * This file is part of Entrust,
 * a role & permission management solution for Laravel.
 *
 * @license MIT
 * @package Arvindkumar\EntrustMongoDB
 */

use Illuminate\Support\Facades\Facade;

class EntrustFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'entrust';
    }
}
