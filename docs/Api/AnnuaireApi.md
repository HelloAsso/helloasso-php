# OpenAPI\Client\AnnuaireApi

All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**directoryFormsPost()**](AnnuaireApi.md#directoryFormsPost) | **POST** /directory/forms | Récupérer les formulaires |
| [**directoryOrganizationsPost()**](AnnuaireApi.md#directoryOrganizationsPost) | **POST** /directory/organizations | Récupérer les organisations |


## `directoryFormsPost()`

```php
directoryFormsPost($page_size, $continuation_token, $hello_asso_api_v5_models_directory_list_forms_request): \OpenAPI\Client\Model\ResultsWithPaginationModelSynchronizableFormModel
```

Récupérer les formulaires

Permet de récupérer une liste de tous les formulaires visibles correspondant à tous les filtres de l'annuaire jusqu'à ce qu'il soit synchronisé (en utilisant le continuationToken). Si aucun filtre n'est spécifié, aucun filtre n'est appliqué. Les résultats sont classés par date de mise à jour de la visibilité API en ordre croissant. Une fois la liste synchronisée, seuls les formulaires avec une date de mise à jour de la visibilité API supérieure à la dernière forme envoyée sont retournés (toujours en utilisant le continuationToken). Cela concerne les nouveaux formulaires à insérer (souhaitant apparaître de l'annuaire) ainsi que les anciens à supprimer (ne souhaitant plus apparaître dans l'annuaire). Le nombre total de résultats (ou de pages) n'est pas récupérable, donc les informations de pagination retournées indiqueront toujours -1.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> FormOpenDirectory<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnnuaireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 20; // int | The number of items per page
$continuation_token = 'continuation_token_example'; // string | Continuation Token from which we wish to retrieve results
$hello_asso_api_v5_models_directory_list_forms_request = new \OpenAPI\Client\Model\HelloAssoApiV5ModelsDirectoryListFormsRequest(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsDirectoryListFormsRequest | Body which contains the filters to apply

try {
    $result = $apiInstance->directoryFormsPost($page_size, $continuation_token, $hello_asso_api_v5_models_directory_list_forms_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnuaireApi->directoryFormsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_size** | **int**| The number of items per page | [optional] [default to 20] |
| **continuation_token** | **string**| Continuation Token from which we wish to retrieve results | [optional] |
| **hello_asso_api_v5_models_directory_list_forms_request** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsDirectoryListFormsRequest**](../Model/HelloAssoApiV5ModelsDirectoryListFormsRequest.md)| Body which contains the filters to apply | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResultsWithPaginationModelSynchronizableFormModel**](../Model/ResultsWithPaginationModelSynchronizableFormModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directoryOrganizationsPost()`

```php
directoryOrganizationsPost($page_size, $continuation_token, $hello_asso_api_v5_models_directory_list_organizations_request): \OpenAPI\Client\Model\ResultsWithPaginationModelSynchronizableOrganizationModel
```

Récupérer les organisations

Permet de récupérer une liste de toutes les organisations visibles correspondant à tous les filtres de l'annuaire jusqu'à ce qu'il soit synchronisé (en utilisant le continuationToken). Si aucun filtre n'est spécifié, aucun filtre n'est appliqué. Les résultats sont classés par date de mise à jour de la visibilité API en ordre croissant. Une fois la liste synchronisée, seules les organisations avec une date de mise à jour de la visibilité API supérieure à la dernière organisation envoyée sont retournées (toujours en utilisant le continuationToken). Cela concerne les nouvelles organisations à insérer (souhaitant apparaître dans l'annuaire) ainsi que les anciennes à supprimer (ne souhaitant plus apparaître dans l'annuaire). Le nombre total de résultats (ou de pages) n'est pas récupérable, donc les informations de pagination retournées indiqueront toujours -1.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> OrganizationOpenDirectory<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AnnuaireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 20; // int | The number of items per page
$continuation_token = 'continuation_token_example'; // string | Continuation Token from which we wish to retrieve results
$hello_asso_api_v5_models_directory_list_organizations_request = new \OpenAPI\Client\Model\HelloAssoApiV5ModelsDirectoryListOrganizationsRequest(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsDirectoryListOrganizationsRequest | Body which contains the filters to apply

try {
    $result = $apiInstance->directoryOrganizationsPost($page_size, $continuation_token, $hello_asso_api_v5_models_directory_list_organizations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnuaireApi->directoryOrganizationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_size** | **int**| The number of items per page | [optional] [default to 20] |
| **continuation_token** | **string**| Continuation Token from which we wish to retrieve results | [optional] |
| **hello_asso_api_v5_models_directory_list_organizations_request** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsDirectoryListOrganizationsRequest**](../Model/HelloAssoApiV5ModelsDirectoryListOrganizationsRequest.md)| Body which contains the filters to apply | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResultsWithPaginationModelSynchronizableOrganizationModel**](../Model/ResultsWithPaginationModelSynchronizableOrganizationModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
