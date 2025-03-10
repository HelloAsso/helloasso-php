<?php
/**
 * HelloAssoApiV5ModelsFormsFormLightModel
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * HelloAssoApiV5ModelsFormsFormLightModel Class Doc Comment
 *
 * @category Class
 * @description FormLightModel class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HelloAssoApiV5ModelsFormsFormLightModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HelloAsso.Api.V5.Models.Forms.FormLightModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'banner' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonDocumentModel',
        'currency' => 'string',
        'description' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'logo' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonDocumentModel',
        'meta' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonMetaModel',
        'state' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormState',
        'title' => 'string',
        'private_title' => 'string',
        'widget_button_url' => 'string',
        'widget_full_url' => 'string',
        'widget_vignette_horizontal_url' => 'string',
        'widget_vignette_vertical_url' => 'string',
        'widget_counter_url' => 'string',
        'form_slug' => 'string',
        'form_type' => '\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType',
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
        'banner' => null,
        'currency' => null,
        'description' => null,
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'logo' => null,
        'meta' => null,
        'state' => null,
        'title' => null,
        'private_title' => null,
        'widget_button_url' => null,
        'widget_full_url' => null,
        'widget_vignette_horizontal_url' => null,
        'widget_vignette_vertical_url' => null,
        'widget_counter_url' => null,
        'form_slug' => null,
        'form_type' => null,
        'url' => null,
        'organization_slug' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'banner' => false,
        'currency' => true,
        'description' => true,
        'start_date' => true,
        'end_date' => true,
        'logo' => false,
        'meta' => false,
        'state' => false,
        'title' => true,
        'private_title' => true,
        'widget_button_url' => true,
        'widget_full_url' => true,
        'widget_vignette_horizontal_url' => true,
        'widget_vignette_vertical_url' => true,
        'widget_counter_url' => true,
        'form_slug' => true,
        'form_type' => false,
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
        'banner' => 'banner',
        'currency' => 'currency',
        'description' => 'description',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'logo' => 'logo',
        'meta' => 'meta',
        'state' => 'state',
        'title' => 'title',
        'private_title' => 'privateTitle',
        'widget_button_url' => 'widgetButtonUrl',
        'widget_full_url' => 'widgetFullUrl',
        'widget_vignette_horizontal_url' => 'widgetVignetteHorizontalUrl',
        'widget_vignette_vertical_url' => 'widgetVignetteVerticalUrl',
        'widget_counter_url' => 'widgetCounterUrl',
        'form_slug' => 'formSlug',
        'form_type' => 'formType',
        'url' => 'url',
        'organization_slug' => 'organizationSlug'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'banner' => 'setBanner',
        'currency' => 'setCurrency',
        'description' => 'setDescription',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'logo' => 'setLogo',
        'meta' => 'setMeta',
        'state' => 'setState',
        'title' => 'setTitle',
        'private_title' => 'setPrivateTitle',
        'widget_button_url' => 'setWidgetButtonUrl',
        'widget_full_url' => 'setWidgetFullUrl',
        'widget_vignette_horizontal_url' => 'setWidgetVignetteHorizontalUrl',
        'widget_vignette_vertical_url' => 'setWidgetVignetteVerticalUrl',
        'widget_counter_url' => 'setWidgetCounterUrl',
        'form_slug' => 'setFormSlug',
        'form_type' => 'setFormType',
        'url' => 'setUrl',
        'organization_slug' => 'setOrganizationSlug'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'banner' => 'getBanner',
        'currency' => 'getCurrency',
        'description' => 'getDescription',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'logo' => 'getLogo',
        'meta' => 'getMeta',
        'state' => 'getState',
        'title' => 'getTitle',
        'private_title' => 'getPrivateTitle',
        'widget_button_url' => 'getWidgetButtonUrl',
        'widget_full_url' => 'getWidgetFullUrl',
        'widget_vignette_horizontal_url' => 'getWidgetVignetteHorizontalUrl',
        'widget_vignette_vertical_url' => 'getWidgetVignetteVerticalUrl',
        'widget_counter_url' => 'getWidgetCounterUrl',
        'form_slug' => 'getFormSlug',
        'form_type' => 'getFormType',
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('banner', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('private_title', $data ?? [], null);
        $this->setIfExists('widget_button_url', $data ?? [], null);
        $this->setIfExists('widget_full_url', $data ?? [], null);
        $this->setIfExists('widget_vignette_horizontal_url', $data ?? [], null);
        $this->setIfExists('widget_vignette_vertical_url', $data ?? [], null);
        $this->setIfExists('widget_counter_url', $data ?? [], null);
        $this->setIfExists('form_slug', $data ?? [], null);
        $this->setIfExists('form_type', $data ?? [], null);
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
     * Gets banner
     *
     * @return \OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonDocumentModel|null
     */
    public function getBanner()
    {
        return $this->container['banner'];
    }

    /**
     * Sets banner
     *
     * @param \OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonDocumentModel|null $banner banner
     *
     * @return self
     */
    public function setBanner($banner)
    {
        if (is_null($banner)) {
            throw new \InvalidArgumentException('non-nullable banner cannot be null');
        }
        $this->container['banner'] = $banner;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            array_push($this->openAPINullablesSetToNull, 'currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currency'] = $currency;

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
     * @param string|null $description Short description (one line)
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
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date The datetime of the activity start
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            array_push($this->openAPINullablesSetToNull, 'start_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('start_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date The datetime of the activity end
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            array_push($this->openAPINullablesSetToNull, 'end_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('end_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return \OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonDocumentModel|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param \OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonDocumentModel|null $logo logo
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (is_null($logo)) {
            throw new \InvalidArgumentException('non-nullable logo cannot be null');
        }
        $this->container['logo'] = $logo;

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
     * Gets state
     *
     * @return \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormState|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            array_push($this->openAPINullablesSetToNull, 'title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets private_title
     *
     * @return string|null
     */
    public function getPrivateTitle()
    {
        return $this->container['private_title'];
    }

    /**
     * Sets private_title
     *
     * @param string|null $private_title Private Title
     *
     * @return self
     */
    public function setPrivateTitle($private_title)
    {
        if (is_null($private_title)) {
            array_push($this->openAPINullablesSetToNull, 'private_title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('private_title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['private_title'] = $private_title;

        return $this;
    }

    /**
     * Gets widget_button_url
     *
     * @return string|null
     */
    public function getWidgetButtonUrl()
    {
        return $this->container['widget_button_url'];
    }

    /**
     * Sets widget_button_url
     *
     * @param string|null $widget_button_url Url of the widget button
     *
     * @return self
     */
    public function setWidgetButtonUrl($widget_button_url)
    {
        if (is_null($widget_button_url)) {
            array_push($this->openAPINullablesSetToNull, 'widget_button_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('widget_button_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['widget_button_url'] = $widget_button_url;

        return $this;
    }

    /**
     * Gets widget_full_url
     *
     * @return string|null
     */
    public function getWidgetFullUrl()
    {
        return $this->container['widget_full_url'];
    }

    /**
     * Sets widget_full_url
     *
     * @param string|null $widget_full_url Url of the form widget
     *
     * @return self
     */
    public function setWidgetFullUrl($widget_full_url)
    {
        if (is_null($widget_full_url)) {
            array_push($this->openAPINullablesSetToNull, 'widget_full_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('widget_full_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['widget_full_url'] = $widget_full_url;

        return $this;
    }

    /**
     * Gets widget_vignette_horizontal_url
     *
     * @return string|null
     */
    public function getWidgetVignetteHorizontalUrl()
    {
        return $this->container['widget_vignette_horizontal_url'];
    }

    /**
     * Sets widget_vignette_horizontal_url
     *
     * @param string|null $widget_vignette_horizontal_url Url of the horizontal vignette widget
     *
     * @return self
     */
    public function setWidgetVignetteHorizontalUrl($widget_vignette_horizontal_url)
    {
        if (is_null($widget_vignette_horizontal_url)) {
            array_push($this->openAPINullablesSetToNull, 'widget_vignette_horizontal_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('widget_vignette_horizontal_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['widget_vignette_horizontal_url'] = $widget_vignette_horizontal_url;

        return $this;
    }

    /**
     * Gets widget_vignette_vertical_url
     *
     * @return string|null
     */
    public function getWidgetVignetteVerticalUrl()
    {
        return $this->container['widget_vignette_vertical_url'];
    }

    /**
     * Sets widget_vignette_vertical_url
     *
     * @param string|null $widget_vignette_vertical_url Url of the vertical vignette widget
     *
     * @return self
     */
    public function setWidgetVignetteVerticalUrl($widget_vignette_vertical_url)
    {
        if (is_null($widget_vignette_vertical_url)) {
            array_push($this->openAPINullablesSetToNull, 'widget_vignette_vertical_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('widget_vignette_vertical_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['widget_vignette_vertical_url'] = $widget_vignette_vertical_url;

        return $this;
    }

    /**
     * Gets widget_counter_url
     *
     * @return string|null
     */
    public function getWidgetCounterUrl()
    {
        return $this->container['widget_counter_url'];
    }

    /**
     * Sets widget_counter_url
     *
     * @param string|null $widget_counter_url Url of the counter widget
     *
     * @return self
     */
    public function setWidgetCounterUrl($widget_counter_url)
    {
        if (is_null($widget_counter_url)) {
            array_push($this->openAPINullablesSetToNull, 'widget_counter_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('widget_counter_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['widget_counter_url'] = $widget_counter_url;

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
     * @param string|null $form_slug The form slug
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
     * @param string|null $url The form url
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


