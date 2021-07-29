# # KycCheck

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data_required** | **string** | The enumeration value returned in this field categorizes the type of details needed for the KYC check. More information about the check is shown in the detailMessage and other applicable, corresponding fields. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/kyc:DetailsType&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**due_date** | **string** | The timestamp in this field indicates the date by which the seller should resolve the KYC requirement. The timestamp in this field uses the UTC date and time format described in the ISO 8601 Standard. See below for this format and an example: MM-DD-YYYY HH:MM:SS 06-05-2020 10:34:18 | [optional]
**remedy_url** | **string** | If applicable and available, a URL will be returned in this field, and the link will take the seller to an eBay page where they can provide the requested information. | [optional]
**alert** | **string** | This field gives a short summary of what is required from the seller. An example might be, &#39;Upload bank document now.&#39;. The detailMessage field will often provide more details on what is required of the seller. | [optional]
**detail_message** | **string** | This field gives a detailed message about what is required from the seller. An example might be, &#39;Please upload a bank document by 2020-08-01 to get your account back in good standing.&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
