# OpenAPI\Client\PartenairesApi

All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**partnersMeApiClientsPut()**](PartenairesApi.md#partnersMeApiClientsPut) | **PUT** /partners/me/api-clients | Mise à jour du domaine |
| [**partnersMeApiNotificationsDelete()**](PartenairesApi.md#partnersMeApiNotificationsDelete) | **DELETE** /partners/me/api-notifications | Suppression de l&#39;URL de notification principale |
| [**partnersMeApiNotificationsOrganizationsOrganizationSlugDelete()**](PartenairesApi.md#partnersMeApiNotificationsOrganizationsOrganizationSlugDelete) | **DELETE** /partners/me/api-notifications/organizations/{organizationSlug} | Suppression d&#39;une URL de notification liée à une organisation |
| [**partnersMeApiNotificationsOrganizationsOrganizationSlugPut()**](PartenairesApi.md#partnersMeApiNotificationsOrganizationsOrganizationSlugPut) | **PUT** /partners/me/api-notifications/organizations/{organizationSlug} | Mise à jour d&#39;une URL de notification liée à une organisation |
| [**partnersMeApiNotificationsPut()**](PartenairesApi.md#partnersMeApiNotificationsPut) | **PUT** /partners/me/api-notifications | Mise à jour de l&#39;URL de notification principale |
| [**partnersMeGet()**](PartenairesApi.md#partnersMeGet) | **GET** /partners/me | Récupération des informations |
| [**partnersMeOrganizationsGet()**](PartenairesApi.md#partnersMeOrganizationsGet) | **GET** /partners/me/organizations | Obtenir toutes les organisations |


## `partnersMeApiClientsPut()`

```php
partnersMeApiClientsPut($hello_asso_api_v5_models_accounts_clients_public_put_api_client_request)
```

Mise à jour du domaine

<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessPublicData<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PartenairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hello_asso_api_v5_models_accounts_clients_public_put_api_client_request = new \OpenAPI\Client\Model\HelloAssoApiV5ModelsAccountsClientsPublicPutApiClientRequest(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsAccountsClientsPublicPutApiClientRequest

try {
    $apiInstance->partnersMeApiClientsPut($hello_asso_api_v5_models_accounts_clients_public_put_api_client_request);
} catch (Exception $e) {
    echo 'Exception when calling PartenairesApi->partnersMeApiClientsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hello_asso_api_v5_models_accounts_clients_public_put_api_client_request** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsAccountsClientsPublicPutApiClientRequest**](../Model/HelloAssoApiV5ModelsAccountsClientsPublicPutApiClientRequest.md)|  | [optional] |

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

## `partnersMeApiNotificationsDelete()`

```php
partnersMeApiNotificationsDelete($notification_type)
```

Suppression de l'URL de notification principale

<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessPublicData<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PartenairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsApiNotificationsApiNotificationType(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsApiNotificationsApiNotificationType | Do not specify a notification type to remove the main notification Url

try {
    $apiInstance->partnersMeApiNotificationsDelete($notification_type);
} catch (Exception $e) {
    echo 'Exception when calling PartenairesApi->partnersMeApiNotificationsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsApiNotificationsApiNotificationType**](../Model/.md)| Do not specify a notification type to remove the main notification Url | [optional] |

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

## `partnersMeApiNotificationsOrganizationsOrganizationSlugDelete()`

```php
partnersMeApiNotificationsOrganizationsOrganizationSlugDelete($organization_slug, $notification_type)
```

Suppression d'une URL de notification liée à une organisation

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessPublicData<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PartenairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string | 
$notification_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsApiNotificationsApiNotificationType(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsApiNotificationsApiNotificationType | Do not specify a notification type to remove the main notification Url

try {
    $apiInstance->partnersMeApiNotificationsOrganizationsOrganizationSlugDelete($organization_slug, $notification_type);
} catch (Exception $e) {
    echo 'Exception when calling PartenairesApi->partnersMeApiNotificationsOrganizationsOrganizationSlugDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**|  | |
| **notification_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsApiNotificationsApiNotificationType**](../Model/.md)| Do not specify a notification type to remove the main notification Url | [optional] |

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

## `partnersMeApiNotificationsOrganizationsOrganizationSlugPut()`

```php
partnersMeApiNotificationsOrganizationsOrganizationSlugPut($organization_slug, $hello_asso_api_v5_models_api_notifications_post_api_url_notification_body): \OpenAPI\Client\Model\HelloAssoApiV5ModelsApiNotificationsApiUrlNotificationModel
```

Mise à jour d'une URL de notification liée à une organisation

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessPublicData<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PartenairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string | 
$hello_asso_api_v5_models_api_notifications_post_api_url_notification_body = new \OpenAPI\Client\Model\HelloAssoApiV5ModelsApiNotificationsPostApiUrlNotificationBody(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsApiNotificationsPostApiUrlNotificationBody | The body of the request, do not specify a notification type to update the main notification Url

try {
    $result = $apiInstance->partnersMeApiNotificationsOrganizationsOrganizationSlugPut($organization_slug, $hello_asso_api_v5_models_api_notifications_post_api_url_notification_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartenairesApi->partnersMeApiNotificationsOrganizationsOrganizationSlugPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**|  | |
| **hello_asso_api_v5_models_api_notifications_post_api_url_notification_body** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsApiNotificationsPostApiUrlNotificationBody**](../Model/HelloAssoApiV5ModelsApiNotificationsPostApiUrlNotificationBody.md)| The body of the request, do not specify a notification type to update the main notification Url | [optional] |

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsApiNotificationsApiUrlNotificationModel**](../Model/HelloAssoApiV5ModelsApiNotificationsApiUrlNotificationModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partnersMeApiNotificationsPut()`

```php
partnersMeApiNotificationsPut($hello_asso_api_v5_models_api_notifications_post_api_url_notification_body): \OpenAPI\Client\Model\HelloAssoApiV5ModelsApiNotificationsApiUrlNotificationModel
```

Mise à jour de l'URL de notification principale

<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessPublicData<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PartenairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hello_asso_api_v5_models_api_notifications_post_api_url_notification_body = new \OpenAPI\Client\Model\HelloAssoApiV5ModelsApiNotificationsPostApiUrlNotificationBody(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsApiNotificationsPostApiUrlNotificationBody | The body of the request, do not specify a notification type to update the main notification Url

try {
    $result = $apiInstance->partnersMeApiNotificationsPut($hello_asso_api_v5_models_api_notifications_post_api_url_notification_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartenairesApi->partnersMeApiNotificationsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hello_asso_api_v5_models_api_notifications_post_api_url_notification_body** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsApiNotificationsPostApiUrlNotificationBody**](../Model/HelloAssoApiV5ModelsApiNotificationsPostApiUrlNotificationBody.md)| The body of the request, do not specify a notification type to update the main notification Url | [optional] |

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsApiNotificationsApiUrlNotificationModel**](../Model/HelloAssoApiV5ModelsApiNotificationsApiUrlNotificationModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partnersMeGet()`

```php
partnersMeGet(): \OpenAPI\Client\Model\HelloAssoApiV5ModelsPartnersPartnerPublicModel
```

Récupération des informations

<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessPublicData<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PartenairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->partnersMeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartenairesApi->partnersMeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsPartnersPartnerPublicModel**](../Model/HelloAssoApiV5ModelsPartnersPartnerPublicModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partnersMeOrganizationsGet()`

```php
partnersMeOrganizationsGet($page_size, $continuation_token): \OpenAPI\Client\Model\ResultsWithPaginationModelPartnerOrganizationModel
```

Obtenir toutes les organisations

Liste toutes les organisations liées au partenaire. Les résultats sont classés par date de mise à jour de la visibilité API en ordre croissant. Le nombre total de résultats (ou de pages) n'est pas récupérable, donc les informations de pagination retournées indiqueront toujours -1.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessPublicData<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PartenairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 20; // int | The number of items per page
$continuation_token = 'continuation_token_example'; // string | Continuation Token from which we wish to retrieve results

try {
    $result = $apiInstance->partnersMeOrganizationsGet($page_size, $continuation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartenairesApi->partnersMeOrganizationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_size** | **int**| The number of items per page | [optional] [default to 20] |
| **continuation_token** | **string**| Continuation Token from which we wish to retrieve results | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResultsWithPaginationModelPartnerOrganizationModel**](../Model/ResultsWithPaginationModelPartnerOrganizationModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
