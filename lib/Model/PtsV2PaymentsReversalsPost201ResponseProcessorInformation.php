<?php
/**
 * PtsV2PaymentsReversalsPost201ResponseProcessorInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
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

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * PtsV2PaymentsReversalsPost201ResponseProcessorInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsReversalsPost201ResponseProcessorInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsReversalsPost201Response_processorInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transactionId' => 'string',
        'responseCode' => 'string',
        'responseCategoryCode' => 'string',
        'forwardedAcquirerCode' => 'string',
        'masterCardServiceCode' => 'string',
        'masterCardServiceReplyCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transactionId' => null,
        'responseCode' => null,
        'responseCategoryCode' => null,
        'forwardedAcquirerCode' => null,
        'masterCardServiceCode' => null,
        'masterCardServiceReplyCode' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'transactionId' => 'transactionId',
        'responseCode' => 'responseCode',
        'responseCategoryCode' => 'responseCategoryCode',
        'forwardedAcquirerCode' => 'forwardedAcquirerCode',
        'masterCardServiceCode' => 'masterCardServiceCode',
        'masterCardServiceReplyCode' => 'masterCardServiceReplyCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'transactionId' => 'setTransactionId',
        'responseCode' => 'setResponseCode',
        'responseCategoryCode' => 'setResponseCategoryCode',
        'forwardedAcquirerCode' => 'setForwardedAcquirerCode',
        'masterCardServiceCode' => 'setMasterCardServiceCode',
        'masterCardServiceReplyCode' => 'setMasterCardServiceReplyCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'transactionId' => 'getTransactionId',
        'responseCode' => 'getResponseCode',
        'responseCategoryCode' => 'getResponseCategoryCode',
        'forwardedAcquirerCode' => 'getForwardedAcquirerCode',
        'masterCardServiceCode' => 'getMasterCardServiceCode',
        'masterCardServiceReplyCode' => 'getMasterCardServiceReplyCode'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['responseCode'] = isset($data['responseCode']) ? $data['responseCode'] : null;
        $this->container['responseCategoryCode'] = isset($data['responseCategoryCode']) ? $data['responseCategoryCode'] : null;
        $this->container['forwardedAcquirerCode'] = isset($data['forwardedAcquirerCode']) ? $data['forwardedAcquirerCode'] : null;
        $this->container['masterCardServiceCode'] = isset($data['masterCardServiceCode']) ? $data['masterCardServiceCode'] : null;
        $this->container['masterCardServiceReplyCode'] = isset($data['masterCardServiceReplyCode']) ? $data['masterCardServiceReplyCode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['transactionId']) && (strlen($this->container['transactionId']) > 18)) {
            $invalid_properties[] = "invalid value for 'transactionId', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['responseCode']) && (strlen($this->container['responseCode']) > 10)) {
            $invalid_properties[] = "invalid value for 'responseCode', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['responseCategoryCode']) && (strlen($this->container['responseCategoryCode']) > 32)) {
            $invalid_properties[] = "invalid value for 'responseCategoryCode', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['forwardedAcquirerCode']) && (strlen($this->container['forwardedAcquirerCode']) > 32)) {
            $invalid_properties[] = "invalid value for 'forwardedAcquirerCode', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['masterCardServiceCode']) && (strlen($this->container['masterCardServiceCode']) > 2)) {
            $invalid_properties[] = "invalid value for 'masterCardServiceCode', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['masterCardServiceReplyCode']) && (strlen($this->container['masterCardServiceReplyCode']) > 1)) {
            $invalid_properties[] = "invalid value for 'masterCardServiceReplyCode', the character length must be smaller than or equal to 1.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['transactionId']) > 18) {
            return false;
        }
        if (strlen($this->container['responseCode']) > 10) {
            return false;
        }
        if (strlen($this->container['responseCategoryCode']) > 32) {
            return false;
        }
        if (strlen($this->container['forwardedAcquirerCode']) > 32) {
            return false;
        }
        if (strlen($this->container['masterCardServiceCode']) > 2) {
            return false;
        }
        if (strlen($this->container['masterCardServiceReplyCode']) > 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets transactionId
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     * @param string $transactionId Processor transaction ID.  This value identifies the transaction on a host system. This value is supported only for Moneris. It contains this information:   - Terminal used to process the transaction  - Shift during which the transaction took place  - Batch number  - Transaction number within the batch  You must store this value. If you give the customer a receipt, display this value on the receipt.  Example For the value 66012345001069003:   - Terminal ID = 66012345  - Shift number = 001  - Batch number = 069  - Transaction number = 003
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        if (!is_null($transactionId) && (strlen($transactionId) > 18)) {
            throw new \InvalidArgumentException('invalid length for $transactionId when calling PtsV2PaymentsReversalsPost201ResponseProcessorInformation., must be smaller than or equal to 18.');
        }

        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets responseCode
     * @return string
     */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
     * Sets responseCode
     * @param string $responseCode For most processors, this is the error message sent directly from the bank. Returned only when the processor returns this value.  Important Do not use this field to evaluate the result of the authorization.
     * @return $this
     */
    public function setResponseCode($responseCode)
    {
        if (!is_null($responseCode) && (strlen($responseCode) > 10)) {
            throw new \InvalidArgumentException('invalid length for $responseCode when calling PtsV2PaymentsReversalsPost201ResponseProcessorInformation., must be smaller than or equal to 10.');
        }

        $this->container['responseCode'] = $responseCode;

        return $this;
    }

    /**
     * Gets responseCategoryCode
     * @return string
     */
    public function getResponseCategoryCode()
    {
        return $this->container['responseCategoryCode'];
    }

    /**
     * Sets responseCategoryCode
     * @param string $responseCategoryCode Processor-defined response category code. The associated detail error code is in the auth_auth_response field or the auth_reversal_auth_ response field depending on which service you requested.  This field is supported only for:   - Japanese issuers  - Domestic transactions in Japan  - Comercio Latino—processor transaction ID required for troubleshooting  **Maximum length for processors**:   - Comercio Latino: 32  - All other processors: 3
     * @return $this
     */
    public function setResponseCategoryCode($responseCategoryCode)
    {
        if (!is_null($responseCategoryCode) && (strlen($responseCategoryCode) > 32)) {
            throw new \InvalidArgumentException('invalid length for $responseCategoryCode when calling PtsV2PaymentsReversalsPost201ResponseProcessorInformation., must be smaller than or equal to 32.');
        }

        $this->container['responseCategoryCode'] = $responseCategoryCode;

        return $this;
    }

    /**
     * Gets forwardedAcquirerCode
     * @return string
     */
    public function getForwardedAcquirerCode()
    {
        return $this->container['forwardedAcquirerCode'];
    }

    /**
     * Sets forwardedAcquirerCode
     * @param string $forwardedAcquirerCode Name of the Japanese acquirer that processed the transaction. Returned only for CCS (CAFIS) and JCN Gateway. Please contact the CyberSource Japan Support Group for more information.
     * @return $this
     */
    public function setForwardedAcquirerCode($forwardedAcquirerCode)
    {
        if (!is_null($forwardedAcquirerCode) && (strlen($forwardedAcquirerCode) > 32)) {
            throw new \InvalidArgumentException('invalid length for $forwardedAcquirerCode when calling PtsV2PaymentsReversalsPost201ResponseProcessorInformation., must be smaller than or equal to 32.');
        }

        $this->container['forwardedAcquirerCode'] = $forwardedAcquirerCode;

        return $this;
    }

    /**
     * Gets masterCardServiceCode
     * @return string
     */
    public function getMasterCardServiceCode()
    {
        return $this->container['masterCardServiceCode'];
    }

    /**
     * Sets masterCardServiceCode
     * @param string $masterCardServiceCode Mastercard service that was used for the transaction. Mastercard provides this value to CyberSource.  Possible value:  - 53: Mastercard card-on-file token service
     * @return $this
     */
    public function setMasterCardServiceCode($masterCardServiceCode)
    {
        if (!is_null($masterCardServiceCode) && (strlen($masterCardServiceCode) > 2)) {
            throw new \InvalidArgumentException('invalid length for $masterCardServiceCode when calling PtsV2PaymentsReversalsPost201ResponseProcessorInformation., must be smaller than or equal to 2.');
        }

        $this->container['masterCardServiceCode'] = $masterCardServiceCode;

        return $this;
    }

    /**
     * Gets masterCardServiceReplyCode
     * @return string
     */
    public function getMasterCardServiceReplyCode()
    {
        return $this->container['masterCardServiceReplyCode'];
    }

    /**
     * Sets masterCardServiceReplyCode
     * @param string $masterCardServiceReplyCode Result of the Mastercard card-on-file token service. Mastercard provides this value to CyberSource.  Possible values:   - **C**: Service completed successfully.  - **F**: One of the following:    - Incorrect Mastercard POS entry mode. The Mastercard POS entry mode should be 81 for an authorization or      authorization reversal.    - Incorrect Mastercard POS entry mode. The Mastercard POS entry mode should be 01 for a tokenized request.    - Token requestor ID is missing or formatted incorrectly.  - **I**: One of the following:    - Invalid token requestor ID.    - Suspended or deactivated token.    - Invalid token (not in mapping table).  - **T**: Invalid combination of token requestor ID and token.  - **U**: Expired token.  - **W**: Primary account number (PAN) listed in electronic warning bulletin.  Note This field is returned only for **CyberSource through VisaNet**.
     * @return $this
     */
    public function setMasterCardServiceReplyCode($masterCardServiceReplyCode)
    {
        if (!is_null($masterCardServiceReplyCode) && (strlen($masterCardServiceReplyCode) > 1)) {
            throw new \InvalidArgumentException('invalid length for $masterCardServiceReplyCode when calling PtsV2PaymentsReversalsPost201ResponseProcessorInformation., must be smaller than or equal to 1.');
        }

        $this->container['masterCardServiceReplyCode'] = $masterCardServiceReplyCode;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


