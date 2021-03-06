<?php
/**
 * PaymentMethod
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
 * PaymentMethod Class Doc Comment
 *
 * @category Class
 * @description Container specifying a payment method that is accepted by the seller. Specify multiple payment methods by repeating this container. For more on payment methods, see &lt;a href&#x3D;\&quot;http://pages.ebay.com/help/policies/accepted-payments-policy.html\&quot;&gt;Accepted payments policy&lt;/a&gt;.  &lt;p&gt;Note that payment methods are not applicable to classified ad listings &amp;ndash; all classified ad payments are handled off of the eBay platform.&lt;/p&gt;
 * @package  Ebay\Sell\Account
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentMethod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brands' => 'string[]',
        'payment_method_type' => 'string',
        'recipient_account_reference' => '\Ebay\Sell\Account\Model\RecipientAccountReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'brands' => null,
        'payment_method_type' => null,
        'recipient_account_reference' => null
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
        'brands' => 'brands',
        'payment_method_type' => 'paymentMethodType',
        'recipient_account_reference' => 'recipientAccountReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brands' => 'setBrands',
        'payment_method_type' => 'setPaymentMethodType',
        'recipient_account_reference' => 'setRecipientAccountReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brands' => 'getBrands',
        'payment_method_type' => 'getPaymentMethodType',
        'recipient_account_reference' => 'getRecipientAccountReference'
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
        $this->container['brands'] = isset($data['brands']) ? $data['brands'] : null;
        $this->container['payment_method_type'] = isset($data['payment_method_type']) ? $data['payment_method_type'] : null;
        $this->container['recipient_account_reference'] = isset($data['recipient_account_reference']) ? $data['recipient_account_reference'] : null;
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
     * Gets brands
     *
     * @return string[]|null
     */
    public function getBrands()
    {
        return $this->container['brands'];
    }

    /**
     * Sets brands
     *
     * @param string[]|null $brands It's important to note that the credit card brands Visa and MasterCard must both be listed if either one is listed, as is shown in the following code fragment: &quot;paymentMethods&quot;: [{ &quot;brands&quot;: [VISA, MASTERCARD] }] ... Note: Different eBay marketplaces may or may not support this field. Use the Trading API GetCategoryFeatures call with FeatureID set to PaymentMethods and DetailLevel set to ReturnAll to see what credit card brands different marketplaces support. If the GetCategoryFeatures call returns details on credit card brands for the categories in which you sell, then you can use this field to list the credit card brands the seller accepts. If, on the other hand, GetCategoryFeatures does not enumerate credit card brands for your target site (for example, if it returns PaymentMethod set to CCAccepted), then you cannot enumerate specific credit card brands with this field for that marketplace. Required if paymentMethodType is set to CREDIT_CARD. A list of credit card brands accepted by the seller.
     *
     * @return self
     */
    public function setBrands($brands)
    {
        $this->container['brands'] = $brands;

        return $this;
    }

    /**
     * Gets payment_method_type
     *
     * @return string|null
     */
    public function getPaymentMethodType()
    {
        return $this->container['payment_method_type'];
    }

    /**
     * Sets payment_method_type
     *
     * @param string|null $payment_method_type The payment method, selected from the supported payment method types. Use GetCategoryFeatures in the Trading API to retrieve the payment methods allowed for a category on a specific marketplace, as well as the default payment method for that marketplace (review the SiteDefaults.PaymentMethod field). For example, the response from GetCategoryFeatures shows that on the US marketplace, most categories allow only electronic payments via credit cards, PayPal, and the like. Also, note that GeteBayDetails does not return payment method information. Note: If you create item listings using the Inventory API, you must set this field to PAYPAL (currently, the Inventory API supports only fixed-prince GTC items where the only supported paymentMethod is PayPal). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:PaymentMethodTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPaymentMethodType($payment_method_type)
    {
        $this->container['payment_method_type'] = $payment_method_type;

        return $this;
    }

    /**
     * Gets recipient_account_reference
     *
     * @return \Ebay\Sell\Account\Model\RecipientAccountReference|null
     */
    public function getRecipientAccountReference()
    {
        return $this->container['recipient_account_reference'];
    }

    /**
     * Sets recipient_account_reference
     *
     * @param \Ebay\Sell\Account\Model\RecipientAccountReference|null $recipient_account_reference recipient_account_reference
     *
     * @return self
     */
    public function setRecipientAccountReference($recipient_account_reference)
    {
        $this->container['recipient_account_reference'] = $recipient_account_reference;

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


