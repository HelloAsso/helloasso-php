# OpenAPI\Client\UtilisateursApi

All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usersMeOrganizationsGet()**](UtilisateursApi.md#usersMeOrganizationsGet) | **GET** /users/me/organizations | Obtenir mes organisations |


## `usersMeOrganizationsGet()`

```php
usersMeOrganizationsGet(): \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationOrganizationLightModel[]
```

Obtenir mes organisations

Renvoie la liste des organisations où l'utilisateur connecté a des droits<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessPublicData<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UtilisateursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->usersMeOrganizationsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilisateursApi->usersMeOrganizationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationOrganizationLightModel[]**](../Model/HelloAssoApiV5ModelsOrganizationOrganizationLightModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
