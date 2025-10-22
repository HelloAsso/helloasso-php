# # HelloAssoApiV5CommonModelsStatisticsOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payer** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsStatisticsPayer**](HelloAssoApiV5CommonModelsStatisticsPayer.md) |  | [optional]
**items** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsStatisticsOrderItem[]**](HelloAssoApiV5CommonModelsStatisticsOrderItem.md) | All items of the order | [optional]
**payments** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsStatisticsOrderPayment[]**](HelloAssoApiV5CommonModelsStatisticsOrderPayment.md) | All payments of the order | [optional]
**amount** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsStatisticsOrderAmountModel**](HelloAssoApiV5CommonModelsStatisticsOrderAmountModel.md) |  | [optional]
**id** | **int** | The ID of the Order | [optional]
**date** | **\DateTime** | Order creation date | [optional]
**form_slug** | **string** | FormSlug (lowercase name of the form without special characters) | [optional]
**form_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsFormType**](HelloAssoApiV5CommonModelsEnumsFormType.md) |  | [optional]
**organization_name** | **string** | The organization name. | [optional]
**organization_slug** | **string** | OrganizationSlug (lowercase name of the organization without special characters) | [optional]
**organization_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsOrganizationType**](HelloAssoApiV5CommonModelsEnumsOrganizationType.md) |  | [optional]
**organization_is_under_coluche_law** | **bool** | Whether or not the organization is subject to the coluche law | [optional]
**checkout_intent_id** | **int** | Checkout intent Id if available | [optional]
**meta** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsCommonMetaModel**](HelloAssoApiV5CommonModelsCommonMetaModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
