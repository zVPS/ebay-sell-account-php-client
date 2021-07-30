<?php
/**
 * ReturnPolicyRequestTest
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
 * Please update the test case below to test the model.
 */

namespace Ebay\Sell\Account\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * ReturnPolicyRequestTest Class Doc Comment
 *
 * @category    Class
 * @description This root container defines a seller&#39;s return policy for a specific marketplace and category type. Used when creating or updating a return policy, &lt;b&gt;returnPolicyRequest&lt;/b&gt; encapsulates a seller&#39;s terms for how buyers can return items. While each seller must define at least one payment policy for every marketplace into which they sell, sellers can define multiple payment policies for a single marketplace by specifying different configurations for the unique policies.  &lt;br&gt;&lt;br&gt;A successful call returns a &lt;b&gt;paymentPolicyId&lt;/b&gt;, plus the &lt;b&gt;Location&lt;/b&gt; response header contains the URI to the resource.  &lt;br&gt;&lt;br&gt;Use the Metadata API &lt;getReturnPolicies&lt;/b&gt; method to determine which categories in the marketplace(s) require you to provide a return policy. Also note that some marketplaces require you to provide a specific return policy for vehicle listings.  &lt;br&gt;&lt;br&gt;Policy instructions can be localized by providing a locale in the &lt;code&gt;Content-Language&lt;/code&gt; HTTP request header. For example: &lt;code&gt;Content-Language: de-DE&lt;/code&gt;.  &lt;p class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Tip: &lt;/b&gt;For more on using business policies, see &lt;a href&#x3D;\&quot;/api-docs/sell/static/seller-accounts/business-policies.html\&quot;&gt;eBay business policies&lt;/a&gt;.&lt;/p&gt;
 * @package     Ebay\Sell\Account
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ReturnPolicyRequestTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "ReturnPolicyRequest"
     */
    public function testReturnPolicyRequest()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "category_types"
     */
    public function testPropertyCategoryTypes()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "extended_holiday_returns_offered"
     */
    public function testPropertyExtendedHolidayReturnsOffered()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "international_override"
     */
    public function testPropertyInternationalOverride()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "marketplace_id"
     */
    public function testPropertyMarketplaceId()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "refund_method"
     */
    public function testPropertyRefundMethod()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "restocking_fee_percentage"
     */
    public function testPropertyRestockingFeePercentage()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "return_instructions"
     */
    public function testPropertyReturnInstructions()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "return_method"
     */
    public function testPropertyReturnMethod()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "return_period"
     */
    public function testPropertyReturnPeriod()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "returns_accepted"
     */
    public function testPropertyReturnsAccepted()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "return_shipping_cost_payer"
     */
    public function testPropertyReturnShippingCostPayer()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
