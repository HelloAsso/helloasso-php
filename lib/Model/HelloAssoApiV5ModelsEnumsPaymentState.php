<?php
/**
 * HelloAssoApiV5ModelsEnumsPaymentState
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * HelloAsso API
 *
 * HelloAsso auto-generated SDK
 *
 * The version of the OpenAPI document: public
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * HelloAssoApiV5ModelsEnumsPaymentState Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class HelloAssoApiV5ModelsEnumsPaymentState
{
    /**
     * Possible values of this enum
     */
    public const PENDING = 'Pending';

    public const AUTHORIZED = 'Authorized';

    public const REFUSED = 'Refused';

    public const UNKNOWN = 'Unknown';

    public const REGISTERED = 'Registered';

    public const ERROR = 'Error';

    public const REFUNDED = 'Refunded';

    public const REFUNDING = 'Refunding';

    public const WAITING = 'Waiting';

    public const CANCELED = 'Canceled';

    public const CONTESTED = 'Contested';

    public const WAITING_BANK_VALIDATION = 'WaitingBankValidation';

    public const WAITING_BANK_WITHDRAW = 'WaitingBankWithdraw';

    public const ABANDONED = 'Abandoned';

    public const WAITING_AUTHENTICATION = 'WaitingAuthentication';

    public const AUTHORIZED_PREPROD = 'AuthorizedPreprod';

    public const CORRECTED = 'Corrected';

    public const DELETED = 'Deleted';

    public const INCONSISTENT = 'Inconsistent';

    public const NO_DONATION = 'NoDonation';

    public const INIT = 'Init';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::AUTHORIZED,
            self::REFUSED,
            self::UNKNOWN,
            self::REGISTERED,
            self::ERROR,
            self::REFUNDED,
            self::REFUNDING,
            self::WAITING,
            self::CANCELED,
            self::CONTESTED,
            self::WAITING_BANK_VALIDATION,
            self::WAITING_BANK_WITHDRAW,
            self::ABANDONED,
            self::WAITING_AUTHENTICATION,
            self::AUTHORIZED_PREPROD,
            self::CORRECTED,
            self::DELETED,
            self::INCONSISTENT,
            self::NO_DONATION,
            self::INIT
        ];
    }
}


