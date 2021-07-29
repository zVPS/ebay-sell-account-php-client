<?php
/**
 * KycCheck
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Ebay\Sell
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Account API
 *
 * The Account API gives sellers the ability to configure their eBay seller accounts, including the seller's policies (the Fulfillment Policy, Payment Policy, and Return Policy), opt in and out of eBay seller programs, configure sales tax tables, and get account information. For details on the availability of the methods in this API, see Account API requirements and restrictions.
 *
 * The version of the OpenAPI document: v1.6.3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ebay\Sell\Account\Model;

use \ArrayAccess;
use \Ebay\Sell\ObjectSerializer;

/**
 * KycCheck Class Doc Comment
 *
 * @category Class
 * @description This type is used to provide details about any KYC check that is applicable to the managed payments seller.
 * @package  Ebay\Sell
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class KycCheck implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'KycCheck';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'data_required' => 'string',
        'due_date' => 'string',
        'remedy_url' => 'string',
        'alert' => 'string',
        'detail_message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'data_required' => null,
        'due_date' => null,
        'remedy_url' => null,
        'alert' => null,
        'detail_message' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'data_required' => 'dataRequired',
        'due_date' => 'dueDate',
        'remedy_url' => 'remedyUrl',
        'alert' => 'alert',
        'detail_message' => 'detailMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_required' => 'setDataRequired',
        'due_date' => 'setDueDate',
        'remedy_url' => 'setRemedyUrl',
        'alert' => 'setAlert',
        'detail_message' => 'setDetailMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_required' => 'getDataRequired',
        'due_date' => 'getDueDate',
        'remedy_url' => 'getRemedyUrl',
        'alert' => 'getAlert',
        'detail_message' => 'getDetailMessage'
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
        $this->container['data_required'] = isset($data['data_required']) ? $data['data_required'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['remedy_url'] = isset($data['remedy_url']) ? $data['remedy_url'] : null;
        $this->container['alert'] = isset($data['alert']) ? $data['alert'] : null;
        $this->container['detail_message'] = isset($data['detail_message']) ? $data['detail_message'] : null;
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
     * Gets data_required
     *
     * @return string|null
     */
    public function getDataRequired()
    {
        return $this->container['data_required'];
    }

    /**
     * Sets data_required
     *
     * @param string|null $data_required The enumeration value returned in this field categorizes the type of details needed for the KYC check. More information about the check is shown in the detailMessage and other applicable, corresponding fields. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/kyc:DetailsType'>eBay API documentation</a>
     *
     * @return self
     */
    public function setDataRequired($data_required)
    {
        $this->container['data_required'] = $data_required;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param string|null $due_date The timestamp in this field indicates the date by which the seller should resolve the KYC requirement. The timestamp in this field uses the UTC date and time format described in the ISO 8601 Standard. See below for this format and an example: MM-DD-YYYY HH:MM:SS 06-05-2020 10:34:18
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets remedy_url
     *
     * @return string|null
     */
    public function getRemedyUrl()
    {
        return $this->container['remedy_url'];
    }

    /**
     * Sets remedy_url
     *
     * @param string|null $remedy_url If applicable and available, a URL will be returned in this field, and the link will take the seller to an eBay page where they can provide the requested information.
     *
     * @return self
     */
    public function setRemedyUrl($remedy_url)
    {
        $this->container['remedy_url'] = $remedy_url;

        return $this;
    }

    /**
     * Gets alert
     *
     * @return string|null
     */
    public function getAlert()
    {
        return $this->container['alert'];
    }

    /**
     * Sets alert
     *
     * @param string|null $alert This field gives a short summary of what is required from the seller. An example might be, 'Upload bank document now.'. The detailMessage field will often provide more details on what is required of the seller.
     *
     * @return self
     */
    public function setAlert($alert)
    {
        $this->container['alert'] = $alert;

        return $this;
    }

    /**
     * Gets detail_message
     *
     * @return string|null
     */
    public function getDetailMessage()
    {
        return $this->container['detail_message'];
    }

    /**
     * Sets detail_message
     *
     * @param string|null $detail_message This field gives a detailed message about what is required from the seller. An example might be, 'Please upload a bank document by 2020-08-01 to get your account back in good standing.'.
     *
     * @return self
     */
    public function setDetailMessage($detail_message)
    {
        $this->container['detail_message'] = $detail_message;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


