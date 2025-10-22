# OpenAPI\Client\FormsApi

All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**organizationsOrganizationSlugFormsFormTypeFormSlugStatePut()**](FormsApi.md#organizationsOrganizationSlugFormsFormTypeFormSlugStatePut) | **PUT** /organizations/{organizationSlug}/forms/{formType}/{formSlug}/state | Update a form state |


## `organizationsOrganizationSlugFormsFormTypeFormSlugStatePut()`

```php
organizationsOrganizationSlugFormsFormTypeFormSlugStatePut($organization_slug, $form_slug, $form_type, $hello_asso_api_v5_common_models_forms_form_state_request)
```

Update a form state

Update form state.<br/><br/><b>Your token must have one of these roles : </b><br/>FormAdmin<br/>OrganizationAdmin<br/><br/>If you are an <b>association</b>, you can obtain these roles with your client.<br/>If you are a <b>partner</b>, you can obtain these roles by the authorize flow.<br/><br/><b>Your clientId must be allowed all of those privileges : </b> <br/> FormAdministration<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_slug = 'organization_slug_example'; // string
$form_slug = 'form_slug_example'; // string
$form_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsFormType(); // \OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsFormType
$hello_asso_api_v5_common_models_forms_form_state_request = new \OpenAPI\Client\Model\HelloAssoApiV5CommonModelsFormsFormStateRequest(); // \OpenAPI\Client\Model\HelloAssoApiV5CommonModelsFormsFormStateRequest

try {
    $apiInstance->organizationsOrganizationSlugFormsFormTypeFormSlugStatePut($organization_slug, $form_slug, $form_type, $hello_asso_api_v5_common_models_forms_form_state_request);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->organizationsOrganizationSlugFormsFormTypeFormSlugStatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**|  | |
| **form_slug** | **string**|  | |
| **form_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsFormType**](../Model/.md)|  | |
| **hello_asso_api_v5_common_models_forms_form_state_request** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsFormsFormStateRequest**](../Model/HelloAssoApiV5CommonModelsFormsFormStateRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
