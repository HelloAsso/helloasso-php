# OpenAPI\Client\OrganisationApi

All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**organizationsLegalInformationsLegalStructuresGet()**](OrganisationApi.md#organizationsLegalInformationsLegalStructuresGet) | **GET** /organizations/legal-informations/legal-structures | Obtenir la structure juridique d&#39;une organisation visible. |
| [**organizationsLegalInformationsOrganizationSlugConfigurationGet()**](OrganisationApi.md#organizationsLegalInformationsOrganizationSlugConfigurationGet) | **GET** /organizations/legal-informations/{organizationSlug}/configuration | Obtenir la configuration des informations juridiques de l&#39;organisation. |
| [**organizationsLegalInformationsOrganizationSlugConfigurationPut()**](OrganisationApi.md#organizationsLegalInformationsOrganizationSlugConfigurationPut) | **PUT** /organizations/legal-informations/{organizationSlug}/configuration | Mettre à jour la configuration des informations juridiques de l&#39;organisation. |
| [**organizationsLegalInformationsTaxInformationTextsGet()**](OrganisationApi.md#organizationsLegalInformationsTaxInformationTextsGet) | **GET** /organizations/legal-informations/tax-information-texts | Obtenir les textes d&#39;information fiscale de l&#39;organisation. |
| [**organizationsOrganizationSlugGet()**](OrganisationApi.md#organizationsOrganizationSlugGet) | **GET** /organizations/{organizationSlug} | Obtenir le détail d&#39;une organisation |


## `organizationsLegalInformationsLegalStructuresGet()`

```php
organizationsLegalInformationsLegalStructuresGet(): \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsOrganizationLegalStructuresModel[]
```

Obtenir la structure juridique d'une organisation visible.

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> OrganizationAdministration<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->organizationsLegalInformationsLegalStructuresGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organizationsLegalInformationsLegalStructuresGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsOrganizationLegalStructuresModel[]**](../Model/HelloAssoApiV5ModelsOrganizationLegalInformationsOrganizationLegalStructuresModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationsLegalInformationsOrganizationSlugConfigurationGet()`

```php
organizationsLegalInformationsOrganizationSlugConfigurationGet($organization_slug): \OpenAPI\Client\Model\HelloAssoModelsAccountsOrganizationLegalInformationsOrganizationLegalInformationConfiguration
```

Obtenir la configuration des informations juridiques de l'organisation.

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> OrganizationAdministration<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string

try {
    $result = $apiInstance->organizationsLegalInformationsOrganizationSlugConfigurationGet($organization_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organizationsLegalInformationsOrganizationSlugConfigurationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\HelloAssoModelsAccountsOrganizationLegalInformationsOrganizationLegalInformationConfiguration**](../Model/HelloAssoModelsAccountsOrganizationLegalInformationsOrganizationLegalInformationConfiguration.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new OpenAPI\Client\Api\OrganisationApi(
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
    echo 'Exception when calling OrganisationApi->organizationsLegalInformationsOrganizationSlugConfigurationPut: ', $e->getMessage(), PHP_EOL;
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

## `organizationsLegalInformationsTaxInformationTextsGet()`

```php
organizationsLegalInformationsTaxInformationTextsGet($organization_slug): \OpenAPI\Client\Model\HelloAssoModelsAccountsOrganizationLegalInformationsTaxInformationText[]
```

Obtenir les textes d'information fiscale de l'organisation.

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> OrganizationAdministration<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string

try {
    $result = $apiInstance->organizationsLegalInformationsTaxInformationTextsGet($organization_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organizationsLegalInformationsTaxInformationTextsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\HelloAssoModelsAccountsOrganizationLegalInformationsTaxInformationText[]**](../Model/HelloAssoModelsAccountsOrganizationLegalInformationsTaxInformationText.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationsOrganizationSlugGet()`

```php
organizationsOrganizationSlugGet($organization_slug): \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationOrganizationModel
```

Obtenir le détail d'une organisation

Obtenir les informations publiques de l'organisation spécifiée.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessPublicData<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganisationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string | The organization Slug

try {
    $result = $apiInstance->organizationsOrganizationSlugGet($organization_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organizationsOrganizationSlugGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**| The organization Slug | |

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationOrganizationModel**](../Model/HelloAssoApiV5ModelsOrganizationOrganizationModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
