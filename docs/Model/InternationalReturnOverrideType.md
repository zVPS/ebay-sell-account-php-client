# # InternationalReturnOverrideType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**return_method** | **string** | Valid in the US marketplace only, this optional field indicates additional services (other than money-back) that sellers can offer buyers for remorse returns. As of version 1.2.0, the only accepted value for this field is REPLACEMENT. This field is valid in only the US marketplace, any supplied value is ignored in other marketplaces. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/api:ReturnMethodEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**return_period** | [**\Ebay\Sell\Account\Model\TimeDuration**](TimeDuration.md) |  | [optional]
**returns_accepted** | **bool** | If set to true, the seller allows international returns. If set to false, the seller does not accept international returns. Required if the seller wants to set an international return policy that differs from their domestic return policy. | [optional]
**return_shipping_cost_payer** | **string** | This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either BUYER or SELLER. Depending on the return policy and specifics of the return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues. Required if the internationalOverride.returnsAccepted field is set to true. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/api:ReturnShippingCostPayerEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
