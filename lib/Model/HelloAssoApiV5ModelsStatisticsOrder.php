<?php
/**
 * HelloAssoApiV5ModelsStatisticsOrder
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
 * HelloAssoApiV5ModelsStatisticsOrder Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HelloAssoApiV5ModelsStatisticsOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HelloAsso.Api.V5.Models.Statistics.Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payer' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsPayer',
        'items' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsOrderItem[]',
        'payments' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsOrderPayment[]',
        'amount' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsOrderAmountModel',
        'id' => 'int',
        'date' => '\DateTime',
        'form_slug' => 'string',
        'form_type' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType',
        'organization_name' => 'string',
        'organization_slug' => 'string',
        'organization_type' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsOrganizationType',
        'organization_is_under_coluche_law' => 'bool',
        'checkout_intent_id' => 'int',
        'meta' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonMetaModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payer' => null,
        'items' => null,
        'payments' => null,
        'amount' => null,
        'id' => 'int32',
        'date' => 'date-time',
        'form_slug' => null,
        'form_type' => null,
        'organization_name' => null,
        'organization_slug' => null,
        'organization_type' => null,
        'organization_is_under_coluche_law' => null,
        'checkout_intent_id' => 'int32',
        'meta' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'payer' => false,
        'items' => true,
        'payments' => true,
        'amount' => false,
        'id' => false,
        'date' => false,
        'form_slug' => true,
        'form_type' => false,
        'organization_name' => true,
        'organization_slug' => true,
        'organization_type' => false,
        'organization_is_under_coluche_law' => false,
        'checkout_intent_id' => true,
        'meta' => false
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
        'payer' => 'payer',
        'items' => 'items',
        'payments' => 'payments',
        'amount' => 'amount',
        'id' => 'id',
        'date' => 'date',
        'form_slug' => 'formSlug',
        'form_type' => 'formType',
        'organization_name' => 'organizationName',
        'organization_slug' => 'organizationSlug',
        'organization_type' => 'organizationType',
        'organization_is_under_coluche_law' => 'organizationIsUnderColucheLaw',
        'checkout_intent_id' => 'checkoutIntentId',
        'meta' => 'meta'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payer' => 'setPayer',
        'items' => 'setItems',
        'payments' => 'setPayments',
        'amount' => 'setAmount',
        'id' => 'setId',
        'date' => 'setDate',
        'form_slug' => 'setFormSlug',
        'form_type' => 'setFormType',
        'organization_name' => 'setOrganizationName',
        'organization_slug' => 'setOrganizationSlug',
        'organization_type' => 'setOrganizationType',
        'organization_is_under_coluche_law' => 'setOrganizationIsUnderColucheLaw',
        'checkout_intent_id' => 'setCheckoutIntentId',
        'meta' => 'setMeta'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payer' => 'getPayer',
        'items' => 'getItems',
        'payments' => 'getPayments',
        'amount' => 'getAmount',
        'id' => 'getId',
        'date' => 'getDate',
        'form_slug' => 'getFormSlug',
        'form_type' => 'getFormType',
        'organization_name' => 'getOrganizationName',
        'organization_slug' => 'getOrganizationSlug',
        'organization_type' => 'getOrganizationType',
        'organization_is_under_coluche_law' => 'getOrganizationIsUnderColucheLaw',
        'checkout_intent_id' => 'getCheckoutIntentId',
        'meta' => 'getMeta'
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
        $this->setIfExists('payer', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('payments', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('form_slug', $data ?? [], null);
        $this->setIfExists('form_type', $data ?? [], null);
        $this->setIfExists('organization_name', $data ?? [], null);
        $this->setIfExists('organization_slug', $data ?? [], null);
        $this->setIfExists('organization_type', $data ?? [], null);
        $this->setIfExists('organization_is_under_coluche_law', $data ?? [], null);
        $this->setIfExists('checkout_intent_id', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
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
     * Gets payer
     *
     * @return \OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsPayer|null
     */
    public function getPayer()
    {
        return $this->container['payer'];
    }

    /**
     * Sets payer
     *
     * @param \OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsPayer|null $payer payer
     *
     * @return self
     */
    public function setPayer($payer)
    {
        if (is_null($payer)) {
            throw new \InvalidArgumentException('non-nullable payer cannot be null');
        }
        $this->container['payer'] = $payer;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsOrderItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsOrderItem[]|null $items All items of the order
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            array_push($this->openAPINullablesSetToNull, 'items');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('items', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsOrderPayment[]|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsOrderPayment[]|null $payments All payments of the order
     *
     * @return self
     */
    public function setPayments($payments)
    {
        if (is_null($payments)) {
            array_push($this->openAPINullablesSetToNull, 'payments');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payments', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsOrderAmountModel|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsOrderAmountModel|null $amount amount
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
     * @param int|null $id The ID of the Order
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
     * @param \DateTime|null $date Order creation date
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
     * Gets form_slug
     *
     * @return string|null
     */
    public function getFormSlug()
    {
        return $this->container['form_slug'];
    }

    /**
     * Sets form_slug
     *
     * @param string|null $form_slug FormSlug (lowercase name of the form without special characters)
     *
     * @return self
     */
    public function setFormSlug($form_slug)
    {
        if (is_null($form_slug)) {
            array_push($this->openAPINullablesSetToNull, 'form_slug');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('form_slug', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['form_slug'] = $form_slug;

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
     * Gets organization_name
     *
     * @return string|null
     */
    public function getOrganizationName()
    {
        return $this->container['organization_name'];
    }

    /**
     * Sets organization_name
     *
     * @param string|null $organization_name The organization name.
     *
     * @return self
     */
    public function setOrganizationName($organization_name)
    {
        if (is_null($organization_name)) {
            array_push($this->openAPINullablesSetToNull, 'organization_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('organization_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['organization_name'] = $organization_name;

        return $this;
    }

    /**
     * Gets organization_slug
     *
     * @return string|null
     */
    public function getOrganizationSlug()
    {
        return $this->container['organization_slug'];
    }

    /**
     * Sets organization_slug
     *
     * @param string|null $organization_slug OrganizationSlug (lowercase name of the organization without special characters)
     *
     * @return self
     */
    public function setOrganizationSlug($organization_slug)
    {
        if (is_null($organization_slug)) {
            array_push($this->openAPINullablesSetToNull, 'organization_slug');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('organization_slug', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['organization_slug'] = $organization_slug;

        return $this;
    }

    /**
     * Gets organization_type
     *
     * @return \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsOrganizationType|null
     */
    public function getOrganizationType()
    {
        return $this->container['organization_type'];
    }

    /**
     * Sets organization_type
     *
     * @param \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsOrganizationType|null $organization_type organization_type
     *
     * @return self
     */
    public function setOrganizationType($organization_type)
    {
        if (is_null($organization_type)) {
            throw new \InvalidArgumentException('non-nullable organization_type cannot be null');
        }
        $this->container['organization_type'] = $organization_type;

        return $this;
    }

    /**
     * Gets organization_is_under_coluche_law
     *
     * @return bool|null
     */
    public function getOrganizationIsUnderColucheLaw()
    {
        return $this->container['organization_is_under_coluche_law'];
    }

    /**
     * Sets organization_is_under_coluche_law
     *
     * @param bool|null $organization_is_under_coluche_law Whether or not the organization is subject to the coluche law
     *
     * @return self
     */
    public function setOrganizationIsUnderColucheLaw($organization_is_under_coluche_law)
    {
        if (is_null($organization_is_under_coluche_law)) {
            throw new \InvalidArgumentException('non-nullable organization_is_under_coluche_law cannot be null');
        }
        $this->container['organization_is_under_coluche_law'] = $organization_is_under_coluche_law;

        return $this;
    }

    /**
     * Gets checkout_intent_id
     *
     * @return int|null
     */
    public function getCheckoutIntentId()
    {
        return $this->container['checkout_intent_id'];
    }

    /**
     * Sets checkout_intent_id
     *
     * @param int|null $checkout_intent_id Checkout intent Id if available
     *
     * @return self
     */
    public function setCheckoutIntentId($checkout_intent_id)
    {
        if (is_null($checkout_intent_id)) {
            array_push($this->openAPINullablesSetToNull, 'checkout_intent_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('checkout_intent_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['checkout_intent_id'] = $checkout_intent_id;

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

