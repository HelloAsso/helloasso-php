# OpenAPI\Client\PaiementsApi

All URIs are relative to https://api.helloasso.com/v5, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**organizationsOrganizationSlugFormsFormTypeFormSlugPaymentsGet()**](PaiementsApi.md#organizationsOrganizationSlugFormsFormTypeFormSlugPaymentsGet) | **GET** /organizations/{organizationSlug}/forms/{formType}/{formSlug}/payments | Obtenir les informations des paiements effectués sur un formulaire |
| [**organizationsOrganizationSlugPaymentsGet()**](PaiementsApi.md#organizationsOrganizationSlugPaymentsGet) | **GET** /organizations/{organizationSlug}/payments | Obtenir les informations des paiements effectués sur une organisation |
| [**organizationsOrganizationSlugPaymentsSearchGet()**](PaiementsApi.md#organizationsOrganizationSlugPaymentsSearchGet) | **GET** /organizations/{organizationSlug}/payments/search | Rechercher des paiements. |
| [**paymentsPaymentIdGet()**](PaiementsApi.md#paymentsPaymentIdGet) | **GET** /payments/{paymentId} | Obtenir les informations détaillées d&#39;un paiement. |
| [**paymentsPaymentIdRefundPost()**](PaiementsApi.md#paymentsPaymentIdRefundPost) | **POST** /payments/{paymentId}/refund | Rembourser un paiement. |


## `organizationsOrganizationSlugFormsFormTypeFormSlugPaymentsGet()`

```php
organizationsOrganizationSlugFormsFormTypeFormSlugPaymentsGet($organization_slug, $form_slug, $form_type, $from, $to, $user_search_key, $page_index, $page_size, $continuation_token, $states, $sort_order, $sort_field, $with_count): \OpenAPI\Client\Model\ResultsWithPaginationModelPayment
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
$form_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType | The form type CrowdFunding, Membership, Event, Donation, PaymentForm, Checkout, Shop
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First Date Filter
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End Date Filter (exclusive)
$user_search_key = 'user_search_key_example'; // string | Filter results on user or payer first name, last name or email
$page_index = 1; // int | The page of results to retrieve
$page_size = 20; // int | The number of items per page
$continuation_token = 'continuation_token_example'; // string | Continuation Token from which we wish to retrieve results
$states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState()); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState[] | Filter results by states of payments  Available values: * `Pending` - A payment scheduled at a later date, not yet processed. * `Authorized` - The payment has been authorized, validated, processed. * `Refused` - The payment has been refused by the bank. * `Unknown` * `Registered` - Represents a payment made offline.              Probably for an item of type * `Refunded` - The payment has been refunded. * `Refunding` - The payment is being refunded. * `Contested` - Payment has been contested by the contributor
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder | Sort payments by ascending or descending order. Default is descending
$sort_field = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortField(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortField | Sort payments by a specific field (Date or UpdateDate). Default is date
$with_count = false; // bool | Whether the pagination should include totalCount and totalPages.

try {
    $result = $apiInstance->organizationsOrganizationSlugFormsFormTypeFormSlugPaymentsGet($organization_slug, $form_slug, $form_type, $from, $to, $user_search_key, $page_index, $page_size, $continuation_token, $states, $sort_order, $sort_field, $with_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaiementsApi->organizationsOrganizationSlugFormsFormTypeFormSlugPaymentsGet: ', $e->getMessage(), PHP_EOL;
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
| **states** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState[]**](../Model/\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState.md)| Filter results by states of payments  Available values: * &#x60;Pending&#x60; - A payment scheduled at a later date, not yet processed. * &#x60;Authorized&#x60; - The payment has been authorized, validated, processed. * &#x60;Refused&#x60; - The payment has been refused by the bank. * &#x60;Unknown&#x60; * &#x60;Registered&#x60; - Represents a payment made offline.              Probably for an item of type * &#x60;Refunded&#x60; - The payment has been refunded. * &#x60;Refunding&#x60; - The payment is being refunded. * &#x60;Contested&#x60; - Payment has been contested by the contributor | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder**](../Model/.md)| Sort payments by ascending or descending order. Default is descending | [optional] |
| **sort_field** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortField**](../Model/.md)| Sort payments by a specific field (Date or UpdateDate). Default is date | [optional] |
| **with_count** | **bool**| Whether the pagination should include totalCount and totalPages. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ResultsWithPaginationModelPayment**](../Model/ResultsWithPaginationModelPayment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationsOrganizationSlugPaymentsGet()`

```php
organizationsOrganizationSlugPaymentsGet($organization_slug, $from, $to, $user_search_key, $page_index, $page_size, $continuation_token, $states, $sort_order, $sort_field, $with_count)
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
$states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState()); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState[] | The payment states  Available values: * `Pending` - A payment scheduled at a later date, not yet processed. * `Authorized` - The payment has been authorized, validated, processed. * `Refused` - The payment has been refused by the bank. * `Unknown` * `Registered` - Represents a payment made offline.              Probably for an item of type * `Refunded` - The payment has been refunded. * `Refunding` - The payment is being refunded. * `Contested` - Payment has been contested by the contributor
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder | Sort payments by ascending or descending order. Default is descending
$sort_field = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortField(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortField | Sort payments by a specific field (Date or UpdateDate). Default is date
$with_count = false; // bool | Whether the pagination should include totalCount and totalPages.

try {
    $apiInstance->organizationsOrganizationSlugPaymentsGet($organization_slug, $from, $to, $user_search_key, $page_index, $page_size, $continuation_token, $states, $sort_order, $sort_field, $with_count);
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
| **states** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState[]**](../Model/\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState.md)| The payment states  Available values: * &#x60;Pending&#x60; - A payment scheduled at a later date, not yet processed. * &#x60;Authorized&#x60; - The payment has been authorized, validated, processed. * &#x60;Refused&#x60; - The payment has been refused by the bank. * &#x60;Unknown&#x60; * &#x60;Registered&#x60; - Represents a payment made offline.              Probably for an item of type * &#x60;Refunded&#x60; - The payment has been refunded. * &#x60;Refunding&#x60; - The payment is being refunded. * &#x60;Contested&#x60; - Payment has been contested by the contributor | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder**](../Model/.md)| Sort payments by ascending or descending order. Default is descending | [optional] |
| **sort_field** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortField**](../Model/.md)| Sort payments by a specific field (Date or UpdateDate). Default is date | [optional] |
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

## `organizationsOrganizationSlugPaymentsSearchGet()`

```php
organizationsOrganizationSlugPaymentsSearchGet($organization_slug, $from, $to, $page_size, $continuation_token, $form_types, $form_type, $states, $user_id, $search_key, $amount, $sort_order, $sort_field): \OpenAPI\Client\Model\ResultsWithPaginationModelPublicPaymentModel
```

Rechercher des paiements.

<p>Attention : Le compte total est désactivé, nous retournons la liste des paiements et le continuationToken. </p><p>Recherchez des paiements basés sur de nombreux critères La recherche doit utiliser au moins l'un des paramètres suivants : </p><ul><li>ID de l'organisation : paiements effectués pour cette organisation </li><li>Formulaire : Paiements effectués par ce formulaire en utilisant le couple ID du formulaire et type du formulaire </li><li>ID de l'utilisateur : Paiements effectués par cet utilisateur </li><li>États : Une liste d'états de paiement à filtrer. (si vide, tous les paiements seront retournés)</li><li>Plage de dates : En utilisant du et/ou au </li><li>Requête de recherche : Une liste de mots qui doivent être contenus soit sur les noms des payeurs ou des utilisateurs ou l'email </li><li>Montant du paiement : En centimes, qui doit exactement correspondre au montant des paiements (avec ou sans la contribution) </li></ul><p>L'ordre des résultats est également personnalisable : </p><ul><li>Le champ de tri peut être la date, la date de mise à jour ou la date de création </li><li>L'ordre peut être ascendant ou descendant<br><br><b>Votre token doit avoir l'un de ces rôles : </b><br>OrganizationAdmin<br><br>Si vous êtes une <b>association</b>, vous pouvez obtenir ces rôles avec votre client.<br>Si vous êtes un <b>partenaire</b>, vous pouvez obtenir ces rôles par le flux d'autorisation.<br><br><b>Votre clientId doit être autorisé à tous ces privilèges : </b> <br> AccessTransactions<br><br></li></ul>

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
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First Date Filter
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End Date Filter (exclusive)
$page_size = 20; // int | The number of items to retrieve
$continuation_token = 'continuation_token_example'; // string | Continuation Token from which we wish to retrieve results
$form_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType()); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType[] | The form type CrowdFunding, Membership, Event, Donation, PaymentForm, Checkout, Shop
$form_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType | The form type CrowdFunding, Membership, Event, Donation, PaymentForm, Checkout, Shop. This parameter must be used with the parameter formId.
$states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState()); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState[] | Filter results by states of payments  Available values: * `Pending` - A payment scheduled at a later date, not yet processed. * `Authorized` - The payment has been authorized, validated, processed. * `Refused` - The payment has been refused by the bank. * `Unknown` * `Registered` - Represents a payment made offline.              Probably for an item of type * `Refunded` - The payment has been refunded. * `Refunding` - The payment is being refunded. * `Contested` - Payment has been contested by the contributor
$user_id = 56; // int | The User identifier
$search_key = 'search_key_example'; // string | Filter results on user or payer first name, last name or email.
$amount = 56; // int | Amount of the payment in cents. Filter payments with exact amount with or without the contribution.
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder | Sort payments by ascending or descending order. Default is descending
$sort_field = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortField(); // \OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortField | Sort payments by a specific field (Date or UpdateDate). Default is date

try {
    $result = $apiInstance->organizationsOrganizationSlugPaymentsSearchGet($organization_slug, $from, $to, $page_size, $continuation_token, $form_types, $form_type, $states, $user_id, $search_key, $amount, $sort_order, $sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaiementsApi->organizationsOrganizationSlugPaymentsSearchGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_slug** | **string**| The organization slug | |
| **from** | **\DateTime**| First Date Filter | [optional] |
| **to** | **\DateTime**| End Date Filter (exclusive) | [optional] |
| **page_size** | **int**| The number of items to retrieve | [optional] [default to 20] |
| **continuation_token** | **string**| Continuation Token from which we wish to retrieve results | [optional] |
| **form_types** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType[]**](../Model/\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType.md)| The form type CrowdFunding, Membership, Event, Donation, PaymentForm, Checkout, Shop | [optional] |
| **form_type** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsFormType**](../Model/.md)| The form type CrowdFunding, Membership, Event, Donation, PaymentForm, Checkout, Shop. This parameter must be used with the parameter formId. | [optional] |
| **states** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState[]**](../Model/\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsPaymentState.md)| Filter results by states of payments  Available values: * &#x60;Pending&#x60; - A payment scheduled at a later date, not yet processed. * &#x60;Authorized&#x60; - The payment has been authorized, validated, processed. * &#x60;Refused&#x60; - The payment has been refused by the bank. * &#x60;Unknown&#x60; * &#x60;Registered&#x60; - Represents a payment made offline.              Probably for an item of type * &#x60;Refunded&#x60; - The payment has been refunded. * &#x60;Refunding&#x60; - The payment is being refunded. * &#x60;Contested&#x60; - Payment has been contested by the contributor | [optional] |
| **user_id** | **int**| The User identifier | [optional] |
| **search_key** | **string**| Filter results on user or payer first name, last name or email. | [optional] |
| **amount** | **int**| Amount of the payment in cents. Filter payments with exact amount with or without the contribution. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortOrder**](../Model/.md)| Sort payments by ascending or descending order. Default is descending | [optional] |
| **sort_field** | [**\OpenAPI\Client\Model\HelloAssoApiV5ModelsEnumsSortField**](../Model/.md)| Sort payments by a specific field (Date or UpdateDate). Default is date | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResultsWithPaginationModelPublicPaymentModel**](../Model/ResultsWithPaginationModelPublicPaymentModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentsPaymentIdGet()`

```php
paymentsPaymentIdGet($payment_id, $with_failed_refund_operation): \OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsPaymentDetail
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
    $result = $apiInstance->paymentsPaymentIdGet($payment_id, $with_failed_refund_operation);
    print_r($result);
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

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsStatisticsPaymentDetail**](../Model/HelloAssoApiV5ModelsStatisticsPaymentDetail.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentsPaymentIdRefundPost()`

```php
paymentsPaymentIdRefundPost($payment_id, $comment, $cancel_order, $send_refund_mail, $amount): \OpenAPI\Client\Model\HelloAssoApiV5ModelsPaymentRefundOperationModel
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
    $result = $apiInstance->paymentsPaymentIdRefundPost($payment_id, $comment, $cancel_order, $send_refund_mail, $amount);
    print_r($result);
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

[**\OpenAPI\Client\Model\HelloAssoApiV5ModelsPaymentRefundOperationModel**](../Model/HelloAssoApiV5ModelsPaymentRefundOperationModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
