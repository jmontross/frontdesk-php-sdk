<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Operation;
use NovakSolutions\FrontDesk\Operation;

/**
 * Class GetPeople
 * @package NovakSolutions\FrontDesk\Operation
 */
class GetPeople extends Operation\Operation {
    public static $endPoint = array(
        'method' => 'GET',
        'urlPath' => '/api/v2/account/people'
    );

    public static $fields = array(
    );
}