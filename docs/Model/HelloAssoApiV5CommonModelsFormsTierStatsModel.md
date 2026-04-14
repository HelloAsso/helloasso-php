# HelloAssoApiV5CommonModelsFormsTierStatsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | id | [optional]
**label** | **string** | label | [optional]
**description** | **string** | description | [optional]
**entries_taken** | **int** | The number of times this tier as been taken | [optional]
**max_entries** | **int** | The max number of times this tier can be sold | [optional]
**price** | **int** | the Price in cents  if price equals 0 then it is free or there is a MinAmount | [optional]
**min_amount** | **int** | If set, it means the payment is free to choose, according to the specified minAmount in cents | [optional]
**price_category** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsPriceCategory**](HelloAssoApiV5CommonModelsEnumsPriceCategory.md) |  | [optional]
**tier_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsTierType**](HelloAssoApiV5CommonModelsEnumsTierType.md) |  | [optional]
**is_enabled** | **bool** | is true if tier state is ENABLED  is false if tier state is DISABLED | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
