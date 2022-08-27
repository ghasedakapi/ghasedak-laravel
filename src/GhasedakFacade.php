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
 * @method static object Verify($receptor, $template, ...$args)
 * @method static object Status($ids, $type = 1)
 * @method static object AddGroup($name, $parent = null)
 * @method static object AddNumber($groupid, $numbers, $firstnames = null, $lastnames = null, $emails = null)
 * @method static object GroupList($parent = null)
 * @method static object GroupNumberList($groupid, $offset = null, $page = null)
 * @method static object GroupEdit($groupid, $name)
 * @method static object GroupRemove($groupid)
 * @method static object ReceiveSms($linenumber, $isread)
 * @method static object ReceivePaging($linenumber, $isread, $fromdate, $todate, $page, $offset)
 * @method static object CancelSms($messageid)
 * @method static object AccountInfo()
 * @method static \Ghasedak\GhasedakApi setRequestMethod($method = 'GET')
 * @method static \Ghasedak\GhasedakApi setVerifyType(int $type)
 */
class GhasedakFacade extends Facade
{
    const VERIFY_MESSAGE_TEXT = 1;
    const VERIFY_MESSAGE_VOICE = 2;
    const MESSAGE_ID_TYPE = 1;
    const CHECK_ID_TYPE = 2;

    protected static function getFacadeAccessor()
    {
        return 'Laravel';
    }

}
