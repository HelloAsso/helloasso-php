<?php
/**
 * HelloAssoApiV5ModelsOrganizationOrganizationModel
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
 * HelloAssoApiV5ModelsOrganizationOrganizationModel Class Doc Comment
 *
 * @category Class
 * @description OrganizationsModel class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HelloAssoApiV5ModelsOrganizationOrganizationModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HelloAsso.Api.V5.Models.Organization.OrganizationModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_authenticated' => 'bool',
        'banner' => 'string',
        'fiscal_receipt_eligibility' => 'bool',
        'fiscal_receipt_issuance_enabled' => 'bool',
        'type' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsOrganizationType',
        'category' => 'string',
        'address' => 'string',
        'geolocation' => '\OpenAPI\Client\Model\HelloAssoModelsSharedGeoLocation',
        'rna_number' => 'string',
        'logo' => 'string',
        'name' => 'string',
        'role' => '\OpenAPI\Client\Model\HelloAssoModelsEnumsGlobalRole',
        'city' => 'string',
        'zip_code' => 'string',
        'description' => 'string',
        'update_date' => '\DateTime',
        'category_jo_id' => 'int',
        'url' => 'string',
        'organization_slug' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_authenticated' => null,
        'banner' => null,
        'fiscal_receipt_eligibility' => null,
        'fiscal_receipt_issuance_enabled' => null,
        'type' => null,
        'category' => null,
        'address' => null,
        'geolocation' => null,
        'rna_number' => null,
        'logo' => null,
        'name' => null,
        'role' => null,
        'city' => null,
        'zip_code' => null,
        'description' => null,
        'update_date' => 'date-time',
        'category_jo_id' => 'int32',
        'url' => null,
        'organization_slug' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_authenticated' => true,
        'banner' => true,
        'fiscal_receipt_eligibility' => false,
        'fiscal_receipt_issuance_enabled' => false,
        'type' => false,
        'category' => true,
        'address' => true,
        'geolocation' => false,
        'rna_number' => true,
        'logo' => true,
        'name' => true,
        'role' => false,
        'city' => true,
        'zip_code' => true,
        'description' => true,
        'update_date' => false,
        'category_jo_id' => true,
        'url' => true,
        'organization_slug' => true
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
        'is_authenticated' => 'isAuthenticated',
        'banner' => 'banner',
        'fiscal_receipt_eligibility' => 'fiscalReceiptEligibility',
        'fiscal_receipt_issuance_enabled' => 'fiscalReceiptIssuanceEnabled',
        'type' => 'type',
        'category' => 'category',
        'address' => 'address',
        'geolocation' => 'geolocation',
        'rna_number' => 'rnaNumber',
        'logo' => 'logo',
        'name' => 'name',
        'role' => 'role',
        'city' => 'city',
        'zip_code' => 'zipCode',
        'description' => 'description',
        'update_date' => 'updateDate',
        'category_jo_id' => 'categoryJoId',
        'url' => 'url',
        'organization_slug' => 'organizationSlug'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_authenticated' => 'setIsAuthenticated',
        'banner' => 'setBanner',
        'fiscal_receipt_eligibility' => 'setFiscalReceiptEligibility',
        'fiscal_receipt_issuance_enabled' => 'setFiscalReceiptIssuanceEnabled',
        'type' => 'setType',
        'category' => 'setCategory',
        'address' => 'setAddress',
        'geolocation' => 'setGeolocation',
        'rna_number' => 'setRnaNumber',
        'logo' => 'setLogo',
        'name' => 'setName',
        'role' => 'setRole',
        'city' => 'setCity',
        'zip_code' => 'setZipCode',
        'description' => 'setDescription',
        'update_date' => 'setUpdateDate',
        'category_jo_id' => 'setCategoryJoId',
        'url' => 'setUrl',
        'organization_slug' => 'setOrganizationSlug'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_authenticated' => 'getIsAuthenticated',
        'banner' => 'getBanner',
        'fiscal_receipt_eligibility' => 'getFiscalReceiptEligibility',
        'fiscal_receipt_issuance_enabled' => 'getFiscalReceiptIssuanceEnabled',
        'type' => 'getType',
        'category' => 'getCategory',
        'address' => 'getAddress',
        'geolocation' => 'getGeolocation',
        'rna_number' => 'getRnaNumber',
        'logo' => 'getLogo',
        'name' => 'getName',
        'role' => 'getRole',
        'city' => 'getCity',
        'zip_code' => 'getZipCode',
        'description' => 'getDescription',
        'update_date' => 'getUpdateDate',
        'category_jo_id' => 'getCategoryJoId',
        'url' => 'getUrl',
        'organization_slug' => 'getOrganizationSlug'
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
        $this->setIfExists('is_authenticated', $data ?? [], null);
        $this->setIfExists('banner', $data ?? [], null);
        $this->setIfExists('fiscal_receipt_eligibility', $data ?? [], null);
        $this->setIfExists('fiscal_receipt_issuance_enabled', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('geolocation', $data ?? [], null);
        $this->setIfExists('rna_number', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('role', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('zip_code', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('update_date', $data ?? [], null);
        $this->setIfExists('category_jo_id', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('organization_slug', $data ?? [], null);
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
     * Gets is_authenticated
     *
     * @return bool|null
     */
    public function getIsAuthenticated()
    {
        return $this->container['is_authenticated'];
    }

    /**
     * Sets is_authenticated
     *
     * @param bool|null $is_authenticated The organization is authenticated. Property returned only when asked by an organization admin.
     *
     * @return self
     */
    public function setIsAuthenticated($is_authenticated)
    {
        if (is_null($is_authenticated)) {
            array_push($this->openAPINullablesSetToNull, 'is_authenticated');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_authenticated', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_authenticated'] = $is_authenticated;

        return $this;
    }

    /**
     * Gets banner
     *
     * @return string|null
     */
    public function getBanner()
    {
        return $this->container['banner'];
    }

    /**
     * Sets banner
     *
     * @param string|null $banner The organization banner
     *
     * @return self
     */
    public function setBanner($banner)
    {
        if (is_null($banner)) {
            array_push($this->openAPINullablesSetToNull, 'banner');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('banner', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['banner'] = $banner;

        return $this;
    }

    /**
     * Gets fiscal_receipt_eligibility
     *
     * @return bool|null
     */
    public function getFiscalReceiptEligibility()
    {
        return $this->container['fiscal_receipt_eligibility'];
    }

    /**
     * Sets fiscal_receipt_eligibility
     *
     * @param bool|null $fiscal_receipt_eligibility The organism can issue fiscal receipts (type ok and has not deactivated it)  Must configure it and be authenticated to become enabled
     *
     * @return self
     */
    public function setFiscalReceiptEligibility($fiscal_receipt_eligibility)
    {
        if (is_null($fiscal_receipt_eligibility)) {
            throw new \InvalidArgumentException('non-nullable fiscal_receipt_eligibility cannot be null');
        }
        $this->container['fiscal_receipt_eligibility'] = $fiscal_receipt_eligibility;

        return $this;
    }

    /**
     * Gets fiscal_receipt_issuance_enabled
     *
     * @return bool|null
     */
    public function getFiscalReceiptIssuanceEnabled()
    {
        return $this->container['fiscal_receipt_issuance_enabled'];
    }

    /**
     * Sets fiscal_receipt_issuance_enabled
     *
     * @param bool|null $fiscal_receipt_issuance_enabled The organism is eligible, has set up his options, and is authenticated.
     *
     * @return self
     */
    public function setFiscalReceiptIssuanceEnabled($fiscal_receipt_issuance_enabled)
    {
        if (is_null($fiscal_receipt_issuance_enabled)) {
            throw new \InvalidArgumentException('non-nullable fiscal_receipt_issuance_enabled cannot be null');
        }
        $this->container['fiscal_receipt_issuance_enabled'] = $fiscal_receipt_issuance_enabled;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsOrganizationType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsOrganizationType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category Organization category label
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            array_push($this->openAPINullablesSetToNull, 'category');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('category', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Organization Address (for authorized applications or if authorized by the organization)
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            array_push($this->openAPINullablesSetToNull, 'address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets geolocation
     *
     * @return \OpenAPI\Client\Model\HelloAssoModelsSharedGeoLocation|null
     */
    public function getGeolocation()
    {
        return $this->container['geolocation'];
    }

    /**
     * Sets geolocation
     *
     * @param \OpenAPI\Client\Model\HelloAssoModelsSharedGeoLocation|null $geolocation geolocation
     *
     * @return self
     */
    public function setGeolocation($geolocation)
    {
        if (is_null($geolocation)) {
            throw new \InvalidArgumentException('non-nullable geolocation cannot be null');
        }
        $this->container['geolocation'] = $geolocation;

        return $this;
    }

    /**
     * Gets rna_number
     *
     * @return string|null
     */
    public function getRnaNumber()
    {
        return $this->container['rna_number'];
    }

    /**
     * Sets rna_number
     *
     * @param string|null $rna_number Unique identifier assigned when creating the association
     *
     * @return self
     */
    public function setRnaNumber($rna_number)
    {
        if (is_null($rna_number)) {
            array_push($this->openAPINullablesSetToNull, 'rna_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rna_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rna_number'] = $rna_number;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo Logo of organization
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (is_null($logo)) {
            array_push($this->openAPINullablesSetToNull, 'logo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('logo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of organization
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets role
     *
     * @return \OpenAPI\Client\Model\HelloAssoModelsEnumsGlobalRole|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param \OpenAPI\Client\Model\HelloAssoModelsEnumsGlobalRole|null $role role
     *
     * @return self
     */
    public function setRole($role)
    {
        if (is_null($role)) {
            throw new \InvalidArgumentException('non-nullable role cannot be null');
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city Organization city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            array_push($this->openAPINullablesSetToNull, 'city');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('city', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string|null $zip_code Organization zip code
     *
     * @return self
     */
    public function setZipCode($zip_code)
    {
        if (is_null($zip_code)) {
            array_push($this->openAPINullablesSetToNull, 'zip_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('zip_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Organization description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets update_date
     *
     * @return \DateTime|null
     */
    public function getUpdateDate()
    {
        return $this->container['update_date'];
    }

    /**
     * Sets update_date
     *
     * @param \DateTime|null $update_date Last update date of the organization
     *
     * @return self
     */
    public function setUpdateDate($update_date)
    {
        if (is_null($update_date)) {
            throw new \InvalidArgumentException('non-nullable update_date cannot be null');
        }
        $this->container['update_date'] = $update_date;

        return $this;
    }

    /**
     * Gets category_jo_id
     *
     * @return int|null
     */
    public function getCategoryJoId()
    {
        return $this->container['category_jo_id'];
    }

    /**
     * Sets category_jo_id
     *
     * @param int|null $category_jo_id category_jo_id
     *
     * @return self
     */
    public function setCategoryJoId($category_jo_id)
    {
        if (is_null($category_jo_id)) {
            array_push($this->openAPINullablesSetToNull, 'category_jo_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('category_jo_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['category_jo_id'] = $category_jo_id;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The organization url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            array_push($this->openAPINullablesSetToNull, 'url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['url'] = $url;

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
     * @param string|null $organization_slug The organization slug
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


