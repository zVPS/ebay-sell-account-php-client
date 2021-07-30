# Ebay\Sell\Account\SalesTaxApi

All URIs are relative to https://api.ebay.com/sell/account/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrReplaceSalesTax()**](SalesTaxApi.md#createOrReplaceSalesTax) | **PUT** /sales_tax/{countryCode}/{jurisdictionId} | 
[**deleteSalesTax()**](SalesTaxApi.md#deleteSalesTax) | **DELETE** /sales_tax/{countryCode}/{jurisdictionId} | 
[**getSalesTax()**](SalesTaxApi.md#getSalesTax) | **GET** /sales_tax/{countryCode}/{jurisdictionId} | 
[**getSalesTaxes()**](SalesTaxApi.md#getSalesTaxes) | **GET** /sales_tax | 


## `createOrReplaceSalesTax()`

```php
createOrReplaceSalesTax($country_code, $jurisdiction_id, $body)
```



This method creates or updates a sales tax table entry for a jurisdiction. Specify the tax table entry you want to configure using the two path parameters: countryCode and jurisdictionId. A tax table entry for a jurisdiction is comprised of two fields: one for the jurisdiction's sales-tax rate and another that's a boolean value indicating whether or not shipping and handling are taxed in the jurisdiction. You can set up tax tables for countries that support different tax jurisdictions. Currently, only Canada, India, and the US support separate tax jurisdictions. If you sell into any of these countries, you can set up tax tables for any of the country's jurisdictions. Retrieve valid jurisdiction IDs using getSalesTaxJurisdictions in the Metadata API. For details on using this call, see Establishing sales-tax tables. Important! Starting in January 2019, eBay will begin to calculate, collect, and remit sales tax on behalf of sellers for items shipped to customers. This feature is rolling out on specific dates to specific US states as defined on the following page: eBay sales tax collection. Once eBay starts to collect sales tax for a state, no action is required on the seller's part and there will be no charges or fees for eBay automatically calculating, collecting and remitting sales tax. The sales-tax collection process will apply to all the sales in the states that support this feature, whether the seller is located in or outside of the United States. When a buyer purchases an item on eBay, and the ship-to address is one of the states where eBay collects the sales tax, eBay will calculate and add the applicable sales tax at checkout. The buyer will pay both the cost of the item along with the sales tax. eBay will collect and remit the tax.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Account\Api\SalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | This path parameter specifies the two-letter ISO 3166 code for the country for which you want to create tax table entry.
$jurisdiction_id = 'jurisdiction_id_example'; // string | This path parameter specifies the ID of the sales-tax jurisdiction for the table entry you want to create.
$body = new \Ebay\Sell\Account\Model\SalesTaxBase(); // \Ebay\Sell\Account\Model\SalesTaxBase | A container that describes the how the sales tax is calculated.

try {
    $apiInstance->createOrReplaceSalesTax($country_code, $jurisdiction_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxApi->createOrReplaceSalesTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| This path parameter specifies the two-letter ISO 3166 code for the country for which you want to create tax table entry. |
 **jurisdiction_id** | **string**| This path parameter specifies the ID of the sales-tax jurisdiction for the table entry you want to create. |
 **body** | [**\Ebay\Sell\Account\Model\SalesTaxBase**](../Model/SalesTaxBase.md)| A container that describes the how the sales tax is calculated. |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSalesTax()`

```php
deleteSalesTax($country_code, $jurisdiction_id)
```



This call deletes a tax table entry for a jurisdiction. Specify the jurisdiction to delete using the countryCode and jurisdictionId path parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Account\Api\SalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | This path parameter specifies the two-letter ISO 3166 code for the country whose tax table entry you want to delete.
$jurisdiction_id = 'jurisdiction_id_example'; // string | This path parameter specifies the ID of the sales tax jurisdiction whose table entry you want to delete.

try {
    $apiInstance->deleteSalesTax($country_code, $jurisdiction_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxApi->deleteSalesTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| This path parameter specifies the two-letter ISO 3166 code for the country whose tax table entry you want to delete. |
 **jurisdiction_id** | **string**| This path parameter specifies the ID of the sales tax jurisdiction whose table entry you want to delete. |

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

## `getSalesTax()`

```php
getSalesTax($country_code, $jurisdiction_id): \Ebay\Sell\Account\Model\SalesTax
```



This call gets the current tax table entry for a specific tax jurisdiction. Specify the jurisdiction to retrieve using the countryCode and jurisdictionId path parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Account\Api\SalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | This path parameter specifies the two-letter ISO 3166 code for the country whose tax table you want to retrieve.
$jurisdiction_id = 'jurisdiction_id_example'; // string | This path parameter specifies the ID of the sales tax jurisdiction for the tax table entry you want to retrieve.

try {
    $result = $apiInstance->getSalesTax($country_code, $jurisdiction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxApi->getSalesTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| This path parameter specifies the two-letter ISO 3166 code for the country whose tax table you want to retrieve. |
 **jurisdiction_id** | **string**| This path parameter specifies the ID of the sales tax jurisdiction for the tax table entry you want to retrieve. |

### Return type

[**\Ebay\Sell\Account\Model\SalesTax**](../Model/SalesTax.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesTaxes()`

```php
getSalesTaxes($country_code): \Ebay\Sell\Account\Model\SalesTaxes
```



Use this call to retrieve a sales tax table that the seller established for a specific country. Specify the tax table to retrieve using the country_code query parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Account\Api\SalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | This path parameter specifies the two-letter ISO 3166 code for the country whose tax table you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum

try {
    $result = $apiInstance->getSalesTaxes($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxApi->getSalesTaxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| This path parameter specifies the two-letter ISO 3166 code for the country whose tax table you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum |

### Return type

[**\Ebay\Sell\Account\Model\SalesTaxes**](../Model/SalesTaxes.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
