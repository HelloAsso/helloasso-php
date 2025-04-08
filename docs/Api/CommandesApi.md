# OpenAPI\Client\CommandesApi

All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**itemsItemIdGet()**](CommandesApi.md#itemsItemIdGet) | **GET** /items/{itemId} | Obtenir le détail d&#39;un article contenu dans une commande |
| [**ordersOrderIdCancelPost()**](CommandesApi.md#ordersOrderIdCancelPost) | **POST** /orders/{orderId}/cancel | Annuler les paiements futurs pour une commande (pas de remboursement). |
| [**ordersOrderIdGet()**](CommandesApi.md#ordersOrderIdGet) | **GET** /orders/{orderId} | Obtenir des informations détaillées sur une commande |
| [**organizationsOrganizationSlugFormsFormTypeFormSlugItemsGet()**](CommandesApi.md#organizationsOrganizationSlugFormsFormTypeFormSlugItemsGet) | **GET** /organizations/{organizationSlug}/forms/{formType}/{formSlug}/items | Obtenir une liste d&#39;articles vendus dans un formulaire |
| [**organizationsOrganizationSlugFormsFormTypeFormSlugOrdersGet()**](CommandesApi.md#organizationsOrganizationSlugFormsFormTypeFormSlugOrdersGet) | **GET** /organizations/{organizationSlug}/forms/{formType}/{formSlug}/orders | Obtenir les commandes d&#39;un formulaire |
| [**organizationsOrganizationSlugItemsGet()**](CommandesApi.md#organizationsOrganizationSlugItemsGet) | **GET** /organizations/{organizationSlug}/items | Obtenir une liste d&#39;articles vendus par une organisation |
| [**organizationsOrganizationSlugOrdersGet()**](CommandesApi.md#organizationsOrganizationSlugOrdersGet) | **GET** /organizations/{organizationSlug}/orders | Obtenir les commandes d&#39;une organisation |


## `itemsItemIdGet()`

```php
itemsItemIdGet($item_id, $with_details): \OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsItemDetail
```

Obtenir le détail d'un article contenu dans une commande

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>FormAdmin<br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessTransactions<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommandesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The item ID
$with_details = false; // bool | Set to true to return CustomFields and Options

try {
    $result = $apiInstance->itemsItemIdGet($item_id, $with_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandesApi->itemsItemIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**| The item ID | |
| **with_details** | **bool**| Set to true to return CustomFields and Options | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsItemDetail**](../Model/HelloAssoApiV5ModelsStatisticsItemDetail.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersOrderIdCancelPost()`

```php
ordersOrderIdCancelPost($order_id)
```

Annuler les paiements futurs pour une commande (pas de remboursement).

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>OrganizationAdmin<br/>FormAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> RefundManagement<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommandesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The order identifier.

try {
    $apiInstance->ordersOrderIdCancelPost($order_id);
} catch (Exception $e) {
    echo 'Exception when calling CommandesApi->ordersOrderIdCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The order identifier. | |

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

## `ordersOrderIdGet()`

```php
ordersOrderIdGet($order_id): \OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsOrderDetail
```

Obtenir des informations détaillées sur une commande

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>FormAdmin<br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessTransactions<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommandesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int

try {
    $result = $apiInstance->ordersOrderIdGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandesApi->ordersOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsOrderDetail**](../Model/HelloAssoApiV5ModelsStatisticsOrderDetail.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationsOrganizationSlugFormsFormTypeFormSlugItemsGet()`

```php
organizationsOrganizationSlugFormsFormTypeFormSlugItemsGet($organization_slug, $form_slug, $form_type, $from, $to, $user_search_key, $page_index, $page_size, $continuation_token, $tier_types, $item_states, $tier_name, $with_details, $sort_order, $sort_field, $with_count)
```

Obtenir une liste d'articles vendus dans un formulaire

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>FormAdmin<br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessTransactions<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommandesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string | The organization slug
$form_slug = 'form_slug_example'; // string | The form slug
$form_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType | The form type CrowdFunding, Membership, Event, Donation, PaymentForm, Checkout, Shop
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First Date Filter
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End Date Filter (exclusive)
$user_search_key = 'user_search_key_example'; // string | Filter results on user or payer first name, last name or email
$page_index = 1; // int | The page of results to retrieve
$page_size = 20; // int | The number of items per page
$continuation_token = 'continuation_token_example'; // string | Continuation Token from which we wish to retrieve results
$tier_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsTierType()); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsTierType[] | The type of tiers
$item_states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsItemState()); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsItemState[] | The item states  Available values: * `Processed` - The item is paid and is valid * `Registered` - The item has been registered manually by the organization and is valid * `Unknown` * `Canceled` - The item has been canceled, and is no longer valid
$tier_name = 'tier_name_example'; // string | The name of a tier
$with_details = false; // bool | Set to true to return CustomFields and Options
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder | Sort forms items by ascending or descending order. Default is descending
$sort_field = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortField(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortField | Sort forms items by a specific field (Date or UpdateDate). Default is date
$with_count = false; // bool | Whether the pagination should include totalCount and totalPages.

try {
    $apiInstance->organizationsOrganizationSlugFormsFormTypeFormSlugItemsGet($organization_slug, $form_slug, $form_type, $from, $to, $user_search_key, $page_index, $page_size, $continuation_token, $tier_types, $item_states, $tier_name, $with_details, $sort_order, $sort_field, $with_count);
} catch (Exception $e) {
    echo 'Exception when calling CommandesApi->organizationsOrganizationSlugFormsFormTypeFormSlugItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**| The organization slug | |
| **form_slug** | **string**| The form slug | |
| **form_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType**](../Model/.md)| The form type CrowdFunding, Membership, Event, Donation, PaymentForm, Checkout, Shop | |
| **from** | **\DateTime**| First Date Filter | [optional] |
| **to** | **\DateTime**| End Date Filter (exclusive) | [optional] |
| **user_search_key** | **string**| Filter results on user or payer first name, last name or email | [optional] |
| **page_index** | **int**| The page of results to retrieve | [optional] [default to 1] |
| **page_size** | **int**| The number of items per page | [optional] [default to 20] |
| **continuation_token** | **string**| Continuation Token from which we wish to retrieve results | [optional] |
| **tier_types** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsTierType[]**](../Model/\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsTierType.md)| The type of tiers | [optional] |
| **item_states** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsItemState[]**](../Model/\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsItemState.md)| The item states  Available values: * &#x60;Processed&#x60; - The item is paid and is valid * &#x60;Registered&#x60; - The item has been registered manually by the organization and is valid * &#x60;Unknown&#x60; * &#x60;Canceled&#x60; - The item has been canceled, and is no longer valid | [optional] |
| **tier_name** | **string**| The name of a tier | [optional] |
| **with_details** | **bool**| Set to true to return CustomFields and Options | [optional] [default to false] |
| **sort_order** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder**](../Model/.md)| Sort forms items by ascending or descending order. Default is descending | [optional] |
| **sort_field** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortField**](../Model/.md)| Sort forms items by a specific field (Date or UpdateDate). Default is date | [optional] |
| **with_count** | **bool**| Whether the pagination should include totalCount and totalPages. | [optional] [default to false] |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationsOrganizationSlugFormsFormTypeFormSlugOrdersGet()`

```php
organizationsOrganizationSlugFormsFormTypeFormSlugOrdersGet($organization_slug, $form_slug, $form_type, $from, $to, $user_search_key, $page_index, $page_size, $continuation_token, $with_details, $sort_order, $with_count): \OpenAPI\Client\Model\ResultsWithPaginationModelOrder
```

Obtenir les commandes d'un formulaire

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>FormAdmin<br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessTransactions<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommandesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string | The organization slug
$form_slug = 'form_slug_example'; // string | The form slug
$form_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType | The form type CrowdFunding, Membership, Event, Donation, PaymentForm, Checkout, Shop
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First Date Filter
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End Date Filter (exclusive)
$user_search_key = 'user_search_key_example'; // string | Filter results on user or payer first name, last name or email
$page_index = 1; // int | The page of results to retrieve
$page_size = 20; // int | The number of items per page
$continuation_token = 'continuation_token_example'; // string | Continuation Token from which we wish to retrieve results
$with_details = false; // bool | Set to true to return CustomFields
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder | Sort forms orders by ascending or descending order. Default is descending
$with_count = false; // bool | Whether the pagination should include totalCount and totalPages.

try {
    $result = $apiInstance->organizationsOrganizationSlugFormsFormTypeFormSlugOrdersGet($organization_slug, $form_slug, $form_type, $from, $to, $user_search_key, $page_index, $page_size, $continuation_token, $with_details, $sort_order, $with_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandesApi->organizationsOrganizationSlugFormsFormTypeFormSlugOrdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**| The organization slug | |
| **form_slug** | **string**| The form slug | |
| **form_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType**](../Model/.md)| The form type CrowdFunding, Membership, Event, Donation, PaymentForm, Checkout, Shop | |
| **from** | **\DateTime**| First Date Filter | [optional] |
| **to** | **\DateTime**| End Date Filter (exclusive) | [optional] |
| **user_search_key** | **string**| Filter results on user or payer first name, last name or email | [optional] |
| **page_index** | **int**| The page of results to retrieve | [optional] [default to 1] |
| **page_size** | **int**| The number of items per page | [optional] [default to 20] |
| **continuation_token** | **string**| Continuation Token from which we wish to retrieve results | [optional] |
| **with_details** | **bool**| Set to true to return CustomFields | [optional] [default to false] |
| **sort_order** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder**](../Model/.md)| Sort forms orders by ascending or descending order. Default is descending | [optional] |
| **with_count** | **bool**| Whether the pagination should include totalCount and totalPages. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ResultsWithPaginationModelOrder**](../Model/ResultsWithPaginationModelOrder.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationsOrganizationSlugItemsGet()`

```php
organizationsOrganizationSlugItemsGet($organization_slug, $from, $to, $user_search_key, $page_index, $page_size, $continuation_token, $tier_types, $item_states, $tier_name, $with_details, $sort_order, $sort_field, $with_count)
```

Obtenir une liste d'articles vendus par une organisation

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessTransactions<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommandesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string | The organization slug
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First Date Filter
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End Date Filter (exclusive)
$user_search_key = 'user_search_key_example'; // string | Filter results on user or payer first name, last name or email
$page_index = 1; // int | The page of results to retrieve
$page_size = 20; // int | The number of items per page
$continuation_token = 'continuation_token_example'; // string | Continuation Token from which we wish to retrieve results
$tier_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsTierType()); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsTierType[] | The type of tiers Donation, Payment, Registration, Membership, MonthlyDonation, MonthlyPayment, OfflineDonation, Contribution, Bonus
$item_states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsItemState()); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsItemState[] | The item states  Available values: * `Processed` - The item is paid and is valid * `Registered` - The item has been registered manually by the organization and is valid * `Unknown` * `Canceled` - The item has been canceled, and is no longer valid
$tier_name = 'tier_name_example'; // string | The name of a tier
$with_details = false; // bool | Set to true to return CustomFields and Options
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder | Sort organizations items by ascending or descending order. Default is descending
$sort_field = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortField(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortField | Sort organizations items by a specific field (Date or UpdateDate). Default is date
$with_count = false; // bool | Whether the pagination should include totalCount and totalPages.

try {
    $apiInstance->organizationsOrganizationSlugItemsGet($organization_slug, $from, $to, $user_search_key, $page_index, $page_size, $continuation_token, $tier_types, $item_states, $tier_name, $with_details, $sort_order, $sort_field, $with_count);
} catch (Exception $e) {
    echo 'Exception when calling CommandesApi->organizationsOrganizationSlugItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**| The organization slug | |
| **from** | **\DateTime**| First Date Filter | [optional] |
| **to** | **\DateTime**| End Date Filter (exclusive) | [optional] |
| **user_search_key** | **string**| Filter results on user or payer first name, last name or email | [optional] |
| **page_index** | **int**| The page of results to retrieve | [optional] [default to 1] |
| **page_size** | **int**| The number of items per page | [optional] [default to 20] |
| **continuation_token** | **string**| Continuation Token from which we wish to retrieve results | [optional] |
| **tier_types** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsTierType[]**](../Model/\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsTierType.md)| The type of tiers Donation, Payment, Registration, Membership, MonthlyDonation, MonthlyPayment, OfflineDonation, Contribution, Bonus | [optional] |
| **item_states** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsItemState[]**](../Model/\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsItemState.md)| The item states  Available values: * &#x60;Processed&#x60; - The item is paid and is valid * &#x60;Registered&#x60; - The item has been registered manually by the organization and is valid * &#x60;Unknown&#x60; * &#x60;Canceled&#x60; - The item has been canceled, and is no longer valid | [optional] |
| **tier_name** | **string**| The name of a tier | [optional] |
| **with_details** | **bool**| Set to true to return CustomFields and Options | [optional] [default to false] |
| **sort_order** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder**](../Model/.md)| Sort organizations items by ascending or descending order. Default is descending | [optional] |
| **sort_field** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortField**](../Model/.md)| Sort organizations items by a specific field (Date or UpdateDate). Default is date | [optional] |
| **with_count** | **bool**| Whether the pagination should include totalCount and totalPages. | [optional] [default to false] |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationsOrganizationSlugOrdersGet()`

```php
organizationsOrganizationSlugOrdersGet($organization_slug, $from, $to, $user_search_key, $page_index, $page_size, $continuation_token, $form_types, $with_details, $sort_order, $with_count): \OpenAPI\Client\Model\ResultsWithPaginationModelOrder
```

Obtenir les commandes d'une organisation

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessTransactions<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommandesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string | The organization slug
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First Date Filter
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End Date Filter (exclusive)
$user_search_key = 'user_search_key_example'; // string | Filter results on user or payer first name, last name or email
$page_index = 1; // int | The page of results to retrieve
$page_size = 20; // int | The number of items per page
$continuation_token = 'continuation_token_example'; // string | Continuation Token from which we wish to retrieve results
$form_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType()); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType[] | The type of the form CrowdFunding, Membership, Event, Donation, PaymentForm, Checkout, Shop
$with_details = false; // bool | Set to true to return CustomFields
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder | Sort organizations orders by ascending or descending order. Default is descending
$with_count = false; // bool | Whether the pagination should include totalCount and totalPages.

try {
    $result = $apiInstance->organizationsOrganizationSlugOrdersGet($organization_slug, $from, $to, $user_search_key, $page_index, $page_size, $continuation_token, $form_types, $with_details, $sort_order, $with_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandesApi->organizationsOrganizationSlugOrdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**| The organization slug | |
| **from** | **\DateTime**| First Date Filter | [optional] |
| **to** | **\DateTime**| End Date Filter (exclusive) | [optional] |
| **user_search_key** | **string**| Filter results on user or payer first name, last name or email | [optional] |
| **page_index** | **int**| The page of results to retrieve | [optional] [default to 1] |
| **page_size** | **int**| The number of items per page | [optional] [default to 20] |
| **continuation_token** | **string**| Continuation Token from which we wish to retrieve results | [optional] |
| **form_types** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType[]**](../Model/\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType.md)| The type of the form CrowdFunding, Membership, Event, Donation, PaymentForm, Checkout, Shop | [optional] |
| **with_details** | **bool**| Set to true to return CustomFields | [optional] [default to false] |
| **sort_order** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder**](../Model/.md)| Sort organizations orders by ascending or descending order. Default is descending | [optional] |
| **with_count** | **bool**| Whether the pagination should include totalCount and totalPages. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ResultsWithPaginationModelOrder**](../Model/ResultsWithPaginationModelOrder.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
