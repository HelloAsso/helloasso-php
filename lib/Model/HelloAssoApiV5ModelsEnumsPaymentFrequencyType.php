<?php
/**
 * HelloAssoApiV5ModelsEnumsPaymentFrequencyType
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
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * HelloAssoApiV5ModelsEnumsPaymentFrequencyType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class HelloAssoApiV5ModelsEnumsPaymentFrequencyType
{
    /**
     * Possible values of this enum
     */
    public const SINGLE = 'Single';

    public const INSTALLMENT = 'Installment';

    public const MONTHLY = 'Monthly';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SINGLE,
            self::INSTALLMENT,
            self::MONTHLY
        ];
    }
}


