<?php

namespace Aon2003\PageTitles\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aon2003\PageTitles\PageTitles
 */
class PageTitles extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Aon2003\PageTitles\PageTitles::class;
    }
}
