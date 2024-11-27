# OpenAPI\Client\OrganizationLegalInformationsApi

All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**organizationsLegalInformationsOrganizationSlugConfigurationPut()**](OrganizationLegalInformationsApi.md#organizationsLegalInformationsOrganizationSlugConfigurationPut) | **PUT** /organizations/legal-informations/{organizationSlug}/configuration |  |


## `organizationsLegalInformationsOrganizationSlugConfigurationPut()`

```php
organizationsLegalInformationsOrganizationSlugConfigurationPut($organization_slug, $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body)
```



<br/><br/><b>Your token must have one of these roles : </b><br/>OrganizationAdmin<br/><br/>If you are an <b>association</b>, you can obtain these roles with your client.<br/>If you are a <b>partner</b>, you can obtain these roles by the authorize flow.<br/><br/><b>Your clientId must be allowed all of those privileges : </b> <br/> OrganizationAdministration<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrganizationLegalInformationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_slug = 'organization_slug_example'; // string
$hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body = new \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationLegalInformationConfigurationBody(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationLegalInformationConfigurationBody

try {
    $apiInstance->organizationsLegalInformationsOrganizationSlugConfigurationPut($organization_slug, $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationLegalInformationsApi->organizationsLegalInformationsOrganizationSlugConfigurationPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**|  | |
| **hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationLegalInformationConfigurationBody**](../Model/HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationLegalInformationConfigurationBody.md)|  | [optional] |

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