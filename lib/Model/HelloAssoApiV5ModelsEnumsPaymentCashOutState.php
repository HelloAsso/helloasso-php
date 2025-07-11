<?php
/**
 * HelloAssoApiV5ModelsEnumsPaymentCashOutState
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
 * HelloAssoApiV5ModelsEnumsPaymentCashOutState Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class HelloAssoApiV5ModelsEnumsPaymentCashOutState
{
    /**
     * Possible values of this enum
     */
    public const MONEY_IN = 'MoneyIn';

    public const CANT_TRANSFER_RECEIVER_FULL = 'CantTransferReceiverFull';

    public const TRANSFERED = 'Transfered';

    public const REFUNDED = 'Refunded';

    public const REFUNDING = 'Refunding';

    public const WAITING_FOR_CASH_OUT_CONFIRMATION = 'WaitingForCashOutConfirmation';

    public const CASHED_OUT = 'CashedOut';

    public const UNKNOWN = 'Unknown';

    public const CONTESTED = 'Contested';

    public const TRANSFER_IN_PROGRESS = 'TransferInProgress';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MONEY_IN,
            self::CANT_TRANSFER_RECEIVER_FULL,
            self::TRANSFERED,
            self::REFUNDED,
            self::REFUNDING,
            self::WAITING_FOR_CASH_OUT_CONFIRMATION,
            self::CASHED_OUT,
            self::UNKNOWN,
            self::CONTESTED,
            self::TRANSFER_IN_PROGRESS
        ];
    }
}


