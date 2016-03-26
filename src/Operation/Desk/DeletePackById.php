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
 * Class DeletePackById
 * @package NovakSolutions\FrontDesk\Operation\Desk
 */
class DeletePackById extends Operation\Operation {
    public static $method = 'DELETE';
    public static $urlPath = '/api/v2/desk/packs/:id';

    public static $fields = array(
    );

    public static function delete($id, $subdomain = null){
        $urlArguments = compact('id');
        self::makeRequest($urlArguments, null, $subdomain);
    }
}