<?php
/**
 * HelloAssoApiV5ModelsEnumsPaymentMeans
 *
 * PHP version 8.1
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
 * Generator version: 7.14.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * HelloAssoApiV5ModelsEnumsPaymentMeans Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class HelloAssoApiV5ModelsEnumsPaymentMeans
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const CARD = 'Card';

    public const SEPA = 'Sepa';

    public const CHECK = 'Check';

    public const CASH = 'Cash';

    public const BANK_TRANSFER = 'BankTransfer';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::CARD,
            self::SEPA,
            self::CHECK,
            self::CASH,
            self::BANK_TRANSFER,
            self::OTHER
        ];
    }
}


