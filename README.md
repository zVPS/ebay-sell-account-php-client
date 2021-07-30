# OpenAPIClient-php

The Account API gives sellers the ability to configure their eBay seller accounts, including the seller's policies (the Fulfillment Policy, Payment Policy, and Return Policy), opt in and out of eBay seller programs, configure sales tax tables, and get account information. For details on the availability of the methods in this API, see Account API requirements and restrictions.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github/zvps/ebay-sell-account-php-client.git"
    }
  ],
  "require": {
    "zvps/ebay-sell-account-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Account\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ebay\Sell\Account\Model\FulfillmentPolicyRequest(); // \Ebay\Sell\Account\Model\FulfillmentPolicyRequest | Request to create a seller account fulfillment policy.

try {
    $result = $apiInstance->createFulfillmentPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->createFulfillmentPolicy: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/sell/account/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*FulfillmentPolicyApi* | [**createFulfillmentPolicy**](docs/Api/FulfillmentPolicyApi.md#createfulfillmentpolicy) | **POST** /fulfillment_policy | 
*FulfillmentPolicyApi* | [**deleteFulfillmentPolicy**](docs/Api/FulfillmentPolicyApi.md#deletefulfillmentpolicy) | **DELETE** /fulfillment_policy/{fulfillmentPolicyId} | 
*FulfillmentPolicyApi* | [**getFulfillmentPolicies**](docs/Api/FulfillmentPolicyApi.md#getfulfillmentpolicies) | **GET** /fulfillment_policy | 
*FulfillmentPolicyApi* | [**getFulfillmentPolicy**](docs/Api/FulfillmentPolicyApi.md#getfulfillmentpolicy) | **GET** /fulfillment_policy/{fulfillmentPolicyId} | 
*FulfillmentPolicyApi* | [**getFulfillmentPolicyByName**](docs/Api/FulfillmentPolicyApi.md#getfulfillmentpolicybyname) | **GET** /fulfillment_policy/get_by_policy_name | 
*FulfillmentPolicyApi* | [**updateFulfillmentPolicy**](docs/Api/FulfillmentPolicyApi.md#updatefulfillmentpolicy) | **PUT** /fulfillment_policy/{fulfillmentPolicyId} | 
*KycApi* | [**getKYC**](docs/Api/KycApi.md#getkyc) | **GET** /kyc | 
*OnboardingApi* | [**getPaymentsProgramOnboarding**](docs/Api/OnboardingApi.md#getpaymentsprogramonboarding) | **GET** /payments_program/{marketplace_id}/{payments_program_type}/onboarding | 
*PaymentPolicyApi* | [**createPaymentPolicy**](docs/Api/PaymentPolicyApi.md#createpaymentpolicy) | **POST** /payment_policy | 
*PaymentPolicyApi* | [**deletePaymentPolicy**](docs/Api/PaymentPolicyApi.md#deletepaymentpolicy) | **DELETE** /payment_policy/{payment_policy_id} | 
*PaymentPolicyApi* | [**getPaymentPolicies**](docs/Api/PaymentPolicyApi.md#getpaymentpolicies) | **GET** /payment_policy | 
*PaymentPolicyApi* | [**getPaymentPolicy**](docs/Api/PaymentPolicyApi.md#getpaymentpolicy) | **GET** /payment_policy/{payment_policy_id} | 
*PaymentPolicyApi* | [**getPaymentPolicyByName**](docs/Api/PaymentPolicyApi.md#getpaymentpolicybyname) | **GET** /payment_policy/get_by_policy_name | 
*PaymentPolicyApi* | [**updatePaymentPolicy**](docs/Api/PaymentPolicyApi.md#updatepaymentpolicy) | **PUT** /payment_policy/{payment_policy_id} | 
*PaymentsProgramApi* | [**getPaymentsProgram**](docs/Api/PaymentsProgramApi.md#getpaymentsprogram) | **GET** /payments_program/{marketplace_id}/{payments_program_type} | 
*PrivilegeApi* | [**getPrivileges**](docs/Api/PrivilegeApi.md#getprivileges) | **GET** /privilege | 
*ProgramApi* | [**getOptedInPrograms**](docs/Api/ProgramApi.md#getoptedinprograms) | **GET** /program/get_opted_in_programs | 
*ProgramApi* | [**optInToProgram**](docs/Api/ProgramApi.md#optintoprogram) | **POST** /program/opt_in | 
*ProgramApi* | [**optOutOfProgram**](docs/Api/ProgramApi.md#optoutofprogram) | **POST** /program/opt_out | 
*RateTableApi* | [**getRateTables**](docs/Api/RateTableApi.md#getratetables) | **GET** /rate_table | 
*ReturnPolicyApi* | [**createReturnPolicy**](docs/Api/ReturnPolicyApi.md#createreturnpolicy) | **POST** /return_policy | 
*ReturnPolicyApi* | [**deleteReturnPolicy**](docs/Api/ReturnPolicyApi.md#deletereturnpolicy) | **DELETE** /return_policy/{return_policy_id} | 
*ReturnPolicyApi* | [**getReturnPolicies**](docs/Api/ReturnPolicyApi.md#getreturnpolicies) | **GET** /return_policy | 
*ReturnPolicyApi* | [**getReturnPolicy**](docs/Api/ReturnPolicyApi.md#getreturnpolicy) | **GET** /return_policy/{return_policy_id} | 
*ReturnPolicyApi* | [**getReturnPolicyByName**](docs/Api/ReturnPolicyApi.md#getreturnpolicybyname) | **GET** /return_policy/get_by_policy_name | 
*ReturnPolicyApi* | [**updateReturnPolicy**](docs/Api/ReturnPolicyApi.md#updatereturnpolicy) | **PUT** /return_policy/{return_policy_id} | 
*SalesTaxApi* | [**createOrReplaceSalesTax**](docs/Api/SalesTaxApi.md#createorreplacesalestax) | **PUT** /sales_tax/{countryCode}/{jurisdictionId} | 
*SalesTaxApi* | [**deleteSalesTax**](docs/Api/SalesTaxApi.md#deletesalestax) | **DELETE** /sales_tax/{countryCode}/{jurisdictionId} | 
*SalesTaxApi* | [**getSalesTax**](docs/Api/SalesTaxApi.md#getsalestax) | **GET** /sales_tax/{countryCode}/{jurisdictionId} | 
*SalesTaxApi* | [**getSalesTaxes**](docs/Api/SalesTaxApi.md#getsalestaxes) | **GET** /sales_tax | 

## Models

- [Amount](docs/Model/Amount.md)
- [CategoryType](docs/Model/CategoryType.md)
- [Deposit](docs/Model/Deposit.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [FulfillmentPolicy](docs/Model/FulfillmentPolicy.md)
- [FulfillmentPolicyRequest](docs/Model/FulfillmentPolicyRequest.md)
- [FulfillmentPolicyResponse](docs/Model/FulfillmentPolicyResponse.md)
- [InternationalReturnOverrideType](docs/Model/InternationalReturnOverrideType.md)
- [KycCheck](docs/Model/KycCheck.md)
- [KycResponse](docs/Model/KycResponse.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentPolicy](docs/Model/PaymentPolicy.md)
- [PaymentPolicyRequest](docs/Model/PaymentPolicyRequest.md)
- [PaymentPolicyResponse](docs/Model/PaymentPolicyResponse.md)
- [PaymentsProgramOnboardingResponse](docs/Model/PaymentsProgramOnboardingResponse.md)
- [PaymentsProgramOnboardingSteps](docs/Model/PaymentsProgramOnboardingSteps.md)
- [PaymentsProgramResponse](docs/Model/PaymentsProgramResponse.md)
- [Program](docs/Model/Program.md)
- [Programs](docs/Model/Programs.md)
- [RateTable](docs/Model/RateTable.md)
- [RateTableResponse](docs/Model/RateTableResponse.md)
- [RecipientAccountReference](docs/Model/RecipientAccountReference.md)
- [Region](docs/Model/Region.md)
- [RegionSet](docs/Model/RegionSet.md)
- [ReturnPolicy](docs/Model/ReturnPolicy.md)
- [ReturnPolicyRequest](docs/Model/ReturnPolicyRequest.md)
- [ReturnPolicyResponse](docs/Model/ReturnPolicyResponse.md)
- [SalesTax](docs/Model/SalesTax.md)
- [SalesTaxBase](docs/Model/SalesTaxBase.md)
- [SalesTaxes](docs/Model/SalesTaxes.md)
- [SellingLimit](docs/Model/SellingLimit.md)
- [SellingPrivileges](docs/Model/SellingPrivileges.md)
- [SetFulfillmentPolicyResponse](docs/Model/SetFulfillmentPolicyResponse.md)
- [SetPaymentPolicyResponse](docs/Model/SetPaymentPolicyResponse.md)
- [SetReturnPolicyResponse](docs/Model/SetReturnPolicyResponse.md)
- [ShippingOption](docs/Model/ShippingOption.md)
- [ShippingService](docs/Model/ShippingService.md)
- [TimeDuration](docs/Model/TimeDuration.md)

## Authorization

### Authorization Code

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/sell.account.readonly**: View your account settings
    - **https://api.ebay.com/oauth/api_scope/sell.account**: View and manage your account settings

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.6.3`
    - Package version: `5.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
