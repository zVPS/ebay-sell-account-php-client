# Ebay\Sell\Account\OnboardingApi

All URIs are relative to https://api.ebay.com/sell/account/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentsProgramOnboarding()**](OnboardingApi.md#getPaymentsProgramOnboarding) | **GET** /payments_program/{marketplace_id}/{payments_program_type}/onboarding | 


## `getPaymentsProgramOnboarding()`

```php
getPaymentsProgramOnboarding($marketplace_id, $payments_program_type): \Ebay\Sell\Account\Model\PaymentsProgramOnboardingResponse
```



This method retrieves a seller's onboarding status of eBay managed payments for a specified marketplace. The overall onboarding status of the seller and the status of each onboarding step is returned. Presently, the only supported payments program type is EBAY_PAYMENTS. See Managed Payments on eBay and Payments Terms of Use. Note: Managed payments availability: eBay managed payments is presently available in the US and Germany, and will roll out to Canada, UK, and Australia in July 2020.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Account\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | The eBay marketplace ID associated with the onboarding status to retrieve. Only enums for marketplaces that support or will soon support eBay managed payments are allowed. Error 20408 is returned for any other eBay marketplace. No response payload is returned with this error.
$payments_program_type = 'payments_program_type_example'; // string | The type of payments program whose status is returned by the call. Presently, the only supported payments program is EBAY_PAYMENTS. For details on the program, see Payments Terms of Use.

try {
    $result = $apiInstance->getPaymentsProgramOnboarding($marketplace_id, $payments_program_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getPaymentsProgramOnboarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The eBay marketplace ID associated with the onboarding status to retrieve. Only enums for marketplaces that support or will soon support eBay managed payments are allowed. Error 20408 is returned for any other eBay marketplace. No response payload is returned with this error. |
 **payments_program_type** | **string**| The type of payments program whose status is returned by the call. Presently, the only supported payments program is EBAY_PAYMENTS. For details on the program, see Payments Terms of Use. |

### Return type

[**\Ebay\Sell\Account\Model\PaymentsProgramOnboardingResponse**](../Model/PaymentsProgramOnboardingResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
