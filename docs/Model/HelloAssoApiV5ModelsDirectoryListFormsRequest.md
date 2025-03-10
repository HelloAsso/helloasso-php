# # HelloAssoApiV5ModelsDirectoryListFormsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**form_name** | **string** | Textual search for form name | [optional]
**form_description** | **string** | Textual search for form description | [optional]
**form_zip_codes** | **string[]** | The zip codes where the forms are located | [optional]
**form_cities** | **string[]** | The cities where the forms are located | [optional]
**form_regions** | **string[]** | The regions where the forms are located | [optional]
**form_departments** | **string[]** | The departments where the forms are located | [optional]
**form_countries** | **string[]** | The countries where the forms are located | [optional]
**form_types** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType[]**](HelloAssoApiV5ModelsEnumsFormType.md) | The form types : CrowdFunding, Membership, Event, Donation, PaymentForm ... | [optional]
**form_activity_type** | **string[]** | The Activity Type of the form | [optional]
**form_publication_start_date_min** | **\DateTime** | The inclusive minimum publication date of the forms, format \&quot;yyyy-MM-ddTHH:mm:ss.fffK\&quot; | [optional]
**form_publication_start_date_max** | **\DateTime** | The exclusive maximum publication date of the forms, format \&quot;yyyy-MM-ddTHH:mm:ss.fffK\&quot; | [optional]
**form_start_date_min** | **\DateTime** | The inclusive minimum start date of the forms, format \&quot;yyyy-MM-ddTHH:mm:ss.fffK\&quot; | [optional]
**form_start_date_max** | **\DateTime** | The exclusive maximum start date of the forms, format \&quot;yyyy-MM-ddTHH:mm:ss.fffK\&quot; | [optional]
**form_end_date_max** | **\DateTime** | The exclusive maximum end date of the forms, format \&quot;yyyy-MM-ddTHH:mm:ss.fffK\&quot; | [optional]
**form_end_date_min** | **\DateTime** | The inclusive minimum end date of the forms, format \&quot;yyyy-MM-ddTHH:mm:ss.fffK\&quot; | [optional]
**form_is_free** | **bool** | Allow only free forms if true | [optional]
**form_has_remaining_entries** | **bool** | Allow only forms with remaning entries if true | [optional]
**form_internal_tags** | **string[]** | Allow only forms with internal tags  this filter is for special operations only | [optional]
**form_public_tags** | **string[]** | Allow only forms with public tags | [optional]
**organization_name** | **string** | Textual search for organization name | [optional]
**organization_description** | **string** | Textual search for organization description | [optional]
**organization_categories** | **string[]** | The categories of the forms | [optional]
**organization_types** | **string[]** | The organization types | [optional]
**organization_zip_codes** | **string[]** | The zip codes where the organizations are located | [optional]
**organization_cities** | **string[]** | The cities where the organizations are located | [optional]
**organization_regions** | **string[]** | The regions where the organizations are located | [optional]
**organization_departments** | **string[]** | The departments where the organizations are located | [optional]
**organization_fiscal_receipt_eligibility** | **bool** | Allow only organization with a fiscal receipt eligibility | [optional]
**organization_linked_partners** | **string[]** | Organization linked partners | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
