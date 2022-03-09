<?php


namespace Ghasedak\Laravel;


use Illuminate\Support\Facades\Facade;

/**
 * Class GhasedakFacade
 *
 * @package Ghasedak\Laravel
 *
 * @method static object SendSimple($receptor, $message, $linenumber = null, $senddate = null, $checkid = null)
 * @method static object SendBulk($linenumber, $receptor, $message, $date = null, $checkid = null)
 * @method static object SendPair($linenumber, $receptor, $message, $date = null, $checkid = null)
 * @method static object Verify($receptor, $type, $template, ...$args)
 * @method static object Status($id, $type)
 * @method static object AddGroup($name, $parent = null)
 * @method static object AddNumber($groupid, $number, $firstname = null, $lastname = null, $email = null)
 * @method static object GroupList($parent = null)
 * @method static object GroupNumberList($groupid, $offset = null, $page = null)
 * @method static object GroupEdit($groupid, $name)
 * @method static object GroupRemove($groupid)
 * @method static object ReceiveSms($linenumber, $isread)
 * @method static object ReceivePaging($linenumber, $isread, $fromdate, $todate, $page, $offset)
 * @method static object CancelSms($messageid)
 * @method static object AccountInfo()
 */
class GhasedakFacade extends Facade
{
    const VERIFY_MESSAGE_TEXT = 1;
    const VERIFY_MESSAGE_VOICE = 2;
    protected static function getFacadeAccessor()
    {
        return 'Laravel';
    }

}
