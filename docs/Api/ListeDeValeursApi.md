# OpenAPI\Client\ListeDeValeursApi



All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**valuesCompanyLegalStatusGet()**](ListeDeValeursApi.md#valuesCompanyLegalStatusGet) | **GET** /values/company-legal-status | Obtenir la liste des statuts juridiques |
| [**valuesOrganizationCategoriesGet()**](ListeDeValeursApi.md#valuesOrganizationCategoriesGet) | **GET** /values/organization/categories | Obtenir la liste des catégories du JO |
| [**valuesTagsGet()**](ListeDeValeursApi.md#valuesTagsGet) | **GET** /values/tags | Obtenir la liste des tags publiques |


## `valuesCompanyLegalStatusGet()`

```php
valuesCompanyLegalStatusGet()
```

Obtenir la liste des statuts juridiques

<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessPublicData<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ListeDeValeursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->valuesCompanyLegalStatusGet();
} catch (Exception $e) {
    echo 'Exception when calling ListeDeValeursApi->valuesCompanyLegalStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `valuesOrganizationCategoriesGet()`

```php
valuesOrganizationCategoriesGet()
```

Obtenir la liste des catégories du JO

Utilisez ceci afin de construire votre liste de catégories d'organisation<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessPublicData<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ListeDeValeursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->valuesOrganizationCategoriesGet();
} catch (Exception $e) {
    echo 'Exception when calling ListeDeValeursApi->valuesOrganizationCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `valuesTagsGet()`

```php
valuesTagsGet()
```

Obtenir la liste des tags publiques

Utilisez ceci afin de récupérer la liste des étiquettes utilisées<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessPublicData<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ListeDeValeursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->valuesTagsGet();
} catch (Exception $e) {
    echo 'Exception when calling ListeDeValeursApi->valuesTagsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
