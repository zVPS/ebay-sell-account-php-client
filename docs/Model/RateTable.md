# # RateTable

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country_code** | **string** | A two-letter ISO 3166 country code representing the eBay marketplace where an item is listed. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**locality** | **string** | The region covered by the shipping rate table, either DOMESTIC or INTERNATIONAL. DOMESTIC indicates that the shipping rate table applies to regions within the country where an item is listed (the source country) while INTERNATIONAL indicates that the shipping rate table applies to regions outside of the country where an item is listed. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/api:ShippingOptionTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**name** | **string** | The user-defined name for the shipping rate table. Sellers can access Seller Hub (or My eBay &amp;gt; Account &amp;gt; Site Preferences &amp;gt; Shipping preferences) to create and assign names to their shipping rate tables. | [optional]
**rate_table_id** | **string** | A unique eBay-assigned ID for a seller&#39;s shipping rate table. Call getRateTables to retrieve the seller&#39;s current rate table IDs. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
