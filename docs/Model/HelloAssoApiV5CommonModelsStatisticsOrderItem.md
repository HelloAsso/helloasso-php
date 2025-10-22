# # HelloAssoApiV5CommonModelsStatisticsOrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payments** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsStatisticsSharePayment[]**](HelloAssoApiV5CommonModelsStatisticsSharePayment.md) | Payments linked to this item and each share between the item and the payment | [optional]
**name** | **string** |  | [optional]
**user** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsStatisticsUser**](HelloAssoApiV5CommonModelsStatisticsUser.md) |  | [optional]
**price_category** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsPriceCategory**](HelloAssoApiV5CommonModelsEnumsPriceCategory.md) |  | [optional]
**min_amount** | **int** | Minimum amount that was specified on the tier (in cents) | [optional]
**discount** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsStatisticsItemDiscount**](HelloAssoApiV5CommonModelsStatisticsItemDiscount.md) |  | [optional]
**custom_fields** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsStatisticsItemCustomField[]**](HelloAssoApiV5CommonModelsStatisticsItemCustomField.md) | Custom fields related to this item | [optional]
**options** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsStatisticsItemOption[]**](HelloAssoApiV5CommonModelsStatisticsItemOption.md) | Extra options taken with this item | [optional]
**ticket_url** | **string** | The Ticket Url | [optional]
**qr_code** | **string** | The item QrCode (for ticket scanning only) | [optional]
**membership_card_url** | **string** | The Membership Card Url | [optional]
**day_of_levy** | **int** | The day of levy for monthly donation only | [optional]
**tier_description** | **string** | Tier description | [optional]
**tier_id** | **int** |  | [optional]
**comment** | **string** |  | [optional]
**id** | **int** | ID of the Item | [optional]
**amount** | **int** | Total item Price in cents (after discount without extra options) | [optional]
**type** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsTierType**](HelloAssoApiV5CommonModelsEnumsTierType.md) |  | [optional]
**initial_amount** | **int** | The raw amount (without reduction) | [optional]
**state** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsItemState**](HelloAssoApiV5CommonModelsEnumsItemState.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
