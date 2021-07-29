# # Deposit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\Ebay\Sell\Account\Model\Amount**](Amount.md) |  | [optional]
**due_in** | [**\Ebay\Sell\Account\Model\TimeDuration**](TimeDuration.md) |  | [optional]
**payment_methods** | [**\Ebay\Sell\Account\Model\PaymentMethod[]**](PaymentMethod.md) | For deposits (which are applicable to only motor listings), the paymentMethodType must be set to &#39;PAYPAL&#39; and you must also populate the fields in the recipientAccountReference object. Required if your motor vehicles listing requires a deposit. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
