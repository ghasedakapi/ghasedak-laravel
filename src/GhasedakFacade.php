<?php


namespace Ghasedak\Laravel;


use Illuminate\Support\Facades\Facade;

/**
 * Class GhasedakFacade
 *
 * @package Ghasedak\Laravel
 *
 * @method static array SendSimple($receptor, $message, $linenumber = null, $senddate = null, $checkid = null)
 * @method static array SendBulk($linenumber, $receptor, $message, $date, $checkid = null)
 * @method static array SendPair($linenumber, $receptor, $message, $date = null, $checkid = null)
 * @method static array Verify($receptor, $type, $template, ...$args)
 * @method static array Status($id, $type)
 * @method static array AddGroup($name, $parent = null)
 * @method static array AddNumber($groupid, $number, $firstname = null, $lastname = null, $email = null)
 * @method static array GroupList($parent = null)
 * @method static array GroupNumberList($groupid, $offset = null, $page = null)
 * @method static array GroupEdit($groupid, $name)
 * @method static array GroupRemove($groupid)
 * @method static array ReceiveSms($linenumber, $isread)
 * @method static array ReceivePaging($linenumber, $isread, $fromdate, $todate, $page, $offset)
 * @method static array CancelSms($messageid)
 * @method static array AccountInfo()
 */
class GhasedakFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Laravel';
    }

}
