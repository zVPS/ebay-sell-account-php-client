<?php
/**
 * ReturnPolicy
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
 * ReturnPolicy Class Doc Comment
 *
 * @category Class
 * @description Root container that defines the fields for a seller&#39;s return policy. The &lt;b&gt;returnPolicy&lt;/b&gt; encapsulates a seller&#39;s terms for how they handle item returns, the name and description of the policy, and the marketplace and category group(s) to which the return policy is applied.  While each seller must define at least one return policy for every marketplace into which they sell, sellers can define multiple return policies for a single marketplace by specifying different configurations for the unique policies.
 * @package  Ebay\Sell\Account
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReturnPolicy implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReturnPolicy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category_types' => '\Ebay\Sell\Account\Model\CategoryType[]',
        'description' => 'string',
        'extended_holiday_returns_offered' => 'bool',
        'international_override' => '\Ebay\Sell\Account\Model\InternationalReturnOverrideType',
        'marketplace_id' => 'string',
        'name' => 'string',
        'refund_method' => 'string',
        'restocking_fee_percentage' => 'string',
        'return_instructions' => 'string',
        'return_method' => 'string',
        'return_period' => '\Ebay\Sell\Account\Model\TimeDuration',
        'return_policy_id' => 'string',
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
        'category_types' => null,
        'description' => null,
        'extended_holiday_returns_offered' => null,
        'international_override' => null,
        'marketplace_id' => null,
        'name' => null,
        'refund_method' => null,
        'restocking_fee_percentage' => null,
        'return_instructions' => null,
        'return_method' => null,
        'return_period' => null,
        'return_policy_id' => null,
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
        'category_types' => 'categoryTypes',
        'description' => 'description',
        'extended_holiday_returns_offered' => 'extendedHolidayReturnsOffered',
        'international_override' => 'internationalOverride',
        'marketplace_id' => 'marketplaceId',
        'name' => 'name',
        'refund_method' => 'refundMethod',
        'restocking_fee_percentage' => 'restockingFeePercentage',
        'return_instructions' => 'returnInstructions',
        'return_method' => 'returnMethod',
        'return_period' => 'returnPeriod',
        'return_policy_id' => 'returnPolicyId',
        'returns_accepted' => 'returnsAccepted',
        'return_shipping_cost_payer' => 'returnShippingCostPayer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category_types' => 'setCategoryTypes',
        'description' => 'setDescription',
        'extended_holiday_returns_offered' => 'setExtendedHolidayReturnsOffered',
        'international_override' => 'setInternationalOverride',
        'marketplace_id' => 'setMarketplaceId',
        'name' => 'setName',
        'refund_method' => 'setRefundMethod',
        'restocking_fee_percentage' => 'setRestockingFeePercentage',
        'return_instructions' => 'setReturnInstructions',
        'return_method' => 'setReturnMethod',
        'return_period' => 'setReturnPeriod',
        'return_policy_id' => 'setReturnPolicyId',
        'returns_accepted' => 'setReturnsAccepted',
        'return_shipping_cost_payer' => 'setReturnShippingCostPayer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category_types' => 'getCategoryTypes',
        'description' => 'getDescription',
        'extended_holiday_returns_offered' => 'getExtendedHolidayReturnsOffered',
        'international_override' => 'getInternationalOverride',
        'marketplace_id' => 'getMarketplaceId',
        'name' => 'getName',
        'refund_method' => 'getRefundMethod',
        'restocking_fee_percentage' => 'getRestockingFeePercentage',
        'return_instructions' => 'getReturnInstructions',
        'return_method' => 'getReturnMethod',
        'return_period' => 'getReturnPeriod',
        'return_policy_id' => 'getReturnPolicyId',
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
        $this->container['category_types'] = isset($data['category_types']) ? $data['category_types'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['extended_holiday_returns_offered'] = isset($data['extended_holiday_returns_offered']) ? $data['extended_holiday_returns_offered'] : null;
        $this->container['international_override'] = isset($data['international_override']) ? $data['international_override'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['refund_method'] = isset($data['refund_method']) ? $data['refund_method'] : null;
        $this->container['restocking_fee_percentage'] = isset($data['restocking_fee_percentage']) ? $data['restocking_fee_percentage'] : null;
        $this->container['return_instructions'] = isset($data['return_instructions']) ? $data['return_instructions'] : null;
        $this->container['return_method'] = isset($data['return_method']) ? $data['return_method'] : null;
        $this->container['return_period'] = isset($data['return_period']) ? $data['return_period'] : null;
        $this->container['return_policy_id'] = isset($data['return_policy_id']) ? $data['return_policy_id'] : null;
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
     * Gets category_types
     *
     * @return \Ebay\Sell\Account\Model\CategoryType[]|null
     */
    public function getCategoryTypes()
    {
        return $this->container['category_types'];
    }

    /**
     * Sets category_types
     *
     * @param \Ebay\Sell\Account\Model\CategoryType[]|null $category_types For return policies, this field can be set to only ALL_EXCLUDING_MOTORS_VEHICLES (returns on motor vehicles are not processed through eBay flows) Default: ALL_EXCLUDING_MOTORS_VEHICLES (for return policies only)
     *
     * @return self
     */
    public function setCategoryTypes($category_types)
    {
        $this->container['category_types'] = $category_types;

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
     * @param string|null $description An optional seller-defined description of the return policy for internal use (this value is not displayed to end users). Max length: 250
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets extended_holiday_returns_offered
     *
     * @return bool|null
     */
    public function getExtendedHolidayReturnsOffered()
    {
        return $this->container['extended_holiday_returns_offered'];
    }

    /**
     * Sets extended_holiday_returns_offered
     *
     * @param bool|null $extended_holiday_returns_offered Important! This field has been deprecated as of version 1.2.0, released on May 31, 2018. Any value supplied in this field is neither read nor returned. If set to true, the seller offers an Extended Holiday Returns policy for their listings. IMPORTANT: Extended Holiday Returns is a seasonally available feature that is offered on some eBay marketplaces. To see if the feature is enabled in any given year, check the Returns on eBay page before the holiday season begins. If the feature is not enabled for the season, this field is ignored. The extended holiday returns period is defined by three dates: The start date = start of November. The purchase cutoff date = end of the year. The end date = end of January. The above dates may vary by a few days each year. Sellers are notified of the current dates on their eBay marketplace before the holiday period starts. Sellers can specify Extended Holiday Returns (as well as their regular non-holiday returns period) for chosen listings at any time during the year. The Extended Holiday Returns offer is not visible in listings until the start date of current year's holiday returns period, at which point it overrides the non-holiday returns policy. Buyers can see the Extended Holiday Returns offer in listings displayed through the purchase cutoff date and are able to return those purchases until the end date of the period. After the purchase cutoff date, the Extended Holiday Returns offer automatically disappears from the listings and the seller's non-holiday returns period reappears. Purchases made from that point on are subject to the non-holiday returns period, while purchases made before the cutoff date still have until the end of the period to return under the program. If the value of holidayReturns is false for an item, the return period specified by the returnsWithinOption field applies, regardless of the purchase date. If the item is listed with a policy of no returns, holidayReturns is automatically reset to false.
     *
     * @return self
     */
    public function setExtendedHolidayReturnsOffered($extended_holiday_returns_offered)
    {
        $this->container['extended_holiday_returns_offered'] = $extended_holiday_returns_offered;

        return $this;
    }

    /**
     * Gets international_override
     *
     * @return \Ebay\Sell\Account\Model\InternationalReturnOverrideType|null
     */
    public function getInternationalOverride()
    {
        return $this->container['international_override'];
    }

    /**
     * Sets international_override
     *
     * @param \Ebay\Sell\Account\Model\InternationalReturnOverrideType|null $international_override international_override
     *
     * @return self
     */
    public function setInternationalOverride($international_override)
    {
        $this->container['international_override'] = $international_override;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string|null $marketplace_id The ID of the eBay marketplace to which this return policy applies. If this value is not specified, value defaults to the seller's eBay registration site. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

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
     * @param string|null $name A user-defined name for this return policy. Names must be unique for policies assigned to the same marketplace. Max length: 64
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets refund_method
     *
     * @return string|null
     */
    public function getRefundMethod()
    {
        return $this->container['refund_method'];
    }

    /**
     * Sets refund_method
     *
     * @param string|null $refund_method Important! this field has been deprecated as of version 1.2.0, released on May 31, 2018. Any value other than MONEY_BACK will be treated as MONEY_BACK (although for a period of time, eBay will store and return the legacy values to preserve backwards compatibility). Indicates the method the seller uses to compensate the buyer for returned items. The return method specified applies only to remorse returns. Each eBay marketplace may support different sets of refund methods and marketplaces can also have differing default values for this field. Sellers are obligated to honor the refund method displayed in their listings. Call GeteBayDetails in the Trading API to see the refund methods supported by the marketplaces you sell into. We recommend you set this field to the value of your preferred refund method and that you use the description field to detail the seller's return policy (such as indicating how quickly the seller will process a refund, whether the seller must receive the item before processing a refund, and other similar useful details). You cannot modify this value in a Revise item call if (1) the listing has bids or (2) the listing ends within 12 hours. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:RefundMethodEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setRefundMethod($refund_method)
    {
        $this->container['refund_method'] = $refund_method;

        return $this;
    }

    /**
     * Gets restocking_fee_percentage
     *
     * @return string|null
     */
    public function getRestockingFeePercentage()
    {
        return $this->container['restocking_fee_percentage'];
    }

    /**
     * Sets restocking_fee_percentage
     *
     * @param string|null $restocking_fee_percentage Important! This field has been deprecated as of version 1.2.0, released on May 31, 2018. Any value supplied in this field is ignored, it is neither read nor returned. Sellers who accept returns should include this field if they charge buyers a restocking fee when items are returned. A restocking fee comes into play only when an item is returned due to buyer remorse and/or a purchasing mistake, but sellers cannot charge a restocking fee for SNAD-related returns. The total amount returned to the buyer is reduced by the cost of the item multiplied by the percentage indicated by this field. Allowable restocking fee values are: 0.0: No restocking fee is charged to the buyer 10.0: 10 percent of the item price is charged to the buyer 15.0: 15 percent of the item price is charged to the buyer 20.0: Up to 20 percent of the item price is charged to the buyer
     *
     * @return self
     */
    public function setRestockingFeePercentage($restocking_fee_percentage)
    {
        $this->container['restocking_fee_percentage'] = $restocking_fee_percentage;

        return $this;
    }

    /**
     * Gets return_instructions
     *
     * @return string|null
     */
    public function getReturnInstructions()
    {
        return $this->container['return_instructions'];
    }

    /**
     * Sets return_instructions
     *
     * @param string|null $return_instructions Important! This field is being deprecated on many marketplaces. Once deprecated, this field will be ignored on marketplaces where it is not supported and it will neither be read nor returned. This optional field contains the seller's detailed explanation for their return policy and is displayed in the Return Policy section of the View Item page. This field is valid in only the following marketplaces (the field is otherwise ignored): Germany (DE) Spain (ES) France (FR) Italy (IT) Where valid, sellers can use this field to add details about their return policies. eBay uses this text string as-is in the Return Policy section of the View Item page. Avoid HTML and avoid character entity references (such as &amp;amp;pound; or &amp;amp;#163;). To include special characters in the return policy description, use the literal UTF-8 or ISO-8559-1 character (e.g. &amp;#163;). Max length: 5000 (8000 for DE)
     *
     * @return self
     */
    public function setReturnInstructions($return_instructions)
    {
        $this->container['return_instructions'] = $return_instructions;

        return $this;
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
     * Gets return_policy_id
     *
     * @return string|null
     */
    public function getReturnPolicyId()
    {
        return $this->container['return_policy_id'];
    }

    /**
     * Sets return_policy_id
     *
     * @param string|null $return_policy_id A unique eBay-assigned ID for this policy. This ID value is appended to the end of the Location URI that is returned as a response header when you call createReturnPolicy).
     *
     * @return self
     */
    public function setReturnPolicyId($return_policy_id)
    {
        $this->container['return_policy_id'] = $return_policy_id;

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
     * @param bool|null $returns_accepted If set to true, the seller accepts returns. Call the getReturnPolicies in the Metadata API to see what categories require returns to be offered for listings in each category. Also, note that some European marketplaces (for example, UK, IE, and DE) require sellers to accept returns for fixed-price items and auctions listed with Buy It Now. For details, see Returns and the Law (UK). Note:Top-Rated sellers must accept item returns and the handlingTime should be set to zero days or one day for a listing to receive a Top-Rated Plus badge on the View Item or search result pages. For more information on eBay's Top-Rated seller program, see Becoming a Top Rated Seller and qualifying for Top Rated Plus benefits.
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
     * @param string|null $return_shipping_cost_payer This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either BUYER or SELLER. Depending on the return policy and specifics of the return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnShippingCostPayerEnum'>eBay API documentation</a>
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


