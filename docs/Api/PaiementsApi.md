# OpenAPI\Client\PaiementsApi



All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**organizationsOrganizationSlugFormsFormTypeFormSlugPaymentsGet()**](PaiementsApi.md#organizationsOrganizationSlugFormsFormTypeFormSlugPaymentsGet) | **GET** /organizations/{organizationSlug}/forms/{formType}/{formSlug}/payments | Obtenir les informations des paiements effectués sur un formulaire |
| [**organizationsOrganizationSlugPaymentsGet()**](PaiementsApi.md#organizationsOrganizationSlugPaymentsGet) | **GET** /organizations/{organizationSlug}/payments | Obtenir les informations des paiements effectués sur une organisation |
| [**paymentsPaymentIdGet()**](PaiementsApi.md#paymentsPaymentIdGet) | **GET** /payments/{paymentId} | Obtenir les informations détaillées d&#39;un paiement. |
| [**paymentsPaymentIdRefundPost()**](PaiementsApi.md#paymentsPaymentIdRefundPost) | **POST** /payments/{paymentId}/refund | Rembourser un paiement. |


## `organizationsOrganizationSlugFormsFormTypeFormSlugPaymentsGet()`

```php
organizationsOrganizationSlugFormsFormTypeFormSlugPaymentsGet($organization_slug, $form_slug, $form_type, $from, $to, $user_search_key, $page_index, $page_size, $continuation_token, $states, $sort_order, $sort_field, $with_count)
```

Obtenir les informations des paiements effectués sur un formulaire

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>FormAdmin<br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessTransactions<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaiementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string | The organization slug
$form_slug = 'form_slug_example'; // string | The form slug
$form_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsFormType(); // \OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsFormType | The form type CrowdFunding, Membership, Event, Donation, PaymentForm, Checkout, Shop
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First Date Filter
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End Date Filter (exclusive)
$user_search_key = 'user_search_key_example'; // string | Filter results on user or payer first name, last name or email
$page_index = 1; // int | The page of results to retrieve
$page_size = 20; // int | The number of items per page
$continuation_token = 'continuation_token_example'; // string | Continuation Token from which we wish to retrieve results
$states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsPaymentState()); // \OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsPaymentState[] | Filter results by states of payments  Available values: * `Pending` - A payment scheduled at a later date, not yet processed. * `Authorized` - The payment has been authorized, validated, processed. * `Refused` - The payment has been refused by the bank. * `Unknown` * `Registered` - Represents a payment made offline.             Probably for an item of type * `Refunded` - The payment has been refunded. * `Refunding` - The payment is being refunded. * `Contested` - Payment has been contested by the contributor
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsSortOrder(); // \OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsSortOrder | Sort payments by ascending or descending order. Default is descending
$sort_field = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsSortField(); // \OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsSortField | Sort payments by a specific field (Date or UpdateDate). Default is date
$with_count = false; // bool | Whether the pagination should include totalCount and totalPages.

try {
    $apiInstance->organizationsOrganizationSlugFormsFormTypeFormSlugPaymentsGet($organization_slug, $form_slug, $form_type, $from, $to, $user_search_key, $page_index, $page_size, $continuation_token, $states, $sort_order, $sort_field, $with_count);
} catch (Exception $e) {
    echo 'Exception when calling PaiementsApi->organizationsOrganizationSlugFormsFormTypeFormSlugPaymentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**| The organization slug | |
| **form_slug** | **string**| The form slug | |
| **form_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsFormType**](../Model/.md)| The form type CrowdFunding, Membership, Event, Donation, PaymentForm, Checkout, Shop | |
| **from** | **\DateTime**| First Date Filter | [optional] |
| **to** | **\DateTime**| End Date Filter (exclusive) | [optional] |
| **user_search_key** | **string**| Filter results on user or payer first name, last name or email | [optional] |
| **page_index** | **int**| The page of results to retrieve | [optional] [default to 1] |
| **page_size** | **int**| The number of items per page | [optional] [default to 20] |
| **continuation_token** | **string**| Continuation Token from which we wish to retrieve results | [optional] |
| **states** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsPaymentState[]**](../Model/\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsPaymentState.md)| Filter results by states of payments  Available values: * &#x60;Pending&#x60; - A payment scheduled at a later date, not yet processed. * &#x60;Authorized&#x60; - The payment has been authorized, validated, processed. * &#x60;Refused&#x60; - The payment has been refused by the bank. * &#x60;Unknown&#x60; * &#x60;Registered&#x60; - Represents a payment made offline.             Probably for an item of type * &#x60;Refunded&#x60; - The payment has been refunded. * &#x60;Refunding&#x60; - The payment is being refunded. * &#x60;Contested&#x60; - Payment has been contested by the contributor | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsSortOrder**](../Model/.md)| Sort payments by ascending or descending order. Default is descending | [optional] |
| **sort_field** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsSortField**](../Model/.md)| Sort payments by a specific field (Date or UpdateDate). Default is date | [optional] |
| **with_count** | **bool**| Whether the pagination should include totalCount and totalPages. | [optional] [default to false] |

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

## `organizationsOrganizationSlugPaymentsGet()`

```php
organizationsOrganizationSlugPaymentsGet($organization_slug, $from, $to, $user_search_key, $page_index, $page_size, $continuation_token, $states, $sort_order, $sort_field, $with_count): \OpenAPI\Client\Model\ResultsWithPaginationModelPayment
```

Obtenir les informations des paiements effectués sur une organisation

Retourne la liste des paiements selon les paramètres<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessTransactions<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaiementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = 'organization_slug_example'; // string | The organization Slug
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First Date Filter
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End Date Filter (exclusive)
$user_search_key = 'user_search_key_example'; // string | Filter results on user or payer first name, last name or email
$page_index = 1; // int | The page of results to retrieve
$page_size = 20; // int | The number of items per page
$continuation_token = 'continuation_token_example'; // string | Continuation Token from which we wish to retrieve results
$states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsPaymentState()); // \OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsPaymentState[] | The payment states  Available values: * `Pending` - A payment scheduled at a later date, not yet processed. * `Authorized` - The payment has been authorized, validated, processed. * `Refused` - The payment has been refused by the bank. * `Unknown` * `Registered` - Represents a payment made offline.             Probably for an item of type * `Refunded` - The payment has been refunded. * `Refunding` - The payment is being refunded. * `Contested` - Payment has been contested by the contributor
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsSortOrder(); // \OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsSortOrder | Sort payments by ascending or descending order. Default is descending
$sort_field = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsSortField(); // \OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsSortField | Sort payments by a specific field (Date or UpdateDate). Default is date
$with_count = false; // bool | Whether the pagination should include totalCount and totalPages.

