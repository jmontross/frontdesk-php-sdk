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
 * Class PutPackProductById
 * @package NovakSolutions\FrontDesk\Operation\Desk
 */
class PutPackProductById extends Operation\Operation {
    public static $endPoint = array(
        'method' => 'PUT',
        'urlPath' => '/api/v2/desk/pack_products/:id'
    );

    public static $fields = array(
    );
}