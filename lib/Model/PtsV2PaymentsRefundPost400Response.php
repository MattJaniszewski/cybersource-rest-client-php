<?php
/**
 * PtsV2PaymentsRefundPost400Response
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
 * PtsV2PaymentsRefundPost400Response Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsRefundPost400Response implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsRefundPost400Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'submitTimeUtc' => 'string',
        'status' => 'string',
        'reason' => 'string',
        'message' => 'string',
        'details' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseErrorInformationDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'submitTimeUtc' => null,
        'status' => null,
        'reason' => null,
        'message' => null,
        'details' => null
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
        'submitTimeUtc' => 'submitTimeUtc',
        'status' => 'status',
        'reason' => 'reason',
        'message' => 'message',
        'details' => 'details'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'submitTimeUtc' => 'setSubmitTimeUtc',
        'status' => 'setStatus',
        'reason' => 'setReason',
        'message' => 'setMessage',
        'details' => 'setDetails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'submitTimeUtc' => 'getSubmitTimeUtc',
        'status' => 'getStatus',
        'reason' => 'getReason',
        'message' => 'getMessage',
        'details' => 'getDetails'
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

    const STATUS_REQUEST = 'INVALID_REQUEST';
    const REASON_MISSING_FIELD = 'MISSING_FIELD';
    const REASON_INVALID_DATA = 'INVALID_DATA';
    const REASON_DUPLICATE_REQUEST = 'DUPLICATE_REQUEST';
    const REASON_INVALID_CARD = 'INVALID_CARD';
    const REASON_INVALID_MERCHANT_CONFIGURATION = 'INVALID_MERCHANT_CONFIGURATION';
    const REASON_CAPTURE_ALREADY_VOIDED = 'CAPTURE_ALREADY_VOIDED';
    const REASON_ACCOUNT_NOT_ALLOWED_CREDIT = 'ACCOUNT_NOT_ALLOWED_CREDIT';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_REQUEST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_MISSING_FIELD,
            self::REASON_INVALID_DATA,
            self::REASON_DUPLICATE_REQUEST,
            self::REASON_INVALID_CARD,
            self::REASON_INVALID_MERCHANT_CONFIGURATION,
            self::REASON_CAPTURE_ALREADY_VOIDED,
            self::REASON_ACCOUNT_NOT_ALLOWED_CREDIT,
        ];
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
        $this->container['submitTimeUtc'] = isset($data['submitTimeUtc']) ? $data['submitTimeUtc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getReasonAllowableValues();
        if (!in_array($this->container['reason'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'reason', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getReasonAllowableValues();
        if (!in_array($this->container['reason'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets submitTimeUtc
     * @return string
     */
    public function getSubmitTimeUtc()
    {
        return $this->container['submitTimeUtc'];
    }

    /**
     * Sets submitTimeUtc
     * @param string $submitTimeUtc Time of request in UTC. Format: `YYYY-MM-DDThh:mm:ssZ` Example `2016-08-11T22:47:57Z` equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The `T` separates the date and the time. The `Z` indicates UTC.
     * @return $this
     */
    public function setSubmitTimeUtc($submitTimeUtc)
    {
        $this->container['submitTimeUtc'] = $submitTimeUtc;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The status of the submitted transaction.  Possible values:  - INVALID_REQUEST
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason The reason of the status.  Possible values:  - MISSING_FIELD  - INVALID_DATA  - DUPLICATE_REQUEST  - INVALID_CARD  - INVALID_MERCHANT_CONFIGURATION  - INVALID_AMOUNT  - CAPTURE_ALREADY_VOIDED  - ACCOUNT_NOT_ALLOWED_CREDIT
     * @return $this
     */
    public function setReason($reason)
    {
        $allowed_values = $this->getReasonAllowableValues();
        if (!is_null($reason) && !in_array($reason, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message The detail message related to the status and reason listed above.
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets details
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseErrorInformationDetails[]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseErrorInformationDetails[] $details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

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