try {
    $result = $apiInstance->organizationsOrganizationSlugPaymentsGet($organization_slug, $from, $to, $user_search_key, $page_index, $page_size, $continuation_token, $states, $sort_order, $sort_field, $with_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaiementsApi->organizationsOrganizationSlugPaymentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**| The organization Slug | |
| **from** | **\DateTime**| First Date Filter | [optional] |
| **to** | **\DateTime**| End Date Filter (exclusive) | [optional] |
| **user_search_key** | **string**| Filter results on user or payer first name, last name or email | [optional] |
| **page_index** | **int**| The page of results to retrieve | [optional] [default to 1] |
| **page_size** | **int**| The number of items per page | [optional] [default to 20] |
| **continuation_token** | **string**| Continuation Token from which we wish to retrieve results | [optional] |
| **states** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsPaymentState[]**](../Model/\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsPaymentState.md)| The payment states  Available values: * &#x60;Pending&#x60; - A payment scheduled at a later date, not yet processed. * &#x60;Authorized&#x60; - The payment has been authorized, validated, processed. * &#x60;Refused&#x60; - The payment has been refused by the bank. * &#x60;Unknown&#x60; * &#x60;Registered&#x60; - Represents a payment made offline.             Probably for an item of type * &#x60;Refunded&#x60; - The payment has been refunded. * &#x60;Refunding&#x60; - The payment is being refunded. * &#x60;Contested&#x60; - Payment has been contested by the contributor | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsSortOrder**](../Model/.md)| Sort payments by ascending or descending order. Default is descending | [optional] |
| **sort_field** | [**\OpenAPI\Client\Model\HelloAssoApiV5CommonModelsEnumsSortField**](../Model/.md)| Sort payments by a specific field (Date or UpdateDate). Default is date | [optional] |
| **with_count** | **bool**| Whether the pagination should include totalCount and totalPages. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ResultsWithPaginationModelPayment**](../Model/ResultsWithPaginationModelPayment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentsPaymentIdGet()`

```php
paymentsPaymentIdGet($payment_id, $with_failed_refund_operation)
```

Obtenir les informations détaillées d'un paiement.

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>FormAdmin<br/>OrganizationAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> AccessTransactions<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaiementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 56; // int | The payment identifier.
$with_failed_refund_operation = false; // bool | True to retrieve the refund operation in the states 'ABORTED', 'CANCELED', 'ERROR', 'REFUSED'.

try {
    $apiInstance->paymentsPaymentIdGet($payment_id, $with_failed_refund_operation);
} catch (Exception $e) {
    echo 'Exception when calling PaiementsApi->paymentsPaymentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **int**| The payment identifier. | |
| **with_failed_refund_operation** | **bool**| True to retrieve the refund operation in the states &#39;ABORTED&#39;, &#39;CANCELED&#39;, &#39;ERROR&#39;, &#39;REFUSED&#39;. | [optional] [default to false] |

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

## `paymentsPaymentIdRefundPost()`

```php
paymentsPaymentIdRefundPost($payment_id, $comment, $cancel_order, $send_refund_mail, $amount)
```

Rembourser un paiement.

<br/><br/><b>Votre token doit avoir l'un de ces rôles : </b><br/>OrganizationAdmin<br/>FormAdmin<br/><br/>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br/>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br/><br/><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br/> RefundManagement<br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaiementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 56; // int | The payment identifier.
$comment = 'comment_example'; // string | The comment about this refund.
$cancel_order = false; // bool | Whether the future payments and linked items of this order must be canceled (possible only if the payment is fully refunded)
$send_refund_mail = true; // bool | Whether a refund mail must be sent or not.
$amount = 0; // int | The amount in cents to refund. Enter this amount only for a partial refund for stripe. If not filled in then the entire payment is refunded

try {
    $apiInstance->paymentsPaymentIdRefundPost($payment_id, $comment, $cancel_order, $send_refund_mail, $amount);
} catch (Exception $e) {
    echo 'Exception when calling PaiementsApi->paymentsPaymentIdRefundPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **int**| The payment identifier. | |
| **comment** | **string**| The comment about this refund. | [optional] |
| **cancel_order** | **bool**| Whether the future payments and linked items of this order must be canceled (possible only if the payment is fully refunded) | [optional] [default to false] |
| **send_refund_mail** | **bool**| Whether a refund mail must be sent or not. | [optional] [default to true] |
| **amount** | **int**| The amount in cents to refund. Enter this amount only for a partial refund for stripe. If not filled in then the entire payment is refunded | [optional] [default to 0] |

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
