<?php

namespace Upgradelabs\ReduniqLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Upgradelabs\ReduniqLaravel\ReduniqLaravel
 */
class ReduniqLaravel extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Upgradelabs\ReduniqLaravel\ReduniqLaravel::class;
    }
}
