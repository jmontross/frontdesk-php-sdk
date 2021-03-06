<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Client
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property date $account_claim_date
 * @property currency $account_credit_amount
 * @property string $account_manager_names
 * @property string $address
 * @property integer $age
 * @property boolean $also_staff
 * @property date $birthdate
 * @property integer $business_id
 * @property string $business_name
 * @property string $business_subdomain
 * @property date $client_since_date
 * @property integer $completed_visits
 * @property string $currency_code
 * @property string $current_plan_revenue_category
 * @property string $current_plan_types
 * @property string $current_plans
 * @property logical $custom_fields
 * @property integer $days_since_last_visit
 * @property integer $days_until_birthday
 * @property string $dependent_names
 * @property string $email
 * @property integer $franchise_id
 * @property string $full_name
 * @property integer $future_visits
 * @property boolean $has_membership
 * @property boolean $has_payment_on_file
 * @property boolean $has_plan_on_hold
 * @property boolean $has_signed_waiver
 * @property string $home_location_name
 * @property boolean $is_schedulable
 * @property string $key
 * @property boolean $last_email_bounced
 * @property currency $last_invoice_amount
 * @property date $last_invoice_date
 * @property integer $last_invoice_id
 * @property boolean $last_invoice_unpaid
 * @property date $last_membership_end_date
 * @property date $last_site_access_date
 * @property date $last_visit_date
 * @property integer $last_visit_id
 * @property string $last_visit_service
 * @property date $next_pass_plan_end_date
 * @property integer $person_id
 * @property enum $person_state
 * @property string $phone
 * @property string $primary_staff_name
 * @property currency $revenue_amount
 * @property enum $source_name
 * @property string $staff_member_who_added
 * @property integer $tenure
 * @property enum $tenure_group
 * @property integer $unpaid_visits
 */
class Client extends Model\ReportingModel {
    public static $endPoints = array(
        'select' => array(
            'httpMethod' => 'POST',
            'urlPath' => '/desk/api/v3/reports/clients/queries'
        )
    );

    public static $fields = array(
        'account_claim_date',
        'account_credit_amount',
        'account_manager_names',
        'address',
        'age',
        'also_staff',
        'birthdate',
        'business_id',
        'business_name',
        'business_subdomain',
        'client_since_date',
        'completed_visits',
        'currency_code',
        'current_plan_revenue_category',
        'current_plan_types',
        'current_plans',
        'custom_fields',
        'days_since_last_visit',
        'days_until_birthday',
        'dependent_names',
        'email',
        'franchise_id',
        'full_name',
        'future_visits',
        'has_membership',
        'has_payment_on_file',
        'has_plan_on_hold',
        'has_signed_waiver',
        'home_location_name',
        'is_schedulable',
        'key',
        'last_email_bounced',
        'last_invoice_amount',
        'last_invoice_date',
        'last_invoice_id',
        'last_invoice_unpaid',
        'last_membership_end_date',
        'last_site_access_date',
        'last_visit_date',
        'last_visit_id',
        'last_visit_service',
        'next_pass_plan_end_date',
        'person_id',
        'person_state',
        'phone',
        'primary_staff_name',
        'revenue_amount',
        'source_name',
        'staff_member_who_added',
        'tenure',
        'tenure_group',
        'unpaid_visits',
    );
}