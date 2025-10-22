# # HelloAssoApiV5CommonModelsStatisticsItemPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cash_out_state** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsPaymentCashOutState**](HelloAssoApiV5CommonModelsEnumsPaymentCashOutState.md) |  | [optional]
**share_amount** | **int** | Amount of the item and extra options payed on this payment term (in cents) | [optional]
**id** | **int** | The ID of the payment | [optional]
**amount** | **int** | Total Amount of the payment (in cents) | [optional]
**amount_tip** | **int** | Tip Amount of the payment (in cents) | [optional]
**date** | **\DateTime** | Date of the payment | [optional]
**payment_means** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsPaymentMeans**](HelloAssoApiV5CommonModelsEnumsPaymentMeans.md) |  | [optional]
**installment_number** | **int** | Indicates the payment number (useful in the case of an order comprising payments with installments) | [optional]
**state** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsPaymentState**](HelloAssoApiV5CommonModelsEnumsPaymentState.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsPaymentType**](HelloAssoApiV5CommonModelsEnumsPaymentType.md) |  | [optional]
**meta** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsCommonMetaModel**](HelloAssoApiV5CommonModelsCommonMetaModel.md) |  | [optional]
**payment_off_line_mean** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsPaymentMeans**](HelloAssoApiV5CommonModelsEnumsPaymentMeans.md) |  | [optional]
**refund_operations** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsStatisticsRefundOperationLightModel[]**](HelloAssoApiV5CommonModelsStatisticsRefundOperationLightModel.md) | The refund operations information for the specific payment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
