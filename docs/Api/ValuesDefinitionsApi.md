# OpenAPI\Client\ValuesDefinitionsApi



All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**valuesFormFormTypeTypesGet()**](ValuesDefinitionsApi.md#valuesFormFormTypeTypesGet) | **GET** /values/form/{formType}/types | Get all activity types for a form type |


## `valuesFormFormTypeTypesGet()`

```php
valuesFormFormTypeTypesGet($form_type): \OpenAPI\Client\Model\HelloAssoApiV5CommonModelsFormsFormActivityModel[]
```

Get all activity types for a form type

Use this in order to build your dropdown of form subtypes<br/><br/><b>Your clientId must be allowed all of those privileges : </b> <br/> FormAdministration<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ValuesDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$form_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsFormType(); // \OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsFormType

try {
    $result = $apiInstance->valuesFormFormTypeTypesGet($form_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValuesDefinitionsApi->valuesFormFormTypeTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsFormType**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsFormsFormActivityModel[]**](../Model/HelloAssoApiV5CommonModelsFormsFormActivityModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
