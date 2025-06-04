# # HelloAssoApiV5ModelsStatisticsOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payer** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsPayer**](HelloAssoApiV5ModelsStatisticsPayer.md) |  | [optional]
**items** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsOrderItem[]**](HelloAssoApiV5ModelsStatisticsOrderItem.md) | All items of the order | [optional]
**payments** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsOrderPayment[]**](HelloAssoApiV5ModelsStatisticsOrderPayment.md) | All payments of the order | [optional]
**amount** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsOrderAmountModel**](HelloAssoApiV5ModelsStatisticsOrderAmountModel.md) |  | [optional]
**id** | **int** | The ID of the Order | [optional]
**date** | **\DateTime** | Order creation date | [optional]
**form_slug** | **string** | FormSlug (lowercase name of the form without special characters) | [optional]
**form_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType**](HelloAssoApiV5ModelsEnumsFormType.md) |  | [optional]
**organization_name** | **string** | The organization name. | [optional]
**organization_slug** | **string** | OrganizationSlug (lowercase name of the organization without special characters) | [optional]
**organization_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsOrganizationType**](HelloAssoApiV5ModelsEnumsOrganizationType.md) |  | [optional]
**organization_is_under_coluche_law** | **bool** | Whether or not the organization is subject to the coluche law | [optional]
**checkout_intent_id** | **int** | Checkout intent Id if available | [optional]
**meta** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonMetaModel**](HelloAssoApiV5ModelsCommonMetaModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
