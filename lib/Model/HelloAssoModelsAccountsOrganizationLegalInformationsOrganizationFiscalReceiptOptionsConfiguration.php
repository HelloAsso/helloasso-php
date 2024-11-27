<?php
/**
 * HelloAssoModelsAccountsOrganizationLegalInformationsOrganizationFiscalReceiptOptionsConfiguration
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
 * HelloAssoModelsAccountsOrganizationLegalInformationsOrganizationFiscalReceiptOptionsConfiguration Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HelloAssoModelsAccountsOrganizationLegalInformationsOrganizationFiscalReceiptOptionsConfiguration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HelloAsso.Models.Accounts.OrganizationLegalInformations.OrganizationFiscalReceiptOptionsConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'purpose' => 'string',
        'cerfa_type_id' => 'int',
        'jo_category_id' => 'int',
        'format_option_model' => '\OpenAPI\Client\Model\HelloAssoModelsAccountsOrganizationLegalInformationsFiscalReceiptFormatOptionModel',
        'signatory_model' => '\OpenAPI\Client\Model\HelloAssoModelsAccountsOrganizationLegalInformationsFiscalReceiptSignatoryModel',
        'address_model' => '\OpenAPI\Client\Model\HelloAssoModelsComplianceV2CommonAddressAddressModelSnapshot'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'purpose' => null,
        'cerfa_type_id' => 'int32',
        'jo_category_id' => 'int32',
        'format_option_model' => null,
        'signatory_model' => null,
        'address_model' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'purpose' => true,
        'cerfa_type_id' => true,
        'jo_category_id' => true,
        'format_option_model' => false,
        'signatory_model' => false,
        'address_model' => false
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
        'purpose' => 'purpose',
        'cerfa_type_id' => 'cerfaTypeId',
        'jo_category_id' => 'joCategoryId',
        'format_option_model' => 'formatOptionModel',
        'signatory_model' => 'signatoryModel',
        'address_model' => 'addressModel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purpose' => 'setPurpose',
        'cerfa_type_id' => 'setCerfaTypeId',
        'jo_category_id' => 'setJoCategoryId',
        'format_option_model' => 'setFormatOptionModel',
        'signatory_model' => 'setSignatoryModel',
        'address_model' => 'setAddressModel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purpose' => 'getPurpose',
        'cerfa_type_id' => 'getCerfaTypeId',
        'jo_category_id' => 'getJoCategoryId',
        'format_option_model' => 'getFormatOptionModel',
        'signatory_model' => 'getSignatoryModel',
        'address_model' => 'getAddressModel'
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
        $this->setIfExists('purpose', $data ?? [], null);
        $this->setIfExists('cerfa_type_id', $data ?? [], null);
        $this->setIfExists('jo_category_id', $data ?? [], null);
        $this->setIfExists('format_option_model', $data ?? [], null);
        $this->setIfExists('signatory_model', $data ?? [], null);
        $this->setIfExists('address_model', $data ?? [], null);
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
     * Gets purpose
     *
     * @return string|null
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     *
     * @param string|null $purpose purpose
     *
     * @return self
     */
    public function setPurpose($purpose)
    {
        if (is_null($purpose)) {
            array_push($this->openAPINullablesSetToNull, 'purpose');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('purpose', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets cerfa_type_id
     *
     * @return int|null
     */
    public function getCerfaTypeId()
    {
        return $this->container['cerfa_type_id'];
    }

    /**
     * Sets cerfa_type_id
     *
     * @param int|null $cerfa_type_id cerfa_type_id
     *
     * @return self
     */
    public function setCerfaTypeId($cerfa_type_id)
    {
        if (is_null($cerfa_type_id)) {
            array_push($this->openAPINullablesSetToNull, 'cerfa_type_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cerfa_type_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cerfa_type_id'] = $cerfa_type_id;

        return $this;
    }

    /**
     * Gets jo_category_id
     *
     * @return int|null
     */
    public function getJoCategoryId()
    {
        return $this->container['jo_category_id'];
    }

    /**
     * Sets jo_category_id
     *
     * @param int|null $jo_category_id jo_category_id
     *
     * @return self
     */
    public function setJoCategoryId($jo_category_id)
    {
        if (is_null($jo_category_id)) {
            array_push($this->openAPINullablesSetToNull, 'jo_category_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('jo_category_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['jo_category_id'] = $jo_category_id;

        return $this;
    }

    /**
     * Gets format_option_model
     *
     * @return \OpenAPI\Client\Model\HelloAssoModelsAccountsOrganizationLegalInformationsFiscalReceiptFormatOptionModel|null
     */
    public function getFormatOptionModel()
    {
        return $this->container['format_option_model'];
    }

    /**
     * Sets format_option_model
     *
     * @param \OpenAPI\Client\Model\HelloAssoModelsAccountsOrganizationLegalInformationsFiscalReceiptFormatOptionModel|null $format_option_model format_option_model
     *
     * @return self
     */
    public function setFormatOptionModel($format_option_model)
    {
        if (is_null($format_option_model)) {
            throw new \InvalidArgumentException('non-nullable format_option_model cannot be null');
        }
        $this->container['format_option_model'] = $format_option_model;

        return $this;
    }

    /**
     * Gets signatory_model
     *
     * @return \OpenAPI\Client\Model\HelloAssoModelsAccountsOrganizationLegalInformationsFiscalReceiptSignatoryModel|null
     */
    public function getSignatoryModel()
    {
        return $this->container['signatory_model'];
    }

    /**
     * Sets signatory_model
     *
     * @param \OpenAPI\Client\Model\HelloAssoModelsAccountsOrganizationLegalInformationsFiscalReceiptSignatoryModel|null $signatory_model signatory_model
     *
     * @return self
     */
    public function setSignatoryModel($signatory_model)
    {
        if (is_null($signatory_model)) {
            throw new \InvalidArgumentException('non-nullable signatory_model cannot be null');
        }
        $this->container['signatory_model'] = $signatory_model;

        return $this;
    }

    /**
     * Gets address_model
     *
     * @return \OpenAPI\Client\Model\HelloAssoModelsComplianceV2CommonAddressAddressModelSnapshot|null
     */
    public function getAddressModel()
    {
        return $this->container['address_model'];
    }

    /**
     * Sets address_model
     *
     * @param \OpenAPI\Client\Model\HelloAssoModelsComplianceV2CommonAddressAddressModelSnapshot|null $address_model address_model
     *
     * @return self
     */
    public function setAddressModel($address_model)
    {
        if (is_null($address_model)) {
            throw new \InvalidArgumentException('non-nullable address_model cannot be null');
        }
        $this->container['address_model'] = $address_model;

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

