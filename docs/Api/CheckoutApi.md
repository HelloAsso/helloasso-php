# OpenAPI\Client\CheckoutApi

All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**organizationsOrganizationSlugCheckoutIntentsCheckoutIntentIdGet()**](CheckoutApi.md#organizationsOrganizationSlugCheckoutIntentsCheckoutIntentIdGet) | **GET** /organizations/{organizationSlug}/checkout-intents/{checkoutIntentId} | Récupérer une intention de paiement |
| [**organizationsOrganizationSlugCheckoutIntentsPost()**](CheckoutApi.md#organizationsOrganizationSlugCheckoutIntentsPost) | **POST** /organizations/{organizationSlug}/checkout-intents | Initialisation d&#39;un Checkout |


## `organizationsOrganizationSlugCheckoutIntentsCheckoutIntentIdGet()`

```php
organizationsOrganizationSlugCheckoutIntentsCheckoutIntentIdGet($organization_slug, $checkout_intent_id, $with_failed_refund_operation): \OpenAPI\Client\Model\HelloAssoApiV5ModelsCartsCheckoutIntentResponse
```

Récupérer une intention de paiement

Retourne aussi la commande associée. Uniquement dans le cas ou le paiement est autorisé.<br/><br/><b>Votre clientId doit avoir ces autorisations : </b> <br/> Checkout<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string
$checkout_intent_id = 56; // int
$with_failed_refund_operation = false; // bool

try {
    $result = $apiInstance->organizationsOrganizationSlugCheckoutIntentsCheckoutIntentIdGet($organization_slug, $checkout_intent_id, $with_failed_refund_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->organizationsOrganizationSlugCheckoutIntentsCheckoutIntentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**|  | |
| **checkout_intent_id** | **int**|  | |
| **with_failed_refund_operation** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsCartsCheckoutIntentResponse**](../Model/HelloAssoApiV5ModelsCartsCheckoutIntentResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationsOrganizationSlugCheckoutIntentsPost()`

```php
organizationsOrganizationSlugCheckoutIntentsPost($organization_slug, $hello_asso_api_v5_models_carts_init_checkout_body): \OpenAPI\Client\Model\HelloAssoApiV5ModelsCartsInitCheckoutResponse
```

Initialisation d'un Checkout

Pour tout savoir sur Checkout consultez d'abord notre <a href=\"https://dev.helloasso.com/docs/description\">documentation</a><br/><br/><b>Votre clientId doit avoir ces autorisations : </b> <br/> Checkout<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string
$hello_asso_api_v5_models_carts_init_checkout_body = new \OpenAPI\Client\Model\HelloAssoApiV5ModelsCartsInitCheckoutBody(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsCartsInitCheckoutBody

try {
    $result = $apiInstance->organizationsOrganizationSlugCheckoutIntentsPost($organization_slug, $hello_asso_api_v5_models_carts_init_checkout_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->organizationsOrganizationSlugCheckoutIntentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**|  | |
| **hello_asso_api_v5_models_carts_init_checkout_body** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsCartsInitCheckoutBody**](../Model/HelloAssoApiV5ModelsCartsInitCheckoutBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsCartsInitCheckoutResponse**](../Model/HelloAssoApiV5ModelsCartsInitCheckoutResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
