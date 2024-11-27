# # HelloAssoApiV5ModelsStatisticsPaymentItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**share_amount** | **int** | Amount of the payment assigned to the item and its options (in cents) | [optional]
**share_item_amount** | **int** | Amount of the item payed on this payment term (in cents) | [optional]
**share_options_amount** | **int** | Amount of all extra options linked to this item and payed on this payment (in cents) | [optional]
**id** | **int** | ID of the Item | [optional]
**amount** | **int** | Total item Price in cents (after discount without extra options) | [optional]
**type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsTierType**](HelloAssoApiV5ModelsEnumsTierType.md) |  | [optional]
**initial_amount** | **int** | The raw amount (without reduction) | [optional]
**state** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsItemState**](HelloAssoApiV5ModelsEnumsItemState.md) |  | [optional]
**name** | **string** | Name of the item paid (relevant for checkout forms) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
