# OpenAPI\Client\OrganizationPublicConfigurationsApi

All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**organizationsOrganizationSlugConfigurationsGet()**](OrganizationPublicConfigurationsApi.md#organizationsOrganizationSlugConfigurationsGet) | **GET** /organizations/{organizationSlug}/configurations |  |
| [**organizationsOrganizationSlugConfigurationsPut()**](OrganizationPublicConfigurationsApi.md#organizationsOrganizationSlugConfigurationsPut) | **PUT** /organizations/{organizationSlug}/configurations |  |


## `organizationsOrganizationSlugConfigurationsGet()`

```php
organizationsOrganizationSlugConfigurationsGet($organization_slug): \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationsOrganizationPublicConfigurationModel[]
```



<br/><br/><b>Your token must have one of these roles : </b><br/>OrganizationAdmin<br/><br/>If you are an <b>association</b>, you can obtain these roles with your client.<br/>If you are a <b>partner</b>, you can obtain these roles by the authorize flow.<br/><br/><b>Your clientId must be allowed all of those privileges : </b> <br/> OrganizationAdministration<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrganizationPublicConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_slug = 'organization_slug_example'; // string

try {
    $result = $apiInstance->organizationsOrganizationSlugConfigurationsGet($organization_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationPublicConfigurationsApi->organizationsOrganizationSlugConfigurationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationsOrganizationPublicConfigurationModel[]**](../Model/HelloAssoApiV5ModelsOrganizationsOrganizationPublicConfigurationModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationsOrganizationSlugConfigurationsPut()`

```php
organizationsOrganizationSlugConfigurationsPut($organization_slug, $hello_asso_api_v5_models_organizations_organization_public_configurations_request)
```



<br/><br/><b>Your token must have one of these roles : </b><br/>OrganizationAdmin<br/><br/>If you are an <b>association</b>, you can obtain these roles with your client.<br/>If you are a <b>partner</b>, you can obtain these roles by the authorize flow.<br/><br/><b>Your clientId must be allowed all of those privileges : </b> <br/> OrganizationAdministration<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrganizationPublicConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_slug = 'organization_slug_example'; // string
$hello_asso_api_v5_models_organizations_organization_public_configurations_request = new \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationsOrganizationPublicConfigurationsRequest(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationsOrganizationPublicConfigurationsRequest

try {
    $apiInstance->organizationsOrganizationSlugConfigurationsPut($organization_slug, $hello_asso_api_v5_models_organizations_organization_public_configurations_request);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationPublicConfigurationsApi->organizationsOrganizationSlugConfigurationsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**|  | |
| **hello_asso_api_v5_models_organizations_organization_public_configurations_request** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationsOrganizationPublicConfigurationsRequest**](../Model/HelloAssoApiV5ModelsOrganizationsOrganizationPublicConfigurationsRequest.md)|  | [optional] |

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
