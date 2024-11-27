# # HelloAssoApiV5ModelsFormsFormPublicModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organization_logo** | **string** | Organization Logo | [optional]
**organization_name** | **string** | Organization Name | [optional]
**tiers** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsFormsTierPublicModel[]**](HelloAssoApiV5ModelsFormsTierPublicModel.md) | Tiers | [optional]
**activity_type** | **string** | Activity type of the event eg. \&quot;Atelier(s) / Stage(s)\&quot; matching one of the provided type values &lt;a href&#x3D;\&quot;index#!/Values/Values_Get\&quot;&gt; provided here&lt;/a&gt; or a custom value is allowed. | [optional]
**activity_type_id** | **int** | Activity type identifier | [optional]
**place** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonPlaceModel**](HelloAssoApiV5ModelsCommonPlaceModel.md) |  | [optional]
**sale_end_date** | **\DateTime** | The datetime (Inclusive) at which the sales end.  If null the orders will be available until the end of the campaign. | [optional]
**sale_start_date** | **\DateTime** | The datetime (Inclusive) at which the users can start placing orders.  If null the orders will be available as soon as the campaign is published. | [optional]
**validity_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsMembershipValidityType**](HelloAssoApiV5ModelsEnumsMembershipValidityType.md) |  | [optional]
**personalized_message** | **string** | A message customized by the organization administrator. | [optional]
**banner** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonDocumentModel**](HelloAssoApiV5ModelsCommonDocumentModel.md) |  | [optional]
**currency** | **string** | Currency | [optional]
**description** | **string** | Short description (one line) | [optional]
**start_date** | **\DateTime** | The datetime of the activity start | [optional]
**end_date** | **\DateTime** | The datetime of the activity end | [optional]
**logo** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonDocumentModel**](HelloAssoApiV5ModelsCommonDocumentModel.md) |  | [optional]
**meta** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonMetaModel**](HelloAssoApiV5ModelsCommonMetaModel.md) |  | [optional]
**state** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormState**](HelloAssoApiV5ModelsEnumsFormState.md) |  | [optional]
**title** | **string** | Title | [optional]
**private_title** | **string** | Private Title | [optional]
**widget_button_url** | **string** | Url of the widget button | [optional]
**widget_full_url** | **string** | Url of the form widget | [optional]
**widget_vignette_horizontal_url** | **string** | Url of the horizontal vignette widget | [optional]
**widget_vignette_vertical_url** | **string** | Url of the vertical vignette widget | [optional]
**widget_counter_url** | **string** | Url of the counter widget | [optional]
**form_slug** | **string** | The form slug | [optional]
**form_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType**](HelloAssoApiV5ModelsEnumsFormType.md) |  | [optional]
**url** | **string** | The form url | [optional]
**organization_slug** | **string** | The organization slug | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
