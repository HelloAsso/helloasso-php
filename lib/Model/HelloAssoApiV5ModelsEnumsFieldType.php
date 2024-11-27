<?php
/**
 * HelloAssoApiV5ModelsEnumsFieldType
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
 * HelloAssoApiV5ModelsEnumsFieldType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class HelloAssoApiV5ModelsEnumsFieldType
{
    /**
     * Possible values of this enum
     */
    public const DATE = 'Date';

    public const TEXT_INPUT = 'TextInput';

    public const FREE_TEXT = 'FreeText';

    public const CHOICE_LIST = 'ChoiceList';

    public const FILE = 'File';

    public const YES_NO = 'YesNo';

    public const PHONE = 'Phone';

    public const ZIPCODE = 'Zipcode';

    public const NUMBER = 'Number';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DATE,
            self::TEXT_INPUT,
            self::FREE_TEXT,
            self::CHOICE_LIST,
            self::FILE,
            self::YES_NO,
            self::PHONE,
            self::ZIPCODE,
            self::NUMBER
        ];
    }
}


