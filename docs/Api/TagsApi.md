# OpenAPI\Client\TagsApi

All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tagsTagNameGet()**](TagsApi.md#tagsTagNameGet) | **GET** /tags/{tagName} | Obtenir le détail d&#39;un tag interne |


## `tagsTagNameGet()`

```php
tagsTagNameGet($tag_name, $with_count, $with_amount): \OpenAPI\Client\Model\HelloAssoApiV5ModelsTagsInternalTagModel
```

Obtenir le détail d'un tag interne

<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> FormOpenDirectory<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_name = 'tag_name_example'; // string | 
$with_count = false; // bool | If true : Count of times Tag is used
$with_amount = false; // bool | If true : Amount collected by all forms linked to this Tag

try {
    $result = $apiInstance->tagsTagNameGet($tag_name, $with_count, $with_amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagsTagNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_name** | **string**|  | |
| **with_count** | **bool**| If true : Count of times Tag is used | [optional] [default to false] |
| **with_amount** | **bool**| If true : Amount collected by all forms linked to this Tag | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsTagsInternalTagModel**](../Model/HelloAssoApiV5ModelsTagsInternalTagModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
