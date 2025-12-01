# OpenAPI\Client\OrganisationApi



All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**organizationsOrganizationSlugGet()**](OrganisationApi.md#organizationsOrganizationSlugGet) | **GET** /organizations/{organizationSlug} | Obtenir le détail d&#39;une organisation |


## `organizationsOrganizationSlugGet()`

```php
organizationsOrganizationSlugGet($organization_slug)
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
    $apiInstance->organizationsOrganizationSlugGet($organization_slug);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organizationsOrganizationSlugGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**| The organization Slug | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
