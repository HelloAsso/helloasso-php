<?php
/**
 * HelloAssoApiV5ModelsPaymentPublicPaymentModel
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * HelloAssoApiV5ModelsPaymentPublicPaymentModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HelloAssoApiV5ModelsPaymentPublicPaymentModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HelloAsso.Api.V5.Models.Payment.PublicPaymentModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'organization_id' => 'int',
        'form_id' => 'int',
        'form_type' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType',
        'amount' => 'int',
        'means_payment' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentMeans',
        'cash_out_state' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentCashOutState',
        'date' => '\DateTime',
        'authorization_date' => '\DateTime',
        'order_date' => '\DateTime',
        'order_id' => 'int',
        'fiscal_receipt_generated' => 'bool',
        'payer_first_name' => 'string',
        'payer_last_name' => 'string',
        'status' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState',
        'user_id' => 'int',
        'user_first_name' => 'string',
        'user_last_name' => 'string',
        'user_email' => 'string',
        'provider_title' => 'string',
        'installment_number' => 'int',
        'meta' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonMetaModel',
        'refund_operations' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsRefundOperationLightModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'organization_id' => 'int32',
        'form_id' => 'int32',
        'form_type' => null,
        'amount' => 'int32',
        'means_payment' => null,
        'cash_out_state' => null,
        'date' => 'date-time',
        'authorization_date' => 'date-time',
        'order_date' => 'date-time',
        'order_id' => 'int32',
        'fiscal_receipt_generated' => null,
        'payer_first_name' => null,
        'payer_last_name' => null,
        'status' => null,
        'user_id' => 'int32',
        'user_first_name' => null,
        'user_last_name' => null,
        'user_email' => null,
        'provider_title' => null,
        'installment_number' => 'int32',
        'meta' => null,
        'refund_operations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'organization_id' => false,
        'form_id' => true,
        'form_type' => false,
        'amount' => false,
        'means_payment' => false,
        'cash_out_state' => false,
        'date' => false,
        'authorization_date' => true,
        'order_date' => false,
        'order_id' => false,
        'fiscal_receipt_generated' => false,
        'payer_first_name' => true,
        'payer_last_name' => true,
        'status' => false,
        'user_id' => true,
        'user_first_name' => true,
        'user_last_name' => true,
        'user_email' => true,
        'provider_title' => true,
        'installment_number' => true,
        'meta' => false,
        'refund_operations' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'organization_id' => 'organizationId',
        'form_id' => 'formId',
        'form_type' => 'formType',
        'amount' => 'amount',
        'means_payment' => 'meansPayment',
        'cash_out_state' => 'cashOutState',
        'date' => 'date',
        'authorization_date' => 'authorizationDate',
        'order_date' => 'orderDate',
        'order_id' => 'orderId',
        'fiscal_receipt_generated' => 'fiscalReceiptGenerated',
        'payer_first_name' => 'payerFirstName',
        'payer_last_name' => 'payerLastName',
        'status' => 'status',
        'user_id' => 'userId',
        'user_first_name' => 'userFirstName',
        'user_last_name' => 'userLastName',
        'user_email' => 'userEmail',
        'provider_title' => 'providerTitle',
        'installment_number' => 'installmentNumber',
        'meta' => 'meta',
        'refund_operations' => 'refundOperations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'organization_id' => 'setOrganizationId',
        'form_id' => 'setFormId',
        'form_type' => 'setFormType',
        'amount' => 'setAmount',
        'means_payment' => 'setMeansPayment',
        'cash_out_state' => 'setCashOutState',
        'date' => 'setDate',
        'authorization_date' => 'setAuthorizationDate',
        'order_date' => 'setOrderDate',
        'order_id' => 'setOrderId',
        'fiscal_receipt_generated' => 'setFiscalReceiptGenerated',
        'payer_first_name' => 'setPayerFirstName',
        'payer_last_name' => 'setPayerLastName',
        'status' => 'setStatus',
        'user_id' => 'setUserId',
        'user_first_name' => 'setUserFirstName',
        'user_last_name' => 'setUserLastName',
        'user_email' => 'setUserEmail',
        'provider_title' => 'setProviderTitle',
        'installment_number' => 'setInstallmentNumber',
        'meta' => 'setMeta',
        'refund_operations' => 'setRefundOperations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'organization_id' => 'getOrganizationId',
        'form_id' => 'getFormId',
        'form_type' => 'getFormType',
        'amount' => 'getAmount',
        'means_payment' => 'getMeansPayment',
        'cash_out_state' => 'getCashOutState',
        'date' => 'getDate',
        'authorization_date' => 'getAuthorizationDate',
        'order_date' => 'getOrderDate',
        'order_id' => 'getOrderId',
        'fiscal_receipt_generated' => 'getFiscalReceiptGenerated',
        'payer_first_name' => 'getPayerFirstName',
        'payer_last_name' => 'getPayerLastName',
        'status' => 'getStatus',
        'user_id' => 'getUserId',
        'user_first_name' => 'getUserFirstName',
        'user_last_name' => 'getUserLastName',
        'user_email' => 'getUserEmail',
        'provider_title' => 'getProviderTitle',
        'installment_number' => 'getInstallmentNumber',
        'meta' => 'getMeta',
        'refund_operations' => 'getRefundOperations'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('organization_id', $data ?? [], null);
        $this->setIfExists('form_id', $data ?? [], null);
        $this->setIfExists('form_type', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('means_payment', $data ?? [], null);
        $this->setIfExists('cash_out_state', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('authorization_date', $data ?? [], null);
        $this->setIfExists('order_date', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('fiscal_receipt_generated', $data ?? [], null);
        $this->setIfExists('payer_first_name', $data ?? [], null);
        $this->setIfExists('payer_last_name', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('user_first_name', $data ?? [], null);
        $this->setIfExists('user_last_name', $data ?? [], null);
        $this->setIfExists('user_email', $data ?? [], null);
        $this->setIfExists('provider_title', $data ?? [], null);
        $this->setIfExists('installment_number', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('refund_operations', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The payment id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return int|null
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param int|null $organization_id The Organization id, which the payment was made to
     *
     * @return self
     */
    public function setOrganizationId($organization_id)
    {
        if (is_null($organization_id)) {
            throw new \InvalidArgumentException('non-nullable organization_id cannot be null');
        }
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets form_id
     *
     * @return int|null
     */
    public function getFormId()
    {
        return $this->container['form_id'];
    }

    /**
     * Sets form_id
     *
     * @param int|null $form_id The form id where the payment was made. Used with FormType
     *
     * @return self
     */
    public function setFormId($form_id)
    {
        if (is_null($form_id)) {
            array_push($this->openAPINullablesSetToNull, 'form_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('form_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['form_id'] = $form_id;

        return $this;
    }

    /**
     * Gets form_type
     *
     * @return \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType|null
     */
    public function getFormType()
    {
        return $this->container['form_type'];
    }

    /**
     * Sets form_type
     *
     * @param \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType|null $form_type form_type
     *
     * @return self
     */
    public function setFormType($form_type)
    {
        if (is_null($form_type)) {
            throw new \InvalidArgumentException('non-nullable form_type cannot be null');
        }
        $this->container['form_type'] = $form_type;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount Amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets means_payment
     *
     * @return \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentMeans|null
     */
    public function getMeansPayment()
    {
        return $this->container['means_payment'];
    }

    /**
     * Sets means_payment
     *
     * @param \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentMeans|null $means_payment means_payment
     *
     * @return self
     */
    public function setMeansPayment($means_payment)
    {
        if (is_null($means_payment)) {
            throw new \InvalidArgumentException('non-nullable means_payment cannot be null');
        }
        $this->container['means_payment'] = $means_payment;

        return $this;
    }

    /**
     * Gets cash_out_state
     *
     * @return \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentCashOutState|null
     */
    public function getCashOutState()
    {
        return $this->container['cash_out_state'];
    }

    /**
     * Sets cash_out_state
     *
     * @param \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentCashOutState|null $cash_out_state cash_out_state
     *
     * @return self
     */
    public function setCashOutState($cash_out_state)
    {
        if (is_null($cash_out_state)) {
            throw new \InvalidArgumentException('non-nullable cash_out_state cannot be null');
        }
        $this->container['cash_out_state'] = $cash_out_state;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date The payment Date.
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets authorization_date
     *
     * @return \DateTime|null
     */
    public function getAuthorizationDate()
    {
        return $this->container['authorization_date'];
    }

    /**
     * Sets authorization_date
     *
     * @param \DateTime|null $authorization_date If the payment is authorized, this is the date of authorization
     *
     * @return self
     */
    public function setAuthorizationDate($authorization_date)
    {
        if (is_null($authorization_date)) {
            array_push($this->openAPINullablesSetToNull, 'authorization_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('authorization_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['authorization_date'] = $authorization_date;

        return $this;
    }

    /**
     * Gets order_date
     *
     * @return \DateTime|null
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param \DateTime|null $order_date Date at which the Order was placed.  Important for monthly payments or scheduled payments.
     *
     * @return self
     */
    public function setOrderDate($order_date)
    {
        if (is_null($order_date)) {
            throw new \InvalidArgumentException('non-nullable order_date cannot be null');
        }
        $this->container['order_date'] = $order_date;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int|null $order_id The id of the order
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets fiscal_receipt_generated
     *
     * @return bool|null
     */
    public function getFiscalReceiptGenerated()
    {
        return $this->container['fiscal_receipt_generated'];
    }

    /**
     * Sets fiscal_receipt_generated
     *
     * @param bool|null $fiscal_receipt_generated Whether a Fiscal receipt document has been generated for this payment or not.
     *
     * @return self
     */
    public function setFiscalReceiptGenerated($fiscal_receipt_generated)
    {
        if (is_null($fiscal_receipt_generated)) {
            throw new \InvalidArgumentException('non-nullable fiscal_receipt_generated cannot be null');
        }
        $this->container['fiscal_receipt_generated'] = $fiscal_receipt_generated;

        return $this;
    }

    /**
     * Gets payer_first_name
     *
     * @return string|null
     */
    public function getPayerFirstName()
    {
        return $this->container['payer_first_name'];
    }

    /**
     * Sets payer_first_name
     *
     * @param string|null $payer_first_name The inputted payer first name, might differs from User firstname, from linked user Id
     *
     * @return self
     */
    public function setPayerFirstName($payer_first_name)
    {
        if (is_null($payer_first_name)) {
            array_push($this->openAPINullablesSetToNull, 'payer_first_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payer_first_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payer_first_name'] = $payer_first_name;

        return $this;
    }

    /**
     * Gets payer_last_name
     *
     * @return string|null
     */
    public function getPayerLastName()
    {
        return $this->container['payer_last_name'];
    }

    /**
     * Sets payer_last_name
     *
     * @param string|null $payer_last_name The inputted payer last name,  might differs from User lastname, from linked user Id
     *
     * @return self
     */
    public function setPayerLastName($payer_last_name)
    {
        if (is_null($payer_last_name)) {
            array_push($this->openAPINullablesSetToNull, 'payer_last_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payer_last_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payer_last_name'] = $payer_last_name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id The user id who initiated the payment
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            array_push($this->openAPINullablesSetToNull, 'user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets user_first_name
     *
     * @return string|null
     */
    public function getUserFirstName()
    {
        return $this->container['user_first_name'];
    }

    /**
     * Sets user_first_name
     *
     * @param string|null $user_first_name The name of the user who initiated the payment. May differ from PayerFirstName
     *
     * @return self
     */
    public function setUserFirstName($user_first_name)
    {
        if (is_null($user_first_name)) {
            array_push($this->openAPINullablesSetToNull, 'user_first_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_first_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_first_name'] = $user_first_name;

        return $this;
    }

    /**
     * Gets user_last_name
     *
     * @return string|null
     */
    public function getUserLastName()
    {
        return $this->container['user_last_name'];
    }

    /**
     * Sets user_last_name
     *
     * @param string|null $user_last_name The name of the user who initiated the payment. May differ from PayerLastName
     *
     * @return self
     */
    public function setUserLastName($user_last_name)
    {
        if (is_null($user_last_name)) {
            array_push($this->openAPINullablesSetToNull, 'user_last_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_last_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_last_name'] = $user_last_name;

        return $this;
    }

    /**
     * Gets user_email
     *
     * @return string|null
     */
    public function getUserEmail()
    {
        return $this->container['user_email'];
    }

    /**
     * Sets user_email
     *
     * @param string|null $user_email The email of the user account who initiated the payment.
     *
     * @return self
     */
    public function setUserEmail($user_email)
    {
        if (is_null($user_email)) {
            array_push($this->openAPINullablesSetToNull, 'user_email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_email'] = $user_email;

        return $this;
    }

    /**
     * Gets provider_title
     *
     * @return string|null
     */
    public function getProviderTitle()
    {
        return $this->container['provider_title'];
    }

    /**
     * Sets provider_title
     *
     * @param string|null $provider_title name of the provider
     *
     * @return self
     */
    public function setProviderTitle($provider_title)
    {
        if (is_null($provider_title)) {
            array_push($this->openAPINullablesSetToNull, 'provider_title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('provider_title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['provider_title'] = $provider_title;

        return $this;
    }

    /**
     * Gets installment_number
     *
     * @return int|null
     */
    public function getInstallmentNumber()
    {
        return $this->container['installment_number'];
    }

    /**
     * Sets installment_number
     *
     * @param int|null $installment_number Indicates the payment number (useful in the case of an order comprising payments with installments)  Starting with 1.
     *
     * @return self
     */
    public function setInstallmentNumber($installment_number)
    {
        if (is_null($installment_number)) {
            array_push($this->openAPINullablesSetToNull, 'installment_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('installment_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['installment_number'] = $installment_number;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonMetaModel|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonMetaModel|null $meta meta
     *
     * @return self
     */
    public function setMeta($meta)
    {
        if (is_null($meta)) {
            throw new \InvalidArgumentException('non-nullable meta cannot be null');
        }
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets refund_operations
     *
     * @return \OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsRefundOperationLightModel[]|null
     */
    public function getRefundOperations()
    {
        return $this->container['refund_operations'];
    }

    /**
     * Sets refund_operations
     *
     * @param \OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsRefundOperationLightModel[]|null $refund_operations The refund operations for the specific payment.
     *
     * @return self
     */
    public function setRefundOperations($refund_operations)
    {
        if (is_null($refund_operations)) {
            array_push($this->openAPINullablesSetToNull, 'refund_operations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('refund_operations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['refund_operations'] = $refund_operations;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


