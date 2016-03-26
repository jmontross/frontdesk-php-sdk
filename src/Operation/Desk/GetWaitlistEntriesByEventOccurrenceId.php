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
 * Class GetWaitlistEntriesByEventOccurrenceId
 * @package NovakSolutions\FrontDesk\Operation\Desk
 */
class GetWaitlistEntriesByEventOccurrenceId extends Operation\Operation {
    public static $method = 'GET';
    public static $urlPath = '/api/v2/desk/event_occurrences/:event_occurrence_id/waitlist_entries';

    public static $fields = array(
    );

    public static function get($event_occurrence_id, $subdomain = null){
        $urlArguments = compact('event_occurrence_id');
        self::makeRequest($urlArguments, null, $subdomain);
    }
}