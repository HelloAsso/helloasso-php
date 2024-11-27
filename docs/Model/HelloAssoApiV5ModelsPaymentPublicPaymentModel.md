# # HelloAssoApiV5ModelsPaymentPublicPaymentModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The payment id | [optional]
**organization_id** | **int** | The Organization id, which the payment was made to | [optional]
**form_id** | **int** | The form id where the payment was made. Used with FormType | [optional]
**form_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType**](HelloAssoApiV5ModelsEnumsFormType.md) |  | [optional]
**amount** | **int** | Amount | [optional]
**means_payment** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentMeans**](HelloAssoApiV5ModelsEnumsPaymentMeans.md) |  | [optional]
**cash_out_state** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentCashOutState**](HelloAssoApiV5ModelsEnumsPaymentCashOutState.md) |  | [optional]
**date** | **\DateTime** | The payment Date. | [optional]
**authorization_date** | **\DateTime** | If the payment is authorized, this is the date of authorization | [optional]
**order_date** | **\DateTime** | Date at which the Order was placed.  Important for monthly payments or scheduled payments. | [optional]
**order_id** | **int** | The id of the order | [optional]
**fiscal_receipt_generated** | **bool** | Whether a Fiscal receipt document has been generated for this payment or not. | [optional]
**payer_first_name** | **string** | The inputted payer first name, might differs from User firstname, from linked user Id | [optional]
**payer_last_name** | **string** | The inputted payer last name,  might differs from User lastname, from linked user Id | [optional]
**status** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState**](HelloAssoApiV5ModelsEnumsPaymentState.md) |  | [optional]
**user_id** | **int** | The user id who initiated the payment | [optional]
**user_first_name** | **string** | The name of the user who initiated the payment. May differ from PayerFirstName | [optional]
**user_last_name** | **string** | The name of the user who initiated the payment. May differ from PayerLastName | [optional]
**user_email** | **string** | The email of the user account who initiated the payment. | [optional]
**provider_title** | **string** | name of the provider | [optional]
**installment_number** | **int** | Indicates the payment number (useful in the case of an order comprising payments with installments)  Starting with 1. | [optional]
**meta** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonMetaModel**](HelloAssoApiV5ModelsCommonMetaModel.md) |  | [optional]
**refund_operations** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsRefundOperationLightModel[]**](HelloAssoApiV5ModelsStatisticsRefundOperationLightModel.md) | The refund operations for the specific payment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
