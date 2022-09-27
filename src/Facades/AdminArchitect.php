<?php

namespace Webplusmultimedia\AdminArchitect\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Webplusmultimedia\AdminArchitect\AdminArchitect
 */
class AdminArchitect extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Webplusmultimedia\AdminArchitect\AdminArchitect::class;
    }
}
