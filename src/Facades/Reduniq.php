<?php

namespace Upgradelabs\Reduniq\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Upgradelabs\Reduniq\Reduniq
 */
class Reduniq extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Upgradelabs\Reduniq\Reduniq::class;
    }
}
