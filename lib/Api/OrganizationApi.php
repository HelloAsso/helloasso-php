<?php
/**
 * OrganizationApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * HelloAsso API
 *
 * HelloAsso auto-generated SDK
 *
 * The version of the OpenAPI document: public
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * OrganizationApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrganizationApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'organizationsLegalInformationsOrganizationSlugConfigurationPut' => [
            'application/json-patch+json',
            'application/json',
            'text/json',
            'application/*+json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation organizationsLegalInformationsOrganizationSlugConfigurationPut
     *
     * Mettre à jour la configuration des informations juridiques de l&#39;organisation.
     *
     * @param  string $organization_slug organization_slug (required)
     * @param  \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationLegalInformationConfigurationBody|null $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['organizationsLegalInformationsOrganizationSlugConfigurationPut'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function organizationsLegalInformationsOrganizationSlugConfigurationPut($organization_slug, $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body = null, string $contentType = self::contentTypes['organizationsLegalInformationsOrganizationSlugConfigurationPut'][0])
    {
        $this->organizationsLegalInformationsOrganizationSlugConfigurationPutWithHttpInfo($organization_slug, $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body, $contentType);
    }

    /**
     * Operation organizationsLegalInformationsOrganizationSlugConfigurationPutWithHttpInfo
     *
     * Mettre à jour la configuration des informations juridiques de l&#39;organisation.
     *
     * @param  string $organization_slug (required)
     * @param  \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationLegalInformationConfigurationBody|null $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['organizationsLegalInformationsOrganizationSlugConfigurationPut'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function organizationsLegalInformationsOrganizationSlugConfigurationPutWithHttpInfo($organization_slug, $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body = null, string $contentType = self::contentTypes['organizationsLegalInformationsOrganizationSlugConfigurationPut'][0])
    {
        $request = $this->organizationsLegalInformationsOrganizationSlugConfigurationPutRequest($organization_slug, $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation organizationsLegalInformationsOrganizationSlugConfigurationPutAsync
     *
     * Mettre à jour la configuration des informations juridiques de l&#39;organisation.
     *
     * @param  string $organization_slug (required)
     * @param  \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationLegalInformationConfigurationBody|null $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['organizationsLegalInformationsOrganizationSlugConfigurationPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function organizationsLegalInformationsOrganizationSlugConfigurationPutAsync($organization_slug, $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body = null, string $contentType = self::contentTypes['organizationsLegalInformationsOrganizationSlugConfigurationPut'][0])
    {
        return $this->organizationsLegalInformationsOrganizationSlugConfigurationPutAsyncWithHttpInfo($organization_slug, $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation organizationsLegalInformationsOrganizationSlugConfigurationPutAsyncWithHttpInfo
     *
     * Mettre à jour la configuration des informations juridiques de l&#39;organisation.
     *
     * @param  string $organization_slug (required)
     * @param  \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationLegalInformationConfigurationBody|null $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['organizationsLegalInformationsOrganizationSlugConfigurationPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function organizationsLegalInformationsOrganizationSlugConfigurationPutAsyncWithHttpInfo($organization_slug, $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body = null, string $contentType = self::contentTypes['organizationsLegalInformationsOrganizationSlugConfigurationPut'][0])
    {
        $returnType = '';
        $request = $this->organizationsLegalInformationsOrganizationSlugConfigurationPutRequest($organization_slug, $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'organizationsLegalInformationsOrganizationSlugConfigurationPut'
     *
     * @param  string $organization_slug (required)
     * @param  \OpenAPI\Client\Model\HelloAssoApiV5ModelsOrganizationLegalInformationsUpdateOrganizationLegalInformationConfigurationBody|null $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['organizationsLegalInformationsOrganizationSlugConfigurationPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function organizationsLegalInformationsOrganizationSlugConfigurationPutRequest($organization_slug, $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body = null, string $contentType = self::contentTypes['organizationsLegalInformationsOrganizationSlugConfigurationPut'][0])
    {

        // verify the required parameter 'organization_slug' is set
        if ($organization_slug === null || (is_array($organization_slug) && count($organization_slug) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_slug when calling organizationsLegalInformationsOrganizationSlugConfigurationPut'
            );
        }



        $resourcePath = '/organizations/legal-informations/{organizationSlug}/configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($organization_slug !== null) {
            $resourcePath = str_replace(
                '{' . 'organizationSlug' . '}',
                ObjectSerializer::toPathValue($organization_slug),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body));
            } else {
                $httpBody = $hello_asso_api_v5_models_organization_legal_informations_update_organization_legal_information_configuration_body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
