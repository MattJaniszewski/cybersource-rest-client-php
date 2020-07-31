<?php
/**
 * AsymmetricKeyManagementApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;

/**
 * AsymmetricKeyManagementApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AsymmetricKeyManagementApi
{
    /**
     * API Client
     *
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CyberSource\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CyberSource\ApiClient $apiClient set the API client
     *
     * @return AsymmetricKeyManagementApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createP12Keys
     *
     * Create one or more PKCS#12 keys
     *
     * @param \CyberSource\Model\CreateP12KeysRequest $createP12KeysRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2011, HTTP status code, HTTP response headers (array of strings)
     */
    public function createP12Keys($createP12KeysRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->createP12KeysWithHttpInfo($createP12KeysRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation createP12KeysWithHttpInfo
     *
     * Create one or more PKCS#12 keys
     *
     * @param \CyberSource\Model\CreateP12KeysRequest $createP12KeysRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2011, HTTP status code, HTTP response headers (array of strings)
     */
    public function createP12KeysWithHttpInfo($createP12KeysRequest)
    {
        // verify the required parameter 'createP12KeysRequest' is set
        if ($createP12KeysRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $createP12KeysRequest when calling createP12Keys');
        }
        // parse inputs
        $resourcePath = "/kms/v2/keys-asym";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // body params
        $_tempBody = null;
        if (isset($createP12KeysRequest)) {
            $_tempBody = $createP12KeysRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2011',
                '/kms/v2/keys-asym'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2011', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2011', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4002', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteBulkP12Keys
     *
     * Delete one or more PKCS#12 keys
     *
     * @param \CyberSource\Model\DeleteBulkP12KeysRequest $deleteBulkP12KeysRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2003, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteBulkP12Keys($deleteBulkP12KeysRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteBulkP12KeysWithHttpInfo($deleteBulkP12KeysRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation deleteBulkP12KeysWithHttpInfo
     *
     * Delete one or more PKCS#12 keys
     *
     * @param \CyberSource\Model\DeleteBulkP12KeysRequest $deleteBulkP12KeysRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2003, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteBulkP12KeysWithHttpInfo($deleteBulkP12KeysRequest)
    {
        // verify the required parameter 'deleteBulkP12KeysRequest' is set
        if ($deleteBulkP12KeysRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $deleteBulkP12KeysRequest when calling deleteBulkP12Keys');
        }
        // parse inputs
        $resourcePath = "/kms/v2/keys-asym/deletes";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // body params
        $_tempBody = null;
        if (isset($deleteBulkP12KeysRequest)) {
            $_tempBody = $deleteBulkP12KeysRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2003',
                '/kms/v2/keys-asym/deletes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2003', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2003', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4002', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getP12KeyDetails
     *
     * Retrieves PKCS#12 key details
     *
     * @param string $keyId Key ID. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     */
    public function getP12KeyDetails($keyId)
    {
        list($response, $statusCode, $httpHeader) = $this->getP12KeyDetailsWithHttpInfo($keyId);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getP12KeyDetailsWithHttpInfo
     *
     * Retrieves PKCS#12 key details
     *
     * @param string $keyId Key ID. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     */
    public function getP12KeyDetailsWithHttpInfo($keyId)
    {
        // verify the required parameter 'keyId' is set
        if ($keyId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $keyId when calling getP12KeyDetails');
        }
        // parse inputs
        $resourcePath = "/kms/v2/keys-asym/{keyId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($keyId !== null) {
            $resourcePath = str_replace(
                "{" . "keyId" . "}",
                $this->apiClient->getSerializer()->toPathValue($keyId),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\InlineResponse2002',
                '/kms/v2/keys-asym/{keyId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\InlineResponse2002', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse2002', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4002', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}