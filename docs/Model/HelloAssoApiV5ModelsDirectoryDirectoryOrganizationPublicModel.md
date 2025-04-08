# # HelloAssoApiV5ModelsDirectoryDirectoryOrganizationPublicModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tags** | **string[]** | The public tags of the organization | [optional]
**linked_partners** | **string[]** | Partners linked to this organization | [optional]
**is_authenticated** | **bool** | The organization is authenticated. Property returned only when asked by an organization admin. | [optional]
**is_cash_in_compliant** | **bool** | If transaction can be init on the organization or not. | [optional]
**banner** | **string** | The organization banner | [optional]
**fiscal_receipt_eligibility** | **bool** | The organism can issue fiscal receipts (type ok and has not deactivated it)  Must configure it and be authenticated to become enabled | [optional]
**fiscal_receipt_issuance_enabled** | **bool** | The organism is eligible, has set up his options, and is authenticated. | [optional]
**type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsOrganizationType**](HelloAssoApiV5ModelsEnumsOrganizationType.md) |  | [optional]
**category** | **string** | Organization category label | [optional]
**address** | **string** | Organization Address (for authorized applications or if authorized by the organization) | [optional]
**geolocation** | [**\OpenAPI\Client\Model\HelloAssoModelsSharedGeoLocation**](HelloAssoModelsSharedGeoLocation.md) |  | [optional]
**rna_number** | **string** | Unique identifier assigned when creating the association | [optional]
**logo** | **string** | Logo of organization | [optional]
**name** | **string** | Name of organization | [optional]
**role** | [**\OpenAPI\Client\Model\HelloAssoModelsEnumsGlobalRole**](HelloAssoModelsEnumsGlobalRole.md) |  | [optional]
**city** | **string** | Organization city | [optional]
**zip_code** | **string** | Organization zip code | [optional]
**description** | **string** | Organization description | [optional]
**update_date** | **\DateTime** | Last update date of the organization | [optional]
**category_jo_id** | **int** |  | [optional]
**url** | **string** | The organization url | [optional]
**organization_slug** | **string** | The organization slug | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
