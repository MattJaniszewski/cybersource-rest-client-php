<?php
/**
 * InlineResponse2002
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
 * InlineResponse2002 Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2002 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'registrationInformation' => '\CyberSource\Model\Boardingv1registrationsRegistrationInformation',
        'integrationInformation' => '\CyberSource\Model\InlineResponse2002IntegrationInformation',
        'organizationInformation' => '\CyberSource\Model\Boardingv1registrationsOrganizationInformation',
        'productInformation' => '\CyberSource\Model\Boardingv1registrationsProductInformation',
        'productInformationSetups' => '\CyberSource\Model\InlineResponse2011ProductInformationSetups[]',
        'documentInformation' => '\CyberSource\Model\Boardingv1registrationsDocumentInformation',
        'details' => 'map[string,object[]]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'registrationInformation' => null,
        'integrationInformation' => null,
        'organizationInformation' => null,
        'productInformation' => null,
        'productInformationSetups' => null,
        'documentInformation' => null,
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
        'registrationInformation' => 'registrationInformation',
        'integrationInformation' => 'integrationInformation',
        'organizationInformation' => 'organizationInformation',
        'productInformation' => 'productInformation',
        'productInformationSetups' => 'productInformationSetups',
        'documentInformation' => 'documentInformation',
        'details' => 'details'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'registrationInformation' => 'setRegistrationInformation',
        'integrationInformation' => 'setIntegrationInformation',
        'organizationInformation' => 'setOrganizationInformation',
        'productInformation' => 'setProductInformation',
        'productInformationSetups' => 'setProductInformationSetups',
        'documentInformation' => 'setDocumentInformation',
        'details' => 'setDetails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'registrationInformation' => 'getRegistrationInformation',
        'integrationInformation' => 'getIntegrationInformation',
        'organizationInformation' => 'getOrganizationInformation',
        'productInformation' => 'getProductInformation',
        'productInformationSetups' => 'getProductInformationSetups',
        'documentInformation' => 'getDocumentInformation',
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
        $this->container['registrationInformation'] = isset($data['registrationInformation']) ? $data['registrationInformation'] : null;
        $this->container['integrationInformation'] = isset($data['integrationInformation']) ? $data['integrationInformation'] : null;
        $this->container['organizationInformation'] = isset($data['organizationInformation']) ? $data['organizationInformation'] : null;
        $this->container['productInformation'] = isset($data['productInformation']) ? $data['productInformation'] : null;
        $this->container['productInformationSetups'] = isset($data['productInformationSetups']) ? $data['productInformationSetups'] : null;
        $this->container['documentInformation'] = isset($data['documentInformation']) ? $data['documentInformation'] : null;
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

        return true;
    }


    /**
     * Gets registrationInformation
     * @return \CyberSource\Model\Boardingv1registrationsRegistrationInformation
     */
    public function getRegistrationInformation()
    {
        return $this->container['registrationInformation'];
    }

    /**
     * Sets registrationInformation
     * @param \CyberSource\Model\Boardingv1registrationsRegistrationInformation $registrationInformation
     * @return $this
     */
    public function setRegistrationInformation($registrationInformation)
    {
        $this->container['registrationInformation'] = $registrationInformation;

        return $this;
    }

    /**
     * Gets integrationInformation
     * @return \CyberSource\Model\InlineResponse2002IntegrationInformation
     */
    public function getIntegrationInformation()
    {
        return $this->container['integrationInformation'];
    }

    /**
     * Sets integrationInformation
     * @param \CyberSource\Model\InlineResponse2002IntegrationInformation $integrationInformation
     * @return $this
     */
    public function setIntegrationInformation($integrationInformation)
    {
        $this->container['integrationInformation'] = $integrationInformation;

        return $this;
    }

    /**
     * Gets organizationInformation
     * @return \CyberSource\Model\Boardingv1registrationsOrganizationInformation
     */
    public function getOrganizationInformation()
    {
        return $this->container['organizationInformation'];
    }

    /**
     * Sets organizationInformation
     * @param \CyberSource\Model\Boardingv1registrationsOrganizationInformation $organizationInformation
     * @return $this
     */
    public function setOrganizationInformation($organizationInformation)
    {
        $this->container['organizationInformation'] = $organizationInformation;

        return $this;
    }

    /**
     * Gets productInformation
     * @return \CyberSource\Model\Boardingv1registrationsProductInformation
     */
    public function getProductInformation()
    {
        return $this->container['productInformation'];
    }

    /**
     * Sets productInformation
     * @param \CyberSource\Model\Boardingv1registrationsProductInformation $productInformation
     * @return $this
     */
    public function setProductInformation($productInformation)
    {
        $this->container['productInformation'] = $productInformation;

        return $this;
    }

    /**
     * Gets productInformationSetups
     * @return \CyberSource\Model\InlineResponse2011ProductInformationSetups[]
     */
    public function getProductInformationSetups()
    {
        return $this->container['productInformationSetups'];
    }

    /**
     * Sets productInformationSetups
     * @param \CyberSource\Model\InlineResponse2011ProductInformationSetups[] $productInformationSetups
     * @return $this
     */
    public function setProductInformationSetups($productInformationSetups)
    {
        $this->container['productInformationSetups'] = $productInformationSetups;

        return $this;
    }

    /**
     * Gets documentInformation
     * @return \CyberSource\Model\Boardingv1registrationsDocumentInformation
     */
    public function getDocumentInformation()
    {
        return $this->container['documentInformation'];
    }

    /**
     * Sets documentInformation
     * @param \CyberSource\Model\Boardingv1registrationsDocumentInformation $documentInformation
     * @return $this
     */
    public function setDocumentInformation($documentInformation)
    {
        $this->container['documentInformation'] = $documentInformation;

        return $this;
    }

    /**
     * Gets details
     * @return map[string,object[]]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param map[string,object[]] $details
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
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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

