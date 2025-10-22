# OpenAPI\Client\VersementsApi

All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**organizationsOrganizationSlugCashOutCashOutIdExportGet()**](VersementsApi.md#organizationsOrganizationSlugCashOutCashOutIdExportGet) | **GET** /organizations/{organizationSlug}/cash-out/{cashOutId}/export | Détails d&#39;un versement |


## `organizationsOrganizationSlugCashOutCashOutIdExportGet()`

```php
organizationsOrganizationSlugCashOutCashOutIdExportGet($organization_slug, $cash_out_id): \OpenAPI\Client\Model\HelloAssoApiV5CommonModelsPaymentCashoutExportCashoutExportRowModel[]
```

Détails d'un versement

<br/><br/><b>Votre token doit avoir l''un de ces rôles : </b><br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d''autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessTransactions<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\VersementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string | The organization slug
$cash_out_id = 56; // int | The cash-out id to details

try {
    $result = $apiInstance->organizationsOrganizationSlugCashOutCashOutIdExportGet($organization_slug, $cash_out_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersementsApi->organizationsOrganizationSlugCashOutCashOutIdExportGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**| The organization slug | |
| **cash_out_id** | **int**| The cash-out id to details | |

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsPaymentCashoutExportCashoutExportRowModel[]**](../Model/HelloAssoApiV5CommonModelsPaymentCashoutExportCashoutExportRowModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
