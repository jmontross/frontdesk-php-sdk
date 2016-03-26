<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Operation\Desk;
use NovakSolutions\FrontDesk\Operation;

/**
 * Class GetSearch
 * @package NovakSolutions\FrontDesk\Operation\Desk
 */
class GetSearch extends Operation\Operation {
    public static $method = 'GET';
    public static $urlPath = '/api/v2/desk/people/search?q=:query';

    public static $fields = array(
    );

    public static function get($subdomain = null){
        $urlArguments = compact('');
        self::makeRequest($urlArguments, null, $subdomain);
    }
}