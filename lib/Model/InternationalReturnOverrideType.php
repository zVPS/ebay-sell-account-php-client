<?php
/**
 * InternationalReturnOverrideType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Ebay\Sell\Account
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
use \Ebay\Sell\Account\ObjectSerializer;

/**
 * InternationalReturnOverrideType Class Doc Comment
 *
 * @category Class
 * @description This type defines the fields for a seller&#39;s international return policy. If a seller does not populate the fields in this complex type, the international return policy defaults to the return policy set for domestic returns.
 * @package  Ebay\Sell\Account
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InternationalReturnOverrideType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InternationalReturnOverrideType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'return_method' => 'string',
        'return_period' => '\Ebay\Sell\Account\Model\TimeDuration',
        'returns_accepted' => 'bool',
        'return_shipping_cost_payer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'return_method' => null,
        'return_period' => null,
        'returns_accepted' => null,
        'return_shipping_cost_payer' => null
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
        'return_method' => 'returnMethod',
        'return_period' => 'returnPeriod',
        'returns_accepted' => 'returnsAccepted',
        'return_shipping_cost_payer' => 'returnShippingCostPayer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'return_method' => 'setReturnMethod',
        'return_period' => 'setReturnPeriod',
        'returns_accepted' => 'setReturnsAccepted',
        'return_shipping_cost_payer' => 'setReturnShippingCostPayer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'return_method' => 'getReturnMethod',
        'return_period' => 'getReturnPeriod',
        'returns_accepted' => 'getReturnsAccepted',
        'return_shipping_cost_payer' => 'getReturnShippingCostPayer'
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
        $this->container['return_method'] = isset($data['return_method']) ? $data['return_method'] : null;
        $this->container['return_period'] = isset($data['return_period']) ? $data['return_period'] : null;
        $this->container['returns_accepted'] = isset($data['returns_accepted']) ? $data['returns_accepted'] : null;
        $this->container['return_shipping_cost_payer'] = isset($data['return_shipping_cost_payer']) ? $data['return_shipping_cost_payer'] : null;
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
     * Gets return_method
     *
     * @return string|null
     */
    public function getReturnMethod()
    {
        return $this->container['return_method'];
    }

    /**
     * Sets return_method
     *
     * @param string|null $return_method Valid in the US marketplace only, this optional field indicates additional services (other than money-back) that sellers can offer buyers for remorse returns. As of version 1.2.0, the only accepted value for this field is REPLACEMENT. This field is valid in only the US marketplace, any supplied value is ignored in other marketplaces. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnMethodEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setReturnMethod($return_method)
    {
        $this->container['return_method'] = $return_method;

        return $this;
    }

    /**
     * Gets return_period
     *
     * @return \Ebay\Sell\Account\Model\TimeDuration|null
     */
    public function getReturnPeriod()
    {
        return $this->container['return_period'];
    }

    /**
     * Sets return_period
     *
     * @param \Ebay\Sell\Account\Model\TimeDuration|null $return_period return_period
     *
     * @return self
     */
    public function setReturnPeriod($return_period)
    {
        $this->container['return_period'] = $return_period;

        return $this;
    }

    /**
     * Gets returns_accepted
     *
     * @return bool|null
     */
    public function getReturnsAccepted()
    {
        return $this->container['returns_accepted'];
    }

    /**
     * Sets returns_accepted
     *
     * @param bool|null $returns_accepted If set to true, the seller allows international returns. If set to false, the seller does not accept international returns. Required if the seller wants to set an international return policy that differs from their domestic return policy.
     *
     * @return self
     */
    public function setReturnsAccepted($returns_accepted)
    {
        $this->container['returns_accepted'] = $returns_accepted;

        return $this;
    }

    /**
     * Gets return_shipping_cost_payer
     *
     * @return string|null
     */
    public function getReturnShippingCostPayer()
    {
        return $this->container['return_shipping_cost_payer'];
    }

    /**
     * Sets return_shipping_cost_payer
     *
     * @param string|null $return_shipping_cost_payer This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either BUYER or SELLER. Depending on the return policy and specifics of the return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues. Required if the internationalOverride.returnsAccepted field is set to true. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnShippingCostPayerEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setReturnShippingCostPayer($return_shipping_cost_payer)
    {
        $this->container['return_shipping_cost_payer'] = $return_shipping_cost_payer;

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


