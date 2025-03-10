# OpenAPI\Client\ReusFiscauxApi

All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**organizationsOrganizationSlugTaxReceiptConfigurationGet()**](ReusFiscauxApi.md#organizationsOrganizationSlugTaxReceiptConfigurationGet) | **GET** /organizations/{organizationSlug}/tax-receipt/configuration | Obtenir la configuration des reçus fiscaux |
| [**organizationsOrganizationSlugTaxReceiptConfigurationPut()**](ReusFiscauxApi.md#organizationsOrganizationSlugTaxReceiptConfigurationPut) | **PUT** /organizations/{organizationSlug}/tax-receipt/configuration | Mettre à jour la configuration des reçus fiscaux |
| [**organizationsOrganizationSlugTaxReceiptFiscalReceiptTransmitterPut()**](ReusFiscauxApi.md#organizationsOrganizationSlugTaxReceiptFiscalReceiptTransmitterPut) | **PUT** /organizations/{organizationSlug}/tax-receipt/fiscal-receipt-transmitter | Mettre à jour l&#39;émetteur des reçus fiscaux |
| [**organizationsOrganizationSlugTaxReceiptPreviewPost()**](ReusFiscauxApi.md#organizationsOrganizationSlugTaxReceiptPreviewPost) | **POST** /organizations/{organizationSlug}/tax-receipt/preview | Prévisualiser les reçus fiscaux |


## `organizationsOrganizationSlugTaxReceiptConfigurationGet()`

```php
organizationsOrganizationSlugTaxReceiptConfigurationGet($organization_slug): \OpenAPI\Client\Model\HelloAssoCoreAccountsTaxReceiptsOrganizationFiscalReceiptOptionsConfiguration
```

Obtenir la configuration des reçus fiscaux

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>OrganizationAdmin<br/>FormAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> RefundManagement<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReusFiscauxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string

try {
    $result = $apiInstance->organizationsOrganizationSlugTaxReceiptConfigurationGet($organization_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReusFiscauxApi->organizationsOrganizationSlugTaxReceiptConfigurationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\HelloAssoCoreAccountsTaxReceiptsOrganizationFiscalReceiptOptionsConfiguration**](../Model/HelloAssoCoreAccountsTaxReceiptsOrganizationFiscalReceiptOptionsConfiguration.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationsOrganizationSlugTaxReceiptConfigurationPut()`

```php
organizationsOrganizationSlugTaxReceiptConfigurationPut($organization_slug, $file, $config)
```

Mettre à jour la configuration des reçus fiscaux

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>OrganizationAdmin<br/>FormAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> RefundManagement<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReusFiscauxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string
$file = '/path/to/file.txt'; // \SplFileObject | Upload File
$config = 'config_example'; // string | config

try {
    $apiInstance->organizationsOrganizationSlugTaxReceiptConfigurationPut($organization_slug, $file, $config);
} catch (Exception $e) {
    echo 'Exception when calling ReusFiscauxApi->organizationsOrganizationSlugTaxReceiptConfigurationPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**| Upload File | |
| **config** | **string**| config | [optional] |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationsOrganizationSlugTaxReceiptFiscalReceiptTransmitterPut()`

```php
organizationsOrganizationSlugTaxReceiptFiscalReceiptTransmitterPut($organization_slug, $hello_asso_api_v5_models_organization_legal_informations_update_organization_fiscal_receipt_transmitter_body)
```

Mettre à jour l'émetteur des reçus fiscaux

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>OrganizationAdmin<br/>FormAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> RefundManagement<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReusFiscauxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string
$hello_asso_api_v5_models_organization_legal_informations_update_organization_fiscal_receipt_transmitter_body = new \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationFiscalReceiptTransmitterBody(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationFiscalReceiptTransmitterBody

try {
    $apiInstance->organizationsOrganizationSlugTaxReceiptFiscalReceiptTransmitterPut($organization_slug, $hello_asso_api_v5_models_organization_legal_informations_update_organization_fiscal_receipt_transmitter_body);
} catch (Exception $e) {
    echo 'Exception when calling ReusFiscauxApi->organizationsOrganizationSlugTaxReceiptFiscalReceiptTransmitterPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**|  | |
| **hello_asso_api_v5_models_organization_legal_informations_update_organization_fiscal_receipt_transmitter_body** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationFiscalReceiptTransmitterBody**](../Model/HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationFiscalReceiptTransmitterBody.md)|  | [optional] |

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

## `organizationsOrganizationSlugTaxReceiptPreviewPost()`

```php
organizationsOrganizationSlugTaxReceiptPreviewPost($organization_slug, $file, $config)
```

Prévisualiser les reçus fiscaux

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>OrganizationAdmin<br/>FormAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> RefundManagement<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReusFiscauxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string
$file = '/path/to/file.txt'; // \SplFileObject | Upload File
$config = 'config_example'; // string | config

try {
    $apiInstance->organizationsOrganizationSlugTaxReceiptPreviewPost($organization_slug, $file, $config);
} catch (Exception $e) {
    echo 'Exception when calling ReusFiscauxApi->organizationsOrganizationSlugTaxReceiptPreviewPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**| Upload File | |
| **config** | **string**| config | [optional] |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
