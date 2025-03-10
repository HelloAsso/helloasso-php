# OpenAPI\Client\OrganizationApi

All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**organizationsLegalInformationsOrganizationSlugConfigurationPut()**](OrganizationApi.md#organizationsLegalInformationsOrganizationSlugConfigurationPut) | **PUT** /organizations/legal-informations/{organizationSlug}/configuration | Mettre à jour la configuration des informations juridiques de l&#39;organisation. |


## `organizationsLegalInformationsOrganizationSlugConfigurationPut()`

```php
organizationsLegalInformationsOrganizationSlugConfigurationPut($organization_slug, $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body)
```

Mettre à jour la configuration des informations juridiques de l'organisation.

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> OrganizationAdministration<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string
$hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body = new \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationLegalInformationConfigurationBody(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationLegalInformationConfigurationBody

try {
    $apiInstance->organizationsLegalInformationsOrganizationSlugConfigurationPut($organization_slug, $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationsLegalInformationsOrganizationSlugConfigurationPut: ', $e->getMessage(), PHP_EOL;
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

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
