<?php
/**
 * HelloAssoModelsEnumsGlobalRole
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
 * HelloAssoModelsEnumsGlobalRole Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class HelloAssoModelsEnumsGlobalRole
{
    /**
     * Possible values of this enum
     */
    public const ORGANIZATION_ADMIN = 'OrganizationAdmin';

    public const FORM_ADMIN = 'FormAdmin';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ORGANIZATION_ADMIN,
            self::FORM_ADMIN
        ];
    }
}


