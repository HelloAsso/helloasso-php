# # HelloAssoApiV5ModelsFormsTierPublicModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_fields** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsFormsCustomFieldPublicModel[]**](HelloAssoApiV5ModelsFormsCustomFieldPublicModel.md) | List of custom fields to be filled by the user | [optional]
**extra_options** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsFormsExtraOptionPublicModel[]**](HelloAssoApiV5ModelsFormsExtraOptionPublicModel.md) | List of available extra options to buy along the tier | [optional]
**id** | **int** | id | [optional]
**label** | **string** | label | [optional]
**description** | **string** | description | [optional]
**tier_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsTierType**](HelloAssoApiV5ModelsEnumsTierType.md) |  | [optional]
**price** | **int** | the Price in cents  if price equals 0 then it is free or there is a MinAmount | [optional]
**vat_rate** | **float** | Vat rate if applicable  Amount have to be 0.10 for 10% | [optional]
**min_amount** | **int** | If set, it means the payment is free to choose, according to the specified minAmount in cents | [optional]
**payment_frequency** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentFrequencyType**](HelloAssoApiV5ModelsEnumsPaymentFrequencyType.md) |  | [optional]
**max_per_user** | **int** | Max quantity buyable in this cart | [optional]
**meta** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonMetaModel**](HelloAssoApiV5ModelsCommonMetaModel.md) |  | [optional]
**sale_start_date** | **\DateTime** | The datetime (Inclusive) at which the users can start buying this tier.  If null the tier will be available at the start of the event. | [optional]
**sale_end_date** | **\DateTime** | The datetime (Inclusive) at which the tier is no longer available.  If null the tier will be available until the end of the event. | [optional]
**is_eligible_tax_receipt** | **bool** | Whether this is eligible to a deduction | [optional]
**terms** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsFormsTermModel[]**](HelloAssoApiV5ModelsFormsTermModel.md) | Terms of tier | [optional]
**picture** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsCommonDocumentModel**](HelloAssoApiV5ModelsCommonDocumentModel.md) |  | [optional]
**is_excluded_from_form_payment_terms** | **bool** | True means this tier must be paid in the initial payment, false means it can be paid in payment with installments  Null when the form payment terms are disabled or not compatible with the related form | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
