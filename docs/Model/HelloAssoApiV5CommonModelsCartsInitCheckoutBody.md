# # HelloAssoApiV5CommonModelsCartsInitCheckoutBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_amount** | **int** | Total amount, all taxes included, in cents (required)  Must be equal to the sum of the initial amount and subsequent terms |
**initial_amount** | **int** | The amount for the first term, all taxes included, in cents (required) |
**item_name** | **string** | Item name (required)  A text describing what the user paid for (&#39;Renew license&#39;, &#39;3 tickets&#39;, donation, etc).  Will be displayed in the near future in the user space and in the organization back office |
**back_url** | **string** | Url followed by the contributor if he wants to return to its previous site |
**error_url** | **string** | Url called in case of an error during the checkout process |
**return_url** | **string** | Url called after the payment |
**contains_donation** | **bool** | The sale (or a part of) is a donation |
**terms** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsCartsCheckoutTerm[]**](HelloAssoApiV5CommonModelsCartsCheckoutTerm.md) | The list of future terms (if applicable) | [optional]
**payer** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsCartsCheckoutPayer**](HelloAssoApiV5CommonModelsCartsCheckoutPayer.md) |  | [optional]
**metadata** | **mixed** | Metadata (optional)  Json object (max length : 20000) | [optional]
**payment_options** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsCartsCheckoutPaymentOptions**](HelloAssoApiV5CommonModelsCartsCheckoutPaymentOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
