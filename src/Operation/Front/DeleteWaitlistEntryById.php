<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Operation\Front;
use NovakSolutions\FrontDesk\Operation;

/**
 * Class DeleteWaitlistEntryById
 * @package NovakSolutions\FrontDesk\Operation\Front
 */
class DeleteWaitlistEntryById extends Operation\Operation {
    public static $method = 'DELETE';
    public static $urlPath = '/api/v2/front/waitlist_entries/:id';

    public static $fields = array(
    );

    public static function delete($id, $subdomain = null){
        $urlArguments = compact('id');
        self::makeRequest($urlArguments, null, $subdomain);
    }
}