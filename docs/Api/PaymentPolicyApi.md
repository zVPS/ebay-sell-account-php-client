# Ebay\Sell\PaymentPolicyApi

All URIs are relative to https://api.ebay.com/sell/account/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentPolicy()**](PaymentPolicyApi.md#createPaymentPolicy) | **POST** /payment_policy | 
[**deletePaymentPolicy()**](PaymentPolicyApi.md#deletePaymentPolicy) | **DELETE** /payment_policy/{payment_policy_id} | 
[**getPaymentPolicies()**](PaymentPolicyApi.md#getPaymentPolicies) | **GET** /payment_policy | 
[**getPaymentPolicy()**](PaymentPolicyApi.md#getPaymentPolicy) | **GET** /payment_policy/{payment_policy_id} | 
[**getPaymentPolicyByName()**](PaymentPolicyApi.md#getPaymentPolicyByName) | **GET** /payment_policy/get_by_policy_name | 
[**updatePaymentPolicy()**](PaymentPolicyApi.md#updatePaymentPolicy) | **PUT** /payment_policy/{payment_policy_id} | 


## `createPaymentPolicy()`

```php
createPaymentPolicy($body): \Ebay\Sell\Account\Model\SetPaymentPolicyResponse
```



This method creates a new payment policy where the policy encapsulates seller's terms for purchase payments. Each policy targets a marketplaceId and categoryTypes.name combination and you can create multiple policies for each combination. Be aware that some marketplaces require a specific payment policy for vehicle listings. A successful request returns the URI to the new policy in the Location response header and the ID for the new policy is returned in the response payload. Tip: For details on creating and using the business policies supported by the Account API, see eBay business policies. Marketplaces and locales Policy instructions can be localized by providing a locale in the Accept-Language HTTP request header. For example, the following setting displays field values from the request body in German: Accept-Language: de-DE. Target the specific locale of a marketplace that supports multiple locales using the Content-Language request header. For example, target the French locale of the Canadian marketplace by specifying the fr-CA locale for Content-Language. Likewise, target the Dutch locale of the Belgium marketplace by setting Content-Language: nl-BE. Tip: For details on headers, see HTTP request headers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Api\PaymentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ebay\Sell\Account\Model\PaymentPolicyRequest(); // \Ebay\Sell\Account\Model\PaymentPolicyRequest | Payment policy request

try {
    $result = $apiInstance->createPaymentPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPolicyApi->createPaymentPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ebay\Sell\Account\Model\PaymentPolicyRequest**](../Model/PaymentPolicyRequest.md)| Payment policy request |

### Return type

[**\Ebay\Sell\Account\Model\SetPaymentPolicyResponse**](../Model/SetPaymentPolicyResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePaymentPolicy()`

```php
deletePaymentPolicy($payment_policy_id)
```



This method deletes a payment policy. Supply the ID of the policy you want to delete in the paymentPolicyId path parameter. Note that you cannot delete the default payment policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Api\PaymentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_policy_id = 'payment_policy_id_example'; // string | This path parameter specifies the ID of the payment policy you want to delete.

try {
    $apiInstance->deletePaymentPolicy($payment_policy_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPolicyApi->deletePaymentPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_policy_id** | **string**| This path parameter specifies the ID of the payment policy you want to delete. |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentPolicies()`

```php
getPaymentPolicies($marketplace_id): \Ebay\Sell\Account\Model\PaymentPolicyResponse
```



This method retrieves all the payment policies configured for the marketplace you specify using the marketplace_id query parameter. Marketplaces and locales Get the correct policies for a marketplace that supports multiple locales using the Content-Language request header. For example, get the policies for the French locale of the Canadian marketplace by specifying fr-CA for the Content-Language header. Likewise, target the Dutch locale of the Belgium marketplace by setting Content-Language: nl-BE. For details on header values, see HTTP request headers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Api\PaymentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This query parameter specifies the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum

try {
    $result = $apiInstance->getPaymentPolicies($marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPolicyApi->getPaymentPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This query parameter specifies the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum |

### Return type

[**\Ebay\Sell\Account\Model\PaymentPolicyResponse**](../Model/PaymentPolicyResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentPolicy()`

```php
getPaymentPolicy($payment_policy_id): \Ebay\Sell\Account\Model\PaymentPolicy
```



This method retrieves the complete details of a payment policy. Supply the ID of the policy you want to retrieve using the paymentPolicyId path parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Api\PaymentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_policy_id = 'payment_policy_id_example'; // string | This path parameter specifies the ID of the payment policy you want to retrieve.

try {
    $result = $apiInstance->getPaymentPolicy($payment_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPolicyApi->getPaymentPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_policy_id** | **string**| This path parameter specifies the ID of the payment policy you want to retrieve. |

### Return type

[**\Ebay\Sell\Account\Model\PaymentPolicy**](../Model/PaymentPolicy.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentPolicyByName()`

```php
getPaymentPolicyByName($marketplace_id, $name): \Ebay\Sell\Account\Model\PaymentPolicy
```



This method retrieves the complete details of a single payment policy. Supply both the policy name and its associated marketplace_id in the request query parameters. Marketplaces and locales Get the correct policy for a marketplace that supports multiple locales using the Content-Language request header. For example, get a policy for the French locale of the Canadian marketplace by specifying fr-CA for the Content-Language header. Likewise, target the Dutch locale of the Belgium marketplace by setting Content-Language: nl-BE. For details on header values, see HTTP request headers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Api\PaymentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This query parameter specifies the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
$name = 'name_example'; // string | This query parameter specifies the user-defined name of the payment policy you want to retrieve.

try {
    $result = $apiInstance->getPaymentPolicyByName($marketplace_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPolicyApi->getPaymentPolicyByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This query parameter specifies the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum |
 **name** | **string**| This query parameter specifies the user-defined name of the payment policy you want to retrieve. |

### Return type

[**\Ebay\Sell\Account\Model\PaymentPolicy**](../Model/PaymentPolicy.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentPolicy()`

```php
updatePaymentPolicy($payment_policy_id, $body): \Ebay\Sell\Account\Model\SetPaymentPolicyResponse
```



This method updates an existing payment policy. Specify the policy you want to update using the payment_policy_id path parameter. Supply a complete policy payload with the updates you want to make; this call overwrites the existing policy with the new details specified in the payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Api\PaymentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_policy_id = 'payment_policy_id_example'; // string | This path parameter specifies the ID of the payment policy you want to update.
$body = new \Ebay\Sell\Account\Model\PaymentPolicyRequest(); // \Ebay\Sell\Account\Model\PaymentPolicyRequest | Payment policy request

try {
    $result = $apiInstance->updatePaymentPolicy($payment_policy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPolicyApi->updatePaymentPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_policy_id** | **string**| This path parameter specifies the ID of the payment policy you want to update. |
 **body** | [**\Ebay\Sell\Account\Model\PaymentPolicyRequest**](../Model/PaymentPolicyRequest.md)| Payment policy request |

### Return type

[**\Ebay\Sell\Account\Model\SetPaymentPolicyResponse**](../Model/SetPaymentPolicyResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
