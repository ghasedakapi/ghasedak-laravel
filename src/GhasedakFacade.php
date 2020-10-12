<?php


namespace Ghasedak\Laravel;


use Illuminate\Support\Facades\Facade;

class GhasedakFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Laravel';
    }

}
