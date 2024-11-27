# OpenAPI\Client\FormulairesApi

All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**organizationsOrganizationSlugFormTypesGet()**](FormulairesApi.md#organizationsOrganizationSlugFormTypesGet) | **GET** /organizations/{organizationSlug}/formTypes | Obtenir une liste des types de formulaires pour une organisation |
| [**organizationsOrganizationSlugFormsFormTypeActionQuickCreatePost()**](FormulairesApi.md#organizationsOrganizationSlugFormsFormTypeActionQuickCreatePost) | **POST** /organizations/{organizationSlug}/forms/{formType}/action/quick-create | Créer un événement simplifié pour un organisme |
| [**organizationsOrganizationSlugFormsFormTypeFormSlugPublicGet()**](FormulairesApi.md#organizationsOrganizationSlugFormsFormTypeFormSlugPublicGet) | **GET** /organizations/{organizationSlug}/forms/{formType}/{formSlug}/public | Obtenir des données publiques détaillées sur un formulaire |
| [**organizationsOrganizationSlugFormsGet()**](FormulairesApi.md#organizationsOrganizationSlugFormsGet) | **GET** /organizations/{organizationSlug}/forms | Obtenir les formulaires d&#39;une organisation |


## `organizationsOrganizationSlugFormTypesGet()`

```php
organizationsOrganizationSlugFormTypesGet($organization_slug, $states): \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType[]
```

Obtenir une liste des types de formulaires pour une organisation

Liste tous les types de formulaires où l'organisation possède au moins un formulaire. Cela peut également être filtré par états.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessPublicData<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FormulairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string | The organization Slug
$states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormState()); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormState[] | List of Form States to filter with. If none specified, it won't filter results.  Available values: * `Public` - The form is publicly visible and findable on search engines * `Private` - The form is visible only with the URL, you cannot find it on search engines * `Draft` - The form is not yet published but visible if you have admin rights * `Disabled` - The form is disabled and can be reenabled by changing state to public or private

try {
    $result = $apiInstance->organizationsOrganizationSlugFormTypesGet($organization_slug, $states);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormulairesApi->organizationsOrganizationSlugFormTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**| The organization Slug | |
| **states** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormState[]**](../Model/\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormState.md)| List of Form States to filter with. If none specified, it won&#39;t filter results.  Available values: * &#x60;Public&#x60; - The form is publicly visible and findable on search engines * &#x60;Private&#x60; - The form is visible only with the URL, you cannot find it on search engines * &#x60;Draft&#x60; - The form is not yet published but visible if you have admin rights * &#x60;Disabled&#x60; - The form is disabled and can be reenabled by changing state to public or private | [optional] |

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType[]**](../Model/HelloAssoApiV5ModelsEnumsFormType.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationsOrganizationSlugFormsFormTypeActionQuickCreatePost()`

```php
organizationsOrganizationSlugFormsFormTypeActionQuickCreatePost($organization_slug, $form_type, $hello_asso_api_v5_models_forms_form_quick_create_request): \OpenAPI\Client\Model\HelloAssoApiV5ModelsFormsFormQuickCreateModel
```

Créer un événement simplifié pour un organisme

Permet la création d'un événement avec seulement des informations limitées et quelques tarifications simples. L'événement créé de cette manière peut être modifié ultérieurement avec d'autres services<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> FormAdministration<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FormulairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string | The organization Slug
$form_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType | The form type to create - only Event type is supported
$hello_asso_api_v5_models_forms_form_quick_create_request = new \OpenAPI\Client\Model\HelloAssoApiV5ModelsFormsFormQuickCreateRequest(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsFormsFormQuickCreateRequest | The body of the request.

try {
    $result = $apiInstance->organizationsOrganizationSlugFormsFormTypeActionQuickCreatePost($organization_slug, $form_type, $hello_asso_api_v5_models_forms_form_quick_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormulairesApi->organizationsOrganizationSlugFormsFormTypeActionQuickCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**| The organization Slug | |
| **form_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType**](../Model/.md)| The form type to create - only Event type is supported | |
| **hello_asso_api_v5_models_forms_form_quick_create_request** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsFormsFormQuickCreateRequest**](../Model/HelloAssoApiV5ModelsFormsFormQuickCreateRequest.md)| The body of the request. | [optional] |

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsFormsFormQuickCreateModel**](../Model/HelloAssoApiV5ModelsFormsFormQuickCreateModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationsOrganizationSlugFormsFormTypeFormSlugPublicGet()`

```php
organizationsOrganizationSlugFormsFormTypeFormSlugPublicGet($organization_slug, $form_type, $form_slug): \OpenAPI\Client\Model\HelloAssoApiV5ModelsFormsFormPublicModel
```

Obtenir des données publiques détaillées sur un formulaire

Permet de récupérer toutes les informations publiques d'un formulaire, qu'il s'agisse de Crowdfunding, d'Adhésion, d'Événement, de Don...<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessPublicData<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FormulairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string
$form_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType
$form_slug = 'form_slug_example'; // string

try {
    $result = $apiInstance->organizationsOrganizationSlugFormsFormTypeFormSlugPublicGet($organization_slug, $form_type, $form_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormulairesApi->organizationsOrganizationSlugFormsFormTypeFormSlugPublicGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**|  | |
| **form_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType**](../Model/.md)|  | |
| **form_slug** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsFormsFormPublicModel**](../Model/HelloAssoApiV5ModelsFormsFormPublicModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationsOrganizationSlugFormsGet()`

```php
organizationsOrganizationSlugFormsGet($organization_slug, $states, $form_types, $page_index, $page_size, $continuation_token): \OpenAPI\Client\Model\ResultsWithPaginationModelFormLightModel
```

Obtenir les formulaires d'une organisation

Liste tous les formulaires correspondant aux états et types. Si aucun filtre n'est spécifié, aucun filtre n'est appliqué. Les résultats sont classés par date de création en ordre décroissant.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessPublicData<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FormulairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string | The organization Slug
$states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormState()); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormState[] | States to filter  Available values: * `Public` - The form is publicly visible and findable on search engines * `Private` - The form is visible only with the URL, you cannot find it on search engines * `Draft` - The form is not yet published but visible if you have admin rights * `Disabled` - The form is disabled and can be reenabled by changing state to public or private
$form_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType()); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType[] | Types to filter
$page_index = 1; // int | The page of results to retrieve
$page_size = 20; // int | The number of items per page
$continuation_token = 'continuation_token_example'; // string | Continuation Token from which we wish to retrieve results

try {
    $result = $apiInstance->organizationsOrganizationSlugFormsGet($organization_slug, $states, $form_types, $page_index, $page_size, $continuation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormulairesApi->organizationsOrganizationSlugFormsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**| The organization Slug | |
| **states** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormState[]**](../Model/\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormState.md)| States to filter  Available values: * &#x60;Public&#x60; - The form is publicly visible and findable on search engines * &#x60;Private&#x60; - The form is visible only with the URL, you cannot find it on search engines * &#x60;Draft&#x60; - The form is not yet published but visible if you have admin rights * &#x60;Disabled&#x60; - The form is disabled and can be reenabled by changing state to public or private | [optional] |
| **form_types** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType[]**](../Model/\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType.md)| Types to filter | [optional] |
| **page_index** | **int**| The page of results to retrieve | [optional] [default to 1] |
| **page_size** | **int**| The number of items per page | [optional] [default to 20] |
| **continuation_token** | **string**| Continuation Token from which we wish to retrieve results | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResultsWithPaginationModelFormLightModel**](../Model/ResultsWithPaginationModelFormLightModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
