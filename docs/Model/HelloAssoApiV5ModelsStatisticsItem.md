# # HelloAssoApiV5ModelsStatisticsItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsOrderLight**](HelloAssoApiV5ModelsStatisticsOrderLight.md) |  | [optional]
**payer** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsPayer**](HelloAssoApiV5ModelsStatisticsPayer.md) |  | [optional]
**payments** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsItemPayment[]**](HelloAssoApiV5ModelsStatisticsItemPayment.md) | Payments linked to this item | [optional]
**name** | **string** |  | [optional]
**user** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsUser**](HelloAssoApiV5ModelsStatisticsUser.md) |  | [optional]
**price_category** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPriceCategory**](HelloAssoApiV5ModelsEnumsPriceCategory.md) |  | [optional]
**min_amount** | **int** | Minimum amount that was specified on the tier (in cents) | [optional]
**discount** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsItemDiscount**](HelloAssoApiV5ModelsStatisticsItemDiscount.md) |  | [optional]
**custom_fields** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsItemCustomField[]**](HelloAssoApiV5ModelsStatisticsItemCustomField.md) | Custom fields related to this item | [optional]
**options** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsItemOption[]**](HelloAssoApiV5ModelsStatisticsItemOption.md) | Extra options taken with this item | [optional]
**ticket_url** | **string** | The Ticket Url | [optional]
**qr_code** | **string** | The item QrCode (for ticket scanning only) | [optional]
**membership_card_url** | **string** | The Membership Card Url | [optional]
**day_of_levy** | **int** | The day of levy for monthly donation only | [optional]
**tier_description** | **string** | Tier description | [optional]
**tier_id** | **int** |  | [optional]
**comment** | **string** |  | [optional]
**id** | **int** | ID of the Item | [optional]
**amount** | **int** | Total item Price in cents (after discount without extra options) | [optional]
**type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsTierType**](HelloAssoApiV5ModelsEnumsTierType.md) |  | [optional]
**initial_amount** | **int** | The raw amount (without reduction) | [optional]
**state** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsItemState**](HelloAssoApiV5ModelsEnumsItemState.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
