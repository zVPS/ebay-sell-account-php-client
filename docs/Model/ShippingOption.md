# # ShippingOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cost_type** | **string** | Defines whether the shipping cost is FLAT_RATE (the same rate for all buyers), CALCULATED (the shipping rate varies by the ship-to location and size and weight of the package, as defined by the item), or NOT_SPECIFIED (for use with local pickup). Required if the policy offers shipping options using a shippingOptions container. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/api:ShippingCostTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**insurance_fee** | [**\Ebay\Sell\Account\Model\Amount**](Amount.md) |  | [optional]
**insurance_offered** | **bool** | This field has been deprecated. Shipping insurance is offered only via a shipping carrier&#39;s shipping services and is no longer available via eBay shipping policies. | [optional]
**option_type** | **string** | Use this field to set the ShippingOption element to either DOMESTIC or INTERNATIONAL. Required if the policy offers shipping options using a shippingOptions container. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/api:ShippingOptionTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**package_handling_cost** | [**\Ebay\Sell\Account\Model\Amount**](Amount.md) |  | [optional]
**rate_table_id** | **string** | A unique eBay-assigned ID associated with a user-created shipping rate table. The locality of a shipping rate table can be either DOMESTIC or INTERNATIONAL and you must ensure the value specified in this field references a shipping rate table that matches the type specified in the shippingOptions.optionType field. If you mismatch the types, eBay responds with a 20403 error. Call getRateTable to retrieve information (including rateTableId values) on the rate tables configured by a seller. For information on creating rate tables, see Using shipping rate tables. | [optional]
**shipping_services** | [**\Ebay\Sell\Account\Model\ShippingService[]**](ShippingService.md) | Contains a list of shipping services offered for either DOMESTIC or INTERNATIONAL shipments. Sellers can specify up to four domestic shipping services and up to five international shipping services by using separate shippingService containers for each. Note that if the seller is opted in to the Global Shipping Program, they can specify only four other international shipping services, regardless of whether or not Global Shipping is offered as one of the services. Required if the policy offers shipping options using a shippingOptions container. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
