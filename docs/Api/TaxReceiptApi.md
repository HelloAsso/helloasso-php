# OpenAPI\Client\TaxReceiptApi

All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**organizationsOrganizationSlugTaxReceiptConfigurationGet()**](TaxReceiptApi.md#organizationsOrganizationSlugTaxReceiptConfigurationGet) | **GET** /organizations/{organizationSlug}/tax-receipt/configuration |  |
| [**organizationsOrganizationSlugTaxReceiptConfigurationPut()**](TaxReceiptApi.md#organizationsOrganizationSlugTaxReceiptConfigurationPut) | **PUT** /organizations/{organizationSlug}/tax-receipt/configuration |  |
| [**organizationsOrganizationSlugTaxReceiptFiscalReceiptTransmitterPut()**](TaxReceiptApi.md#organizationsOrganizationSlugTaxReceiptFiscalReceiptTransmitterPut) | **PUT** /organizations/{organizationSlug}/tax-receipt/fiscal-receipt-transmitter |  |
| [**organizationsOrganizationSlugTaxReceiptPreviewPost()**](TaxReceiptApi.md#organizationsOrganizationSlugTaxReceiptPreviewPost) | **POST** /organizations/{organizationSlug}/tax-receipt/preview |  |


## `organizationsOrganizationSlugTaxReceiptConfigurationGet()`

```php
organizationsOrganizationSlugTaxReceiptConfigurationGet($organization_slug): \OpenAPI\Client\Model\HelloAssoCoreAccountsTaxReceiptsOrganizationFiscalReceiptOptionsConfiguration
```



<br/><br/><b>Your token must have one of these roles : </b><br/>OrganizationAdmin<br/><br/>If you are an <b>association</b>, you can obtain these roles with your client.<br/>If you are a <b>partner</b>, you can obtain these roles by the authorize flow.<br/><br/><b>Your clientId must be allowed all of those privileges : </b> <br/> OrganizationAdministration<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_slug = 'organization_slug_example'; // string

try {
    $result = $apiInstance->organizationsOrganizationSlugTaxReceiptConfigurationGet($organization_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxReceiptApi->organizationsOrganizationSlugTaxReceiptConfigurationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\HelloAssoCoreAccountsTaxReceiptsOrganizationFiscalReceiptOptionsConfiguration**](../Model/HelloAssoCoreAccountsTaxReceiptsOrganizationFiscalReceiptOptionsConfiguration.md)

### Authorization

No authorization required

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



<br/><br/><b>Your token must have one of these roles : </b><br/>OrganizationAdmin<br/><br/>If you are an <b>association</b>, you can obtain these roles with your client.<br/>If you are a <b>partner</b>, you can obtain these roles by the authorize flow.<br/><br/><b>Your clientId must be allowed all of those privileges : </b> <br/> OrganizationAdministration<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_slug = 'organization_slug_example'; // string
$file = '/path/to/file.txt'; // \SplFileObject | Upload File
$config = 'config_example'; // string | config

try {
    $apiInstance->organizationsOrganizationSlugTaxReceiptConfigurationPut($organization_slug, $file, $config);
} catch (Exception $e) {
    echo 'Exception when calling TaxReceiptApi->organizationsOrganizationSlugTaxReceiptConfigurationPut: ', $e->getMessage(), PHP_EOL;
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

No authorization required

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



<br/><br/><b>Your token must have one of these roles : </b><br/>OrganizationAdmin<br/><br/>If you are an <b>association</b>, you can obtain these roles with your client.<br/>If you are a <b>partner</b>, you can obtain these roles by the authorize flow.<br/><br/><b>Your clientId must be allowed all of those privileges : </b> <br/> OrganizationAdministration<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_slug = 'organization_slug_example'; // string
$hello_asso_api_v5_models_organization_legal_informations_update_organization_fiscal_receipt_transmitter_body = new \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationFiscalReceiptTransmitterBody(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationFiscalReceiptTransmitterBody

try {
    $apiInstance->organizationsOrganizationSlugTaxReceiptFiscalReceiptTransmitterPut($organization_slug, $hello_asso_api_v5_models_organization_legal_informations_update_organization_fiscal_receipt_transmitter_body);
} catch (Exception $e) {
    echo 'Exception when calling TaxReceiptApi->organizationsOrganizationSlugTaxReceiptFiscalReceiptTransmitterPut: ', $e->getMessage(), PHP_EOL;
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

No authorization required

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



<br/><br/><b>Your token must have one of these roles : </b><br/>OrganizationAdmin<br/><br/>If you are an <b>association</b>, you can obtain these roles with your client.<br/>If you are a <b>partner</b>, you can obtain these roles by the authorize flow.<br/><br/><b>Your clientId must be allowed all of those privileges : </b> <br/> OrganizationAdministration<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaxReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_slug = 'organization_slug_example'; // string
$file = '/path/to/file.txt'; // \SplFileObject | Upload File
$config = 'config_example'; // string | config

try {
    $apiInstance->organizationsOrganizationSlugTaxReceiptPreviewPost($organization_slug, $file, $config);
} catch (Exception $e) {
    echo 'Exception when calling TaxReceiptApi->organizationsOrganizationSlugTaxReceiptPreviewPost: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
