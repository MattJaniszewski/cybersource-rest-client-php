<?php
/**
 * Ptsv2paymentsOrderInformationShipTo
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
 * Ptsv2paymentsOrderInformationShipTo Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsOrderInformationShipTo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_orderInformation_shipTo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'firstName' => 'string',
        'lastName' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'locality' => 'string',
        'administrativeArea' => 'string',
        'postalCode' => 'string',
        'country' => 'string',
        'district' => 'string',
        'buildingNumber' => 'string',
        'phoneNumber' => 'string',
        'company' => 'string',
        'destinationTypes' => 'string',
        'destinationCode' => 'int',
        'method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'firstName' => null,
        'lastName' => null,
        'address1' => null,
        'address2' => null,
        'locality' => null,
        'administrativeArea' => null,
        'postalCode' => null,
        'country' => null,
        'district' => null,
        'buildingNumber' => null,
        'phoneNumber' => null,
        'company' => null,
        'destinationTypes' => null,
        'destinationCode' => null,
        'method' => null
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
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'address1' => 'address1',
        'address2' => 'address2',
        'locality' => 'locality',
        'administrativeArea' => 'administrativeArea',
        'postalCode' => 'postalCode',
        'country' => 'country',
        'district' => 'district',
        'buildingNumber' => 'buildingNumber',
        'phoneNumber' => 'phoneNumber',
        'company' => 'company',
        'destinationTypes' => 'destinationTypes',
        'destinationCode' => 'destinationCode',
        'method' => 'method'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'locality' => 'setLocality',
        'administrativeArea' => 'setAdministrativeArea',
        'postalCode' => 'setPostalCode',
        'country' => 'setCountry',
        'district' => 'setDistrict',
        'buildingNumber' => 'setBuildingNumber',
        'phoneNumber' => 'setPhoneNumber',
        'company' => 'setCompany',
        'destinationTypes' => 'setDestinationTypes',
        'destinationCode' => 'setDestinationCode',
        'method' => 'setMethod'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'locality' => 'getLocality',
        'administrativeArea' => 'getAdministrativeArea',
        'postalCode' => 'getPostalCode',
        'country' => 'getCountry',
        'district' => 'getDistrict',
        'buildingNumber' => 'getBuildingNumber',
        'phoneNumber' => 'getPhoneNumber',
        'company' => 'getCompany',
        'destinationTypes' => 'getDestinationTypes',
        'destinationCode' => 'getDestinationCode',
        'method' => 'getMethod'
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
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['administrativeArea'] = isset($data['administrativeArea']) ? $data['administrativeArea'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['buildingNumber'] = isset($data['buildingNumber']) ? $data['buildingNumber'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['destinationTypes'] = isset($data['destinationTypes']) ? $data['destinationTypes'] : null;
        $this->container['destinationCode'] = isset($data['destinationCode']) ? $data['destinationCode'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['firstName']) && (strlen($this->container['firstName']) > 60)) {
            $invalid_properties[] = "invalid value for 'firstName', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['lastName']) && (strlen($this->container['lastName']) > 60)) {
            $invalid_properties[] = "invalid value for 'lastName', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['address1']) && (strlen($this->container['address1']) > 60)) {
            $invalid_properties[] = "invalid value for 'address1', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['address2']) && (strlen($this->container['address2']) > 60)) {
            $invalid_properties[] = "invalid value for 'address2', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['locality']) && (strlen($this->container['locality']) > 50)) {
            $invalid_properties[] = "invalid value for 'locality', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['administrativeArea']) && (strlen($this->container['administrativeArea']) > 2)) {
            $invalid_properties[] = "invalid value for 'administrativeArea', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['postalCode']) && (strlen($this->container['postalCode']) > 10)) {
            $invalid_properties[] = "invalid value for 'postalCode', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['country']) && (strlen($this->container['country']) > 2)) {
            $invalid_properties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['district']) && (strlen($this->container['district']) > 50)) {
            $invalid_properties[] = "invalid value for 'district', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['buildingNumber']) && (strlen($this->container['buildingNumber']) > 15)) {
            $invalid_properties[] = "invalid value for 'buildingNumber', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['phoneNumber']) && (strlen($this->container['phoneNumber']) > 15)) {
            $invalid_properties[] = "invalid value for 'phoneNumber', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['company']) && (strlen($this->container['company']) > 60)) {
            $invalid_properties[] = "invalid value for 'company', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['destinationTypes']) && (strlen($this->container['destinationTypes']) > 25)) {
            $invalid_properties[] = "invalid value for 'destinationTypes', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['method']) && (strlen($this->container['method']) > 10)) {
            $invalid_properties[] = "invalid value for 'method', the character length must be smaller than or equal to 10.";
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

        if (strlen($this->container['firstName']) > 60) {
            return false;
        }
        if (strlen($this->container['lastName']) > 60) {
            return false;
        }
        if (strlen($this->container['address1']) > 60) {
            return false;
        }
        if (strlen($this->container['address2']) > 60) {
            return false;
        }
        if (strlen($this->container['locality']) > 50) {
            return false;
        }
        if (strlen($this->container['administrativeArea']) > 2) {
            return false;
        }
        if (strlen($this->container['postalCode']) > 10) {
            return false;
        }
        if (strlen($this->container['country']) > 2) {
            return false;
        }
        if (strlen($this->container['district']) > 50) {
            return false;
        }
        if (strlen($this->container['buildingNumber']) > 15) {
            return false;
        }
        if (strlen($this->container['phoneNumber']) > 15) {
            return false;
        }
        if (strlen($this->container['company']) > 60) {
            return false;
        }
        if (strlen($this->container['destinationTypes']) > 25) {
            return false;
        }
        if (strlen($this->container['method']) > 10) {
            return false;
        }
        return true;
    }


    /**
     * Gets firstName
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     * @param string $firstName First name of the recipient.  #### Litle Maximum length: 25  #### All other processors Maximum length: 60  Optional field.
     * @return $this
     */
    public function setFirstName($firstName)
    {
        if (!is_null($firstName) && (strlen($firstName) > 60)) {
            throw new \InvalidArgumentException('invalid length for $firstName when calling Ptsv2paymentsOrderInformationShipTo., must be smaller than or equal to 60.');
        }

        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     * @param string $lastName Last name of the recipient.  #### Litle Maximum length: 25  #### All other processors Maximum length: 60  Optional field.
     * @return $this
     */
    public function setLastName($lastName)
    {
        if (!is_null($lastName) && (strlen($lastName) > 60)) {
            throw new \InvalidArgumentException('invalid length for $lastName when calling Ptsv2paymentsOrderInformationShipTo., must be smaller than or equal to 60.');
        }

        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets address1
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     * @param string $address1 First line of the shipping address.  Required field for authorization if any shipping address information is included in the request; otherwise, optional.
     * @return $this
     */
    public function setAddress1($address1)
    {
        if (!is_null($address1) && (strlen($address1) > 60)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling Ptsv2paymentsOrderInformationShipTo., must be smaller than or equal to 60.');
        }

        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     * @param string $address2 Second line of the shipping address.  Optional field.
     * @return $this
     */
    public function setAddress2($address2)
    {
        if (!is_null($address2) && (strlen($address2) > 60)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling Ptsv2paymentsOrderInformationShipTo., must be smaller than or equal to 60.');
        }

        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets locality
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     * @param string $locality City of the shipping address.  Required field for authorization if any shipping address information is included in the request and shipping to the U.S. or Canada; otherwise, optional.
     * @return $this
     */
    public function setLocality($locality)
    {
        if (!is_null($locality) && (strlen($locality) > 50)) {
            throw new \InvalidArgumentException('invalid length for $locality when calling Ptsv2paymentsOrderInformationShipTo., must be smaller than or equal to 50.');
        }

        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets administrativeArea
     * @return string
     */
    public function getAdministrativeArea()
    {
        return $this->container['administrativeArea'];
    }

    /**
     * Sets administrativeArea
     * @param string $administrativeArea State or province of the shipping address. Use the [State, Province, and Territory Codes for the United States and Canada](https://developer.cybersource.com/library/documentation/sbc/quickref/states_and_provinces.pdf)  Required field for authorization if any shipping address information is included in the request and shipping to the U.S. or Canada; otherwise, optional.
     * @return $this
     */
    public function setAdministrativeArea($administrativeArea)
    {
        if (!is_null($administrativeArea) && (strlen($administrativeArea) > 2)) {
            throw new \InvalidArgumentException('invalid length for $administrativeArea when calling Ptsv2paymentsOrderInformationShipTo., must be smaller than or equal to 2.');
        }

        $this->container['administrativeArea'] = $administrativeArea;

        return $this;
    }

    /**
     * Gets postalCode
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     * @param string $postalCode Postal code for the shipping address. The postal code must consist of 5 to 9 digits.  Required field for authorization if any shipping address information is included in the request and shipping to the U.S. or Canada; otherwise, optional.  When the billing country is the U.S., the 9-digit postal code must follow this format: [5 digits][dash][4 digits]  Example 12345-6789  When the billing country is Canada, the 6-digit postal code must follow this format: [alpha][numeric][alpha][space][numeric][alpha][numeric]  Example A1B 2C3  #### American Express Direct Before sending the postal code to the processor, all nonalphanumeric characters are removed and, if the remaining value is longer than nine characters, the value is truncated starting from the right side.
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        if (!is_null($postalCode) && (strlen($postalCode) > 10)) {
            throw new \InvalidArgumentException('invalid length for $postalCode when calling Ptsv2paymentsOrderInformationShipTo., must be smaller than or equal to 10.');
        }

        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country Country of the shipping address. Use the two-character [ISO Standard Country Codes.](http://apps.cybersource.com/library/documentation/sbc/quickref/countries_alpha_list.pdf)  Required field for authorization if any shipping address information is included in the request; otherwise, optional.
     * @return $this
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling Ptsv2paymentsOrderInformationShipTo., must be smaller than or equal to 2.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets district
     * @return string
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     * @param string $district Neighborhood, community, or region within a city or municipality.
     * @return $this
     */
    public function setDistrict($district)
    {
        if (!is_null($district) && (strlen($district) > 50)) {
            throw new \InvalidArgumentException('invalid length for $district when calling Ptsv2paymentsOrderInformationShipTo., must be smaller than or equal to 50.');
        }

        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets buildingNumber
     * @return string
     */
    public function getBuildingNumber()
    {
        return $this->container['buildingNumber'];
    }

    /**
     * Sets buildingNumber
     * @param string $buildingNumber Building number in the street address. For example, the building number is 187 in the following address:  Rua da Quitanda 187
     * @return $this
     */
    public function setBuildingNumber($buildingNumber)
    {
        if (!is_null($buildingNumber) && (strlen($buildingNumber) > 15)) {
            throw new \InvalidArgumentException('invalid length for $buildingNumber when calling Ptsv2paymentsOrderInformationShipTo., must be smaller than or equal to 15.');
        }

        $this->container['buildingNumber'] = $buildingNumber;

        return $this;
    }

    /**
     * Gets phoneNumber
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     * @param string $phoneNumber Phone number associated with the shipping address.
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        if (!is_null($phoneNumber) && (strlen($phoneNumber) > 15)) {
            throw new \InvalidArgumentException('invalid length for $phoneNumber when calling Ptsv2paymentsOrderInformationShipTo., must be smaller than or equal to 15.');
        }

        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets company
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param string $company Name of the customer’s company.  For processor-specific information, see the company_name field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setCompany($company)
    {
        if (!is_null($company) && (strlen($company) > 60)) {
            throw new \InvalidArgumentException('invalid length for $company when calling Ptsv2paymentsOrderInformationShipTo., must be smaller than or equal to 60.');
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets destinationTypes
     * @return string
     */
    public function getDestinationTypes()
    {
        return $this->container['destinationTypes'];
    }

    /**
     * Sets destinationTypes
     * @param string $destinationTypes Shipping destination of item. Example: Commercial, Residential, Store
     * @return $this
     */
    public function setDestinationTypes($destinationTypes)
    {
        if (!is_null($destinationTypes) && (strlen($destinationTypes) > 25)) {
            throw new \InvalidArgumentException('invalid length for $destinationTypes when calling Ptsv2paymentsOrderInformationShipTo., must be smaller than or equal to 25.');
        }

        $this->container['destinationTypes'] = $destinationTypes;

        return $this;
    }

    /**
     * Gets destinationCode
     * @return int
     */
    public function getDestinationCode()
    {
        return $this->container['destinationCode'];
    }

    /**
     * Sets destinationCode
     * @param int $destinationCode Indicates destination chosen for the transaction. Possible values: - 01- Ship to cardholder billing address - 02- Ship to another verified address on file with merchant - 03- Ship to address that is different than billing address - 04- Ship to store (store address should be populated on request) - 05- Digital goods - 06- Travel and event tickets, not shipped - 07- Other
     * @return $this
     */
    public function setDestinationCode($destinationCode)
    {
        $this->container['destinationCode'] = $destinationCode;

        return $this;
    }

    /**
     * Gets method
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     * @param string $method Shipping method for the product. Possible values: - lowcost: Lowest-cost service - sameday: Courier or same-day service - oneday: Next-day or overnight service - twoday: Two-day service - threeday: Three-day service - pickup: Store pick-up - other: Other shipping method - none: No shipping method because product is a service or subscription Required for American Express SafeKey (U.S.).
     * @return $this
     */
    public function setMethod($method)
    {
        if (!is_null($method) && (strlen($method) > 10)) {
            throw new \InvalidArgumentException('invalid length for $method when calling Ptsv2paymentsOrderInformationShipTo., must be smaller than or equal to 10.');
        }

        $this->container['method'] = $method;

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


