# # HelloAssoApiV5ModelsStatisticsPaymentDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsOrderLight**](HelloAssoApiV5ModelsStatisticsOrderLight.md) |  | [optional]
**payer** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsPayer**](HelloAssoApiV5ModelsStatisticsPayer.md) |  | [optional]
**items** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsPaymentItem[]**](HelloAssoApiV5ModelsStatisticsPaymentItem.md) | Items linked to this payment | [optional]
**cash_out_date** | **\DateTime** | The date of the cash out | [optional]
**cash_out_state** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentCashOutState**](HelloAssoApiV5ModelsEnumsPaymentCashOutState.md) |  | [optional]
**payment_receipt_url** | **string** | The Payment Receipt Url | [optional]
**fiscal_receipt_url** | **string** | The Fiscal Receipt Url | [optional]
**id** | **int** | The ID of the payment | [optional]
**amount** | **int** | Total Amount of the payment (in cents) | [optional]
**amount_tip** | **int** | Tip Amount of the payment (in cents) | [optional]
**date** | **\DateTime** | Date of the payment | [optional]
**payment_means** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentMeans**](HelloAssoApiV5ModelsEnumsPaymentMeans.md) |  | [optional]
**installment_number** | **int** | Indicates the payment number (useful in the case of an order comprising payments with installments) | [optional]
**state** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState**](HelloAssoApiV5ModelsEnumsPaymentState.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentType**](HelloAssoApiV5ModelsEnumsPaymentType.md) |  | [optional]
**meta** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonMetaModel**](HelloAssoApiV5ModelsCommonMetaModel.md) |  | [optional]
**payment_off_line_mean** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentMeans**](HelloAssoApiV5ModelsEnumsPaymentMeans.md) |  | [optional]
**refund_operations** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsRefundOperationLightModel[]**](HelloAssoApiV5ModelsStatisticsRefundOperationLightModel.md) | The refund operations information for the specific payment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
