# # HelloAssoApiV5ModelsStatisticsOrderLight

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
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
**place** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonPlaceModel**](HelloAssoApiV5ModelsCommonPlaceModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
