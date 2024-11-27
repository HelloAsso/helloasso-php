# # HelloAssoApiV5ModelsPaymentRefundOperationModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The refund operation id | [optional]
**amount** | **int** | The amount to refund | [optional]
**cancel_order** | **bool** | Whether the future payments and linked items of this order must be canceled (possible only if the payment is fully refunded) | [optional]
**creation_date** | **\DateTime** | The refund operation creation date | [optional]
**state** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsOperationState**](HelloAssoApiV5ModelsEnumsOperationState.md) |  | [optional]
**send_refund_mail** | **bool** | Whether a refund mail must be send or not. | [optional]
**payment_id** | **int** | The payment id | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
