# helloasso-php

The HelloAsso PHP library offers a straightforward way to interact with the HelloAsso API in PHP applications. It features a collection of pre-built classes for API resources that automatically adapt to API responses, ensuring flexibility across different versions of the HelloAsso API.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

You can install the bindings via Composer. Run the following command:

```
composer require helloasso/helloasso-php
```

To use the bindings, use Composer's autoload:

```
require_once 'vendor/autoload.php';
```

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/helloasso-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.helloasso.com/v5*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AnnuaireApi* | [**directoryFormsPost**](docs/Api/AnnuaireApi.md#directoryformspost) | **POST** /directory/forms | Récupérer les formulaires
*AnnuaireApi* | [**directoryOrganizationsPost**](docs/Api/AnnuaireApi.md#directoryorganizationspost) | **POST** /directory/organizations | Récupérer les organisations
*CheckoutApi* | [**organizationsOrganizationSlugCheckoutIntentsCheckoutIntentIdGet**](docs/Api/CheckoutApi.md#organizationsorganizationslugcheckoutintentscheckoutintentidget) | **GET** /organizations/{organizationSlug}/checkout-intents/{checkoutIntentId} | Récupérer une intention de paiement
*CheckoutApi* | [**organizationsOrganizationSlugCheckoutIntentsPost**](docs/Api/CheckoutApi.md#organizationsorganizationslugcheckoutintentspost) | **POST** /organizations/{organizationSlug}/checkout-intents | Initialisation d&#39;un Checkout
*CommandesApi* | [**itemsItemIdGet**](docs/Api/CommandesApi.md#itemsitemidget) | **GET** /items/{itemId} | Obtenir le détail d&#39;un article contenu dans une commande
*CommandesApi* | [**ordersOrderIdCancelPost**](docs/Api/CommandesApi.md#ordersorderidcancelpost) | **POST** /orders/{orderId}/cancel | Annuler les paiements futurs pour une commande (pas de remboursement).
*CommandesApi* | [**ordersOrderIdGet**](docs/Api/CommandesApi.md#ordersorderidget) | **GET** /orders/{orderId} | Obtenir des informations détaillées sur une commande
*CommandesApi* | [**organizationsOrganizationSlugFormsFormTypeFormSlugItemsGet**](docs/Api/CommandesApi.md#organizationsorganizationslugformsformtypeformslugitemsget) | **GET** /organizations/{organizationSlug}/forms/{formType}/{formSlug}/items | Obtenir une liste d&#39;articles vendus dans un formulaire
*CommandesApi* | [**organizationsOrganizationSlugFormsFormTypeFormSlugOrdersGet**](docs/Api/CommandesApi.md#organizationsorganizationslugformsformtypeformslugordersget) | **GET** /organizations/{organizationSlug}/forms/{formType}/{formSlug}/orders | Obtenir les commandes d&#39;un formulaire
*CommandesApi* | [**organizationsOrganizationSlugItemsGet**](docs/Api/CommandesApi.md#organizationsorganizationslugitemsget) | **GET** /organizations/{organizationSlug}/items | Obtenir une liste d&#39;articles vendus par une organisation
*CommandesApi* | [**organizationsOrganizationSlugOrdersGet**](docs/Api/CommandesApi.md#organizationsorganizationslugordersget) | **GET** /organizations/{organizationSlug}/orders | Obtenir les commandes d&#39;une organisation
*FormulairesApi* | [**organizationsOrganizationSlugFormTypesGet**](docs/Api/FormulairesApi.md#organizationsorganizationslugformtypesget) | **GET** /organizations/{organizationSlug}/formTypes | Obtenir une liste des types de formulaires pour une organisation
*FormulairesApi* | [**organizationsOrganizationSlugFormsFormTypeActionQuickCreatePost**](docs/Api/FormulairesApi.md#organizationsorganizationslugformsformtypeactionquickcreatepost) | **POST** /organizations/{organizationSlug}/forms/{formType}/action/quick-create | Créer un événement simplifié pour un organisme
*FormulairesApi* | [**organizationsOrganizationSlugFormsFormTypeFormSlugPublicGet**](docs/Api/FormulairesApi.md#organizationsorganizationslugformsformtypeformslugpublicget) | **GET** /organizations/{organizationSlug}/forms/{formType}/{formSlug}/public | Obtenir des données publiques détaillées sur un formulaire
*FormulairesApi* | [**organizationsOrganizationSlugFormsGet**](docs/Api/FormulairesApi.md#organizationsorganizationslugformsget) | **GET** /organizations/{organizationSlug}/forms | Obtenir les formulaires d&#39;une organisation
*ListeDeValeursApi* | [**valuesCompanyLegalStatusGet**](docs/Api/ListeDeValeursApi.md#valuescompanylegalstatusget) | **GET** /values/company-legal-status | Obtenir la liste des statuts juridiques
*ListeDeValeursApi* | [**valuesOrganizationCategoriesGet**](docs/Api/ListeDeValeursApi.md#valuesorganizationcategoriesget) | **GET** /values/organization/categories | Obtenir la liste des catégories du JO
*ListeDeValeursApi* | [**valuesTagsGet**](docs/Api/ListeDeValeursApi.md#valuestagsget) | **GET** /values/tags | Obtenir la liste des tags publiques
*OrganisationApi* | [**organizationsLegalInformationsLegalStructuresGet**](docs/Api/OrganisationApi.md#organizationslegalinformationslegalstructuresget) | **GET** /organizations/legal-informations/legal-structures | Obtenir la structure juridique d&#39;une organisation visible.
*OrganisationApi* | [**organizationsLegalInformationsOrganizationSlugConfigurationGet**](docs/Api/OrganisationApi.md#organizationslegalinformationsorganizationslugconfigurationget) | **GET** /organizations/legal-informations/{organizationSlug}/configuration | Obtenir la configuration des informations juridiques de l&#39;organisation.
*OrganisationApi* | [**organizationsLegalInformationsOrganizationSlugConfigurationPut**](docs/Api/OrganisationApi.md#organizationslegalinformationsorganizationslugconfigurationput) | **PUT** /organizations/legal-informations/{organizationSlug}/configuration | Mettre à jour la configuration des informations juridiques de l&#39;organisation.
*OrganisationApi* | [**organizationsLegalInformationsTaxInformationTextsGet**](docs/Api/OrganisationApi.md#organizationslegalinformationstaxinformationtextsget) | **GET** /organizations/legal-informations/tax-information-texts | Obtenir les textes d&#39;information fiscale de l&#39;organisation.
*OrganisationApi* | [**organizationsOrganizationSlugGet**](docs/Api/OrganisationApi.md#organizationsorganizationslugget) | **GET** /organizations/{organizationSlug} | Obtenir le détail d&#39;une organisation
*PaiementsApi* | [**organizationsOrganizationSlugFormsFormTypeFormSlugPaymentsGet**](docs/Api/PaiementsApi.md#organizationsorganizationslugformsformtypeformslugpaymentsget) | **GET** /organizations/{organizationSlug}/forms/{formType}/{formSlug}/payments | Obtenir les informations des paiements effectués sur un formulaire
*PaiementsApi* | [**organizationsOrganizationSlugPaymentsGet**](docs/Api/PaiementsApi.md#organizationsorganizationslugpaymentsget) | **GET** /organizations/{organizationSlug}/payments | Obtenir les informations des paiements effectués sur une organisation
*PaiementsApi* | [**organizationsOrganizationSlugPaymentsSearchGet**](docs/Api/PaiementsApi.md#organizationsorganizationslugpaymentssearchget) | **GET** /organizations/{organizationSlug}/payments/search | Rechercher des paiements.
*PaiementsApi* | [**paymentsPaymentIdGet**](docs/Api/PaiementsApi.md#paymentspaymentidget) | **GET** /payments/{paymentId} | Obtenir les informations détaillées d&#39;un paiement.
*PaiementsApi* | [**paymentsPaymentIdRefundPost**](docs/Api/PaiementsApi.md#paymentspaymentidrefundpost) | **POST** /payments/{paymentId}/refund | Rembourser un paiement.
*PartenairesApi* | [**partnersMeApiClientsPut**](docs/Api/PartenairesApi.md#partnersmeapiclientsput) | **PUT** /partners/me/api-clients | Mise à jour du domaine
*PartenairesApi* | [**partnersMeApiNotificationsDelete**](docs/Api/PartenairesApi.md#partnersmeapinotificationsdelete) | **DELETE** /partners/me/api-notifications | Suppression de l&#39;URL de notification principale
*PartenairesApi* | [**partnersMeApiNotificationsOrganizationsOrganizationSlugDelete**](docs/Api/PartenairesApi.md#partnersmeapinotificationsorganizationsorganizationslugdelete) | **DELETE** /partners/me/api-notifications/organizations/{organizationSlug} | Suppression d&#39;une URL de notification liée à une organisation
*PartenairesApi* | [**partnersMeApiNotificationsOrganizationsOrganizationSlugPut**](docs/Api/PartenairesApi.md#partnersmeapinotificationsorganizationsorganizationslugput) | **PUT** /partners/me/api-notifications/organizations/{organizationSlug} | Mise à jour d&#39;une URL de notification liée à une organisation
*PartenairesApi* | [**partnersMeApiNotificationsPut**](docs/Api/PartenairesApi.md#partnersmeapinotificationsput) | **PUT** /partners/me/api-notifications | Mise à jour de l&#39;URL de notification principale
*PartenairesApi* | [**partnersMeGet**](docs/Api/PartenairesApi.md#partnersmeget) | **GET** /partners/me | Récupération des informations
*PartenairesApi* | [**partnersMeOrganizationsGet**](docs/Api/PartenairesApi.md#partnersmeorganizationsget) | **GET** /partners/me/organizations | Obtenir toutes les organisations
*ReusFiscauxApi* | [**organizationsOrganizationSlugTaxReceiptConfigurationGet**](docs/Api/ReusFiscauxApi.md#organizationsorganizationslugtaxreceiptconfigurationget) | **GET** /organizations/{organizationSlug}/tax-receipt/configuration | Obtenir la configuration des reçus fiscaux
*ReusFiscauxApi* | [**organizationsOrganizationSlugTaxReceiptConfigurationPut**](docs/Api/ReusFiscauxApi.md#organizationsorganizationslugtaxreceiptconfigurationput) | **PUT** /organizations/{organizationSlug}/tax-receipt/configuration | Mettre à jour la configuration des reçus fiscaux
*ReusFiscauxApi* | [**organizationsOrganizationSlugTaxReceiptFiscalReceiptTransmitterPut**](docs/Api/ReusFiscauxApi.md#organizationsorganizationslugtaxreceiptfiscalreceipttransmitterput) | **PUT** /organizations/{organizationSlug}/tax-receipt/fiscal-receipt-transmitter | Mettre à jour l&#39;émetteur des reçus fiscaux
*ReusFiscauxApi* | [**organizationsOrganizationSlugTaxReceiptPreviewPost**](docs/Api/ReusFiscauxApi.md#organizationsorganizationslugtaxreceiptpreviewpost) | **POST** /organizations/{organizationSlug}/tax-receipt/preview | Prévisualiser les reçus fiscaux
*TagsApi* | [**tagsTagNameGet**](docs/Api/TagsApi.md#tagstagnameget) | **GET** /tags/{tagName} | Obtenir le détail d&#39;un tag interne
*UtilisateursApi* | [**usersMeOrganizationsGet**](docs/Api/UtilisateursApi.md#usersmeorganizationsget) | **GET** /users/me/organizations | Obtenir mes organisations

## Models

- [HaTrustContractLegalInformationAddressAddressDto](docs/Model/HaTrustContractLegalInformationAddressAddressDto.md)
- [HelloAssoApiV5ModelsAccountCompanyLegalStatusModel](docs/Model/HelloAssoApiV5ModelsAccountCompanyLegalStatusModel.md)
- [HelloAssoApiV5ModelsAccountOrganismCategoryModel](docs/Model/HelloAssoApiV5ModelsAccountOrganismCategoryModel.md)
- [HelloAssoApiV5ModelsAccountsClientsApiClientModel](docs/Model/HelloAssoApiV5ModelsAccountsClientsApiClientModel.md)
- [HelloAssoApiV5ModelsAccountsClientsPublicPutApiClientRequest](docs/Model/HelloAssoApiV5ModelsAccountsClientsPublicPutApiClientRequest.md)
- [HelloAssoApiV5ModelsApiNotificationsApiNotificationType](docs/Model/HelloAssoApiV5ModelsApiNotificationsApiNotificationType.md)
- [HelloAssoApiV5ModelsApiNotificationsApiUrlNotificationModel](docs/Model/HelloAssoApiV5ModelsApiNotificationsApiUrlNotificationModel.md)
- [HelloAssoApiV5ModelsApiNotificationsPostApiUrlNotificationBody](docs/Model/HelloAssoApiV5ModelsApiNotificationsPostApiUrlNotificationBody.md)
- [HelloAssoApiV5ModelsCartsCheckoutIntentResponse](docs/Model/HelloAssoApiV5ModelsCartsCheckoutIntentResponse.md)
- [HelloAssoApiV5ModelsCartsCheckoutPayer](docs/Model/HelloAssoApiV5ModelsCartsCheckoutPayer.md)
- [HelloAssoApiV5ModelsCartsCheckoutTerm](docs/Model/HelloAssoApiV5ModelsCartsCheckoutTerm.md)
- [HelloAssoApiV5ModelsCartsInitCheckoutBody](docs/Model/HelloAssoApiV5ModelsCartsInitCheckoutBody.md)
- [HelloAssoApiV5ModelsCartsInitCheckoutResponse](docs/Model/HelloAssoApiV5ModelsCartsInitCheckoutResponse.md)
- [HelloAssoApiV5ModelsCommonContactModel](docs/Model/HelloAssoApiV5ModelsCommonContactModel.md)
- [HelloAssoApiV5ModelsCommonDocumentModel](docs/Model/HelloAssoApiV5ModelsCommonDocumentModel.md)
- [HelloAssoApiV5ModelsCommonMetaModel](docs/Model/HelloAssoApiV5ModelsCommonMetaModel.md)
- [HelloAssoApiV5ModelsCommonPaginationModel](docs/Model/HelloAssoApiV5ModelsCommonPaginationModel.md)
- [HelloAssoApiV5ModelsCommonPlaceModel](docs/Model/HelloAssoApiV5ModelsCommonPlaceModel.md)
- [HelloAssoApiV5ModelsDirectoryDirectoryOrganizationPublicModel](docs/Model/HelloAssoApiV5ModelsDirectoryDirectoryOrganizationPublicModel.md)
- [HelloAssoApiV5ModelsDirectoryListFormsRequest](docs/Model/HelloAssoApiV5ModelsDirectoryListFormsRequest.md)
- [HelloAssoApiV5ModelsDirectoryListOrganizationsRequest](docs/Model/HelloAssoApiV5ModelsDirectoryListOrganizationsRequest.md)
- [HelloAssoApiV5ModelsDirectoryPartnerOrganizationModel](docs/Model/HelloAssoApiV5ModelsDirectoryPartnerOrganizationModel.md)
- [HelloAssoApiV5ModelsDirectorySynchronizableFormModel](docs/Model/HelloAssoApiV5ModelsDirectorySynchronizableFormModel.md)
- [HelloAssoApiV5ModelsDirectorySynchronizableOrganizationModel](docs/Model/HelloAssoApiV5ModelsDirectorySynchronizableOrganizationModel.md)
- [HelloAssoApiV5ModelsEnumsFieldType](docs/Model/HelloAssoApiV5ModelsEnumsFieldType.md)
- [HelloAssoApiV5ModelsEnumsFormState](docs/Model/HelloAssoApiV5ModelsEnumsFormState.md)
- [HelloAssoApiV5ModelsEnumsFormType](docs/Model/HelloAssoApiV5ModelsEnumsFormType.md)
- [HelloAssoApiV5ModelsEnumsItemState](docs/Model/HelloAssoApiV5ModelsEnumsItemState.md)
- [HelloAssoApiV5ModelsEnumsMembershipValidityType](docs/Model/HelloAssoApiV5ModelsEnumsMembershipValidityType.md)
- [HelloAssoApiV5ModelsEnumsOperationState](docs/Model/HelloAssoApiV5ModelsEnumsOperationState.md)
- [HelloAssoApiV5ModelsEnumsOrganizationType](docs/Model/HelloAssoApiV5ModelsEnumsOrganizationType.md)
- [HelloAssoApiV5ModelsEnumsPaymentCashOutState](docs/Model/HelloAssoApiV5ModelsEnumsPaymentCashOutState.md)
- [HelloAssoApiV5ModelsEnumsPaymentFrequencyType](docs/Model/HelloAssoApiV5ModelsEnumsPaymentFrequencyType.md)
- [HelloAssoApiV5ModelsEnumsPaymentMeans](docs/Model/HelloAssoApiV5ModelsEnumsPaymentMeans.md)
- [HelloAssoApiV5ModelsEnumsPaymentProviderType](docs/Model/HelloAssoApiV5ModelsEnumsPaymentProviderType.md)
- [HelloAssoApiV5ModelsEnumsPaymentState](docs/Model/HelloAssoApiV5ModelsEnumsPaymentState.md)
- [HelloAssoApiV5ModelsEnumsPaymentType](docs/Model/HelloAssoApiV5ModelsEnumsPaymentType.md)
- [HelloAssoApiV5ModelsEnumsPriceCategory](docs/Model/HelloAssoApiV5ModelsEnumsPriceCategory.md)
- [HelloAssoApiV5ModelsEnumsRecordActionType](docs/Model/HelloAssoApiV5ModelsEnumsRecordActionType.md)
- [HelloAssoApiV5ModelsEnumsSortField](docs/Model/HelloAssoApiV5ModelsEnumsSortField.md)
- [HelloAssoApiV5ModelsEnumsSortOrder](docs/Model/HelloAssoApiV5ModelsEnumsSortOrder.md)
- [HelloAssoApiV5ModelsEnumsTagType](docs/Model/HelloAssoApiV5ModelsEnumsTagType.md)
- [HelloAssoApiV5ModelsEnumsTierType](docs/Model/HelloAssoApiV5ModelsEnumsTierType.md)
- [HelloAssoApiV5ModelsFormsFormBasicModel](docs/Model/HelloAssoApiV5ModelsFormsFormBasicModel.md)
- [HelloAssoApiV5ModelsFormsFormLightModel](docs/Model/HelloAssoApiV5ModelsFormsFormLightModel.md)
- [HelloAssoApiV5ModelsFormsFormPublicModel](docs/Model/HelloAssoApiV5ModelsFormsFormPublicModel.md)
- [HelloAssoApiV5ModelsFormsFormQuickCreateModel](docs/Model/HelloAssoApiV5ModelsFormsFormQuickCreateModel.md)
- [HelloAssoApiV5ModelsFormsFormQuickCreateRequest](docs/Model/HelloAssoApiV5ModelsFormsFormQuickCreateRequest.md)
- [HelloAssoApiV5ModelsFormsTermModel](docs/Model/HelloAssoApiV5ModelsFormsTermModel.md)
- [HelloAssoApiV5ModelsFormsTierLightModel](docs/Model/HelloAssoApiV5ModelsFormsTierLightModel.md)
- [HelloAssoApiV5ModelsFormsTierPublicModel](docs/Model/HelloAssoApiV5ModelsFormsTierPublicModel.md)
- [HelloAssoApiV5ModelsOrganizationLegalInformationsOrganizationLegalStructuresModel](docs/Model/HelloAssoApiV5ModelsOrganizationLegalInformationsOrganizationLegalStructuresModel.md)
- [HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationFiscalReceiptTransmitterBody](docs/Model/HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationFiscalReceiptTransmitterBody.md)
- [HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationLegalInformationConfigurationBody](docs/Model/HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationLegalInformationConfigurationBody.md)
- [HelloAssoApiV5ModelsOrganizationOrganizationBasicModel](docs/Model/HelloAssoApiV5ModelsOrganizationOrganizationBasicModel.md)
- [HelloAssoApiV5ModelsOrganizationOrganizationLightModel](docs/Model/HelloAssoApiV5ModelsOrganizationOrganizationLightModel.md)
- [HelloAssoApiV5ModelsOrganizationOrganizationModel](docs/Model/HelloAssoApiV5ModelsOrganizationOrganizationModel.md)
- [HelloAssoApiV5ModelsPartnerStatisticsModel](docs/Model/HelloAssoApiV5ModelsPartnerStatisticsModel.md)
- [HelloAssoApiV5ModelsPartnersPartnerPublicModel](docs/Model/HelloAssoApiV5ModelsPartnersPartnerPublicModel.md)
- [HelloAssoApiV5ModelsPaymentPublicPaymentModel](docs/Model/HelloAssoApiV5ModelsPaymentPublicPaymentModel.md)
- [HelloAssoApiV5ModelsPaymentRefundOperationModel](docs/Model/HelloAssoApiV5ModelsPaymentRefundOperationModel.md)
- [HelloAssoApiV5ModelsStatisticsItem](docs/Model/HelloAssoApiV5ModelsStatisticsItem.md)
- [HelloAssoApiV5ModelsStatisticsItemCustomField](docs/Model/HelloAssoApiV5ModelsStatisticsItemCustomField.md)
- [HelloAssoApiV5ModelsStatisticsItemDetail](docs/Model/HelloAssoApiV5ModelsStatisticsItemDetail.md)
- [HelloAssoApiV5ModelsStatisticsItemDiscount](docs/Model/HelloAssoApiV5ModelsStatisticsItemDiscount.md)
- [HelloAssoApiV5ModelsStatisticsItemOption](docs/Model/HelloAssoApiV5ModelsStatisticsItemOption.md)
- [HelloAssoApiV5ModelsStatisticsItemPayment](docs/Model/HelloAssoApiV5ModelsStatisticsItemPayment.md)
- [HelloAssoApiV5ModelsStatisticsOrder](docs/Model/HelloAssoApiV5ModelsStatisticsOrder.md)
- [HelloAssoApiV5ModelsStatisticsOrderAmountModel](docs/Model/HelloAssoApiV5ModelsStatisticsOrderAmountModel.md)
- [HelloAssoApiV5ModelsStatisticsOrderDetail](docs/Model/HelloAssoApiV5ModelsStatisticsOrderDetail.md)
- [HelloAssoApiV5ModelsStatisticsOrderItem](docs/Model/HelloAssoApiV5ModelsStatisticsOrderItem.md)
- [HelloAssoApiV5ModelsStatisticsOrderLight](docs/Model/HelloAssoApiV5ModelsStatisticsOrderLight.md)
- [HelloAssoApiV5ModelsStatisticsOrderPayment](docs/Model/HelloAssoApiV5ModelsStatisticsOrderPayment.md)
- [HelloAssoApiV5ModelsStatisticsPayer](docs/Model/HelloAssoApiV5ModelsStatisticsPayer.md)
- [HelloAssoApiV5ModelsStatisticsPayment](docs/Model/HelloAssoApiV5ModelsStatisticsPayment.md)
- [HelloAssoApiV5ModelsStatisticsPaymentDetail](docs/Model/HelloAssoApiV5ModelsStatisticsPaymentDetail.md)
- [HelloAssoApiV5ModelsStatisticsPaymentItem](docs/Model/HelloAssoApiV5ModelsStatisticsPaymentItem.md)
- [HelloAssoApiV5ModelsStatisticsRefundOperationLightModel](docs/Model/HelloAssoApiV5ModelsStatisticsRefundOperationLightModel.md)
- [HelloAssoApiV5ModelsStatisticsShareItem](docs/Model/HelloAssoApiV5ModelsStatisticsShareItem.md)
- [HelloAssoApiV5ModelsStatisticsSharePayment](docs/Model/HelloAssoApiV5ModelsStatisticsSharePayment.md)
- [HelloAssoApiV5ModelsStatisticsUser](docs/Model/HelloAssoApiV5ModelsStatisticsUser.md)
- [HelloAssoApiV5ModelsTagsInternalTagModel](docs/Model/HelloAssoApiV5ModelsTagsInternalTagModel.md)
- [HelloAssoApiV5ModelsTagsPublicTagModel](docs/Model/HelloAssoApiV5ModelsTagsPublicTagModel.md)
- [HelloAssoCoreAccountsTaxReceiptsOrganizationFiscalReceiptOptionsConfiguration](docs/Model/HelloAssoCoreAccountsTaxReceiptsOrganizationFiscalReceiptOptionsConfiguration.md)
- [HelloAssoModelsAccountsOrganizationLegalInformationsFiscalReceiptSignatoryModel](docs/Model/HelloAssoModelsAccountsOrganizationLegalInformationsFiscalReceiptSignatoryModel.md)
- [HelloAssoModelsAccountsOrganizationLegalInformationsOrganizationLegalInformationConfiguration](docs/Model/HelloAssoModelsAccountsOrganizationLegalInformationsOrganizationLegalInformationConfiguration.md)
- [HelloAssoModelsAccountsOrganizationLegalInformationsTaxInformationText](docs/Model/HelloAssoModelsAccountsOrganizationLegalInformationsTaxInformationText.md)
- [HelloAssoModelsEnumsGlobalRole](docs/Model/HelloAssoModelsEnumsGlobalRole.md)
- [HelloAssoModelsPaymentsCashInFiscalReceiptFiscalReceiptFormatOption](docs/Model/HelloAssoModelsPaymentsCashInFiscalReceiptFiscalReceiptFormatOption.md)
- [HelloAssoModelsSharedGeoLocation](docs/Model/HelloAssoModelsSharedGeoLocation.md)
- [ResultsWithPaginationModelFormLightModel](docs/Model/ResultsWithPaginationModelFormLightModel.md)
- [ResultsWithPaginationModelItem](docs/Model/ResultsWithPaginationModelItem.md)
- [ResultsWithPaginationModelOrder](docs/Model/ResultsWithPaginationModelOrder.md)
- [ResultsWithPaginationModelPartnerOrganizationModel](docs/Model/ResultsWithPaginationModelPartnerOrganizationModel.md)
- [ResultsWithPaginationModelPayment](docs/Model/ResultsWithPaginationModelPayment.md)
- [ResultsWithPaginationModelPublicPaymentModel](docs/Model/ResultsWithPaginationModelPublicPaymentModel.md)
- [ResultsWithPaginationModelSynchronizableFormModel](docs/Model/ResultsWithPaginationModelSynchronizableFormModel.md)
- [ResultsWithPaginationModelSynchronizableOrganizationModel](docs/Model/ResultsWithPaginationModelSynchronizableOrganizationModel.md)

## Authorization

We use OAuth2 for authentication, so to avoid reinventing the wheel, we recommend using the [league/oauth2-client](https://packagist.org/packages/league/oauth2-client) package

### Prerequisite
Install the league/oauth2-client package:

```bash
composer require league/oauth2-client
```

### Client Credentials Flow
```php
require 'vendor/autoload.php';

use League\OAuth2\Client\Provider\GenericProvider;

$provider = new GenericProvider([
    'clientId'                => 'your_client_id',
    'clientSecret'            => 'your_client_secret',
    'urlAccessToken'          => 'https://api.helloasso.com/oauth2/token',
    'urlAuthorize'            => '',
    'urlResourceOwnerDetails' => ''
]);

try {
    // Get access token using client credentials
    $accessToken = $provider->getAccessToken('client_credentials');

    echo 'Access Token: ' . $accessToken->getToken();
    echo 'Expires in: ' . $accessToken->getExpires();
    echo 'Refresh Token: ' . $accessToken->getRefreshToken();
} catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
    echo 'Error: ' . $e->getMessage();
}
```

### Refresh Token Flow
```php
require 'vendor/autoload.php';

use League\OAuth2\Client\Provider\GenericProvider;

$provider = new GenericProvider([
    'clientId'                => 'your_client_id',
    'clientSecret'            => 'your_client_secret',
    'urlAccessToken'          => 'https://api.helloasso.com/oauth2/token',
    'urlAuthorize'            => '',
    'urlResourceOwnerDetails' => ''
]);

$refreshToken = 'your_refresh_token';

try {
    // Refresh the access token
    $newAccessToken = $provider->getAccessToken('refresh_token', [
        'refresh_token' => $refreshToken,
    ]);

    echo 'New Access Token: ' . $newAccessToken->getToken();
    echo 'Expires in: ' . $newAccessToken->getExpires();
    echo 'New Refresh Token: ' . $accessToken->getRefreshToken();
} catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
    echo 'Error: ' . $e->getMessage();
}
```

### Authorization Code Flow
```php
require 'vendor/autoload.php';

use League\OAuth2\Client\Provider\GenericProvider;

$provider = new GenericProvider([
    'clientId'                => 'your_client_id',
    'clientSecret'            => 'your_client_secret',
    'redirectUri'             => 'https://your-app.com/callback',
    'urlAuthorize'            => 'https://auth.helloasso.com/authorize',
    'urlAccessToken'          => 'https://api.helloasso.com/oauth2/token',
    'urlResourceOwnerDetails' => ''
]);

// Function to generate a random code verifier
function generateCodeVerifier() {
    return bin2hex(random_bytes(32));
}

// Function to generate a code challenge from the code verifier
function generateCodeChallenge($codeVerifier) {
    return rtrim(strtr(base64_encode(hash('sha256', $codeVerifier, true)), '+/', '-_'), '=');
}

// Step 1: Generate the authorization URL
function GetAuthorizationUrl($provider) {
    $codeVerifier = generateCodeVerifier();
    $codeChallenge = generateCodeChallenge($codeVerifier);

    $authorizationUrl = $provider->getAuthorizationUrl([
        'state' => 'random_state_string',
        'code_challenge' => $codeChallenge,
        'code_challenge_method' => 'S256',
    ]);

    echo 'Authorization URL: ' . $authorizationUrl . "\n";
    echo 'Code verifier: ' . $codeVerifier . "\n";
}

// Step 2: Handle the callback and exchange the authorization code for an access token
function GetAccessTokenFromCode($provider, $authorizationCode, $codeVerifier) {
    try {
        // Get access token
        $accessToken = $provider->getAccessToken('authorization_code', [
            'code' => $authorizationCode,
            'code_verifier' => $codeVerifier
        ]);

        echo 'Access Token: ' . $accessToken->getToken() . "\n";
        echo 'Expires in: ' . $accessToken->getExpires() . "\n";
        echo 'New Refresh Token: ' . $accessToken->getRefreshToken() . "\n";
    } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

GetAuthorizationUrl($provider);
// After user authorizes, exchange the code (passed in the redirect URL callback)
//GetAccessTokenFromCode($provider, 'your_authorization_code', 'your_code_verifier');
```


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `public`
    - Generator version: `7.10.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
