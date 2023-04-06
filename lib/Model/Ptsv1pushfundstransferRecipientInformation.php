<?php
/**
 * Ptsv1pushfundstransferRecipientInformation
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
 * Ptsv1pushfundstransferRecipientInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv1pushfundstransferRecipientInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv1pushfundstransfer_recipientInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paymentInformation' => '\CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPaymentInformation',
        'address1' => 'string',
        'address2' => 'string',
        'locality' => 'string',
        'postalCode' => 'string',
        'administrativeArea' => 'string',
        'country' => 'string',
        'firstName' => 'string',
        'middleName' => 'string',
        'middleInitial' => 'string',
        'lastName' => 'string',
        'dateOfBirth' => 'string',
        'phoneNumber' => 'string',
        'personalIdentification' => '\CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPersonalIdentification'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'paymentInformation' => null,
        'address1' => null,
        'address2' => null,
        'locality' => null,
        'postalCode' => null,
        'administrativeArea' => null,
        'country' => null,
        'firstName' => null,
        'middleName' => null,
        'middleInitial' => null,
        'lastName' => null,
        'dateOfBirth' => null,
        'phoneNumber' => null,
        'personalIdentification' => null
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
        'paymentInformation' => 'paymentInformation',
        'address1' => 'address1',
        'address2' => 'address2',
        'locality' => 'locality',
        'postalCode' => 'postalCode',
        'administrativeArea' => 'administrativeArea',
        'country' => 'country',
        'firstName' => 'firstName',
        'middleName' => 'middleName',
        'middleInitial' => 'middleInitial',
        'lastName' => 'lastName',
        'dateOfBirth' => 'dateOfBirth',
        'phoneNumber' => 'phoneNumber',
        'personalIdentification' => 'personalIdentification'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'paymentInformation' => 'setPaymentInformation',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'locality' => 'setLocality',
        'postalCode' => 'setPostalCode',
        'administrativeArea' => 'setAdministrativeArea',
        'country' => 'setCountry',
        'firstName' => 'setFirstName',
        'middleName' => 'setMiddleName',
        'middleInitial' => 'setMiddleInitial',
        'lastName' => 'setLastName',
        'dateOfBirth' => 'setDateOfBirth',
        'phoneNumber' => 'setPhoneNumber',
        'personalIdentification' => 'setPersonalIdentification'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'paymentInformation' => 'getPaymentInformation',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'locality' => 'getLocality',
        'postalCode' => 'getPostalCode',
        'administrativeArea' => 'getAdministrativeArea',
        'country' => 'getCountry',
        'firstName' => 'getFirstName',
        'middleName' => 'getMiddleName',
        'middleInitial' => 'getMiddleInitial',
        'lastName' => 'getLastName',
        'dateOfBirth' => 'getDateOfBirth',
        'phoneNumber' => 'getPhoneNumber',
        'personalIdentification' => 'getPersonalIdentification'
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
        $this->container['paymentInformation'] = isset($data['paymentInformation']) ? $data['paymentInformation'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['administrativeArea'] = isset($data['administrativeArea']) ? $data['administrativeArea'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['middleName'] = isset($data['middleName']) ? $data['middleName'] : null;
        $this->container['middleInitial'] = isset($data['middleInitial']) ? $data['middleInitial'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['dateOfBirth'] = isset($data['dateOfBirth']) ? $data['dateOfBirth'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['personalIdentification'] = isset($data['personalIdentification']) ? $data['personalIdentification'] : null;
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
     * Gets paymentInformation
     * @return \CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPaymentInformation
     */
    public function getPaymentInformation()
    {
        return $this->container['paymentInformation'];
    }

    /**
     * Sets paymentInformation
     * @param \CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPaymentInformation $paymentInformation
     * @return $this
     */
    public function setPaymentInformation($paymentInformation)
    {
        $this->container['paymentInformation'] = $paymentInformation;

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
     * @param string $address1 First line of the recipient's address.  Required for Mastercard Send. This field is not supported for Visa Platform Connect.
     * @return $this
     */
    public function setAddress1($address1)
    {
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
     * @param string $address2 Second line of the recipient's address  Optional for Mastercard Send. This field is not supported for Visa Platform Connect.
     * @return $this
     */
    public function setAddress2($address2)
    {
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
     * @param string $locality Recipient city.  Required for Mastercard Send.
     * @return $this
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

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
     * @param string $postalCode Recipient postal code.  For USA, this must be a valid value of 5 digits or 5 digits hyphen 4 digits, for example '63368', '63368-5555'. For other regions, this can be alphanumeric, length 1-10.  Mastercard Send: Required for recipients in Canada and Canadian issued cards.
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->container['postalCode'] = $postalCode;

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
     * @param string $administrativeArea The recipient's province, state or territory. Conditional, required if recipient's country is USA or CAN. Must be an ISO 3166-2 uppercase alpha 2 or 3 character country subdivision code. For example, Missouri is MO.  Required only for FDCCompass.  This field is not supported for Visa Platform Connect.
     * @return $this
     */
    public function setAdministrativeArea($administrativeArea)
    {
        $this->container['administrativeArea'] = $administrativeArea;

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
     * @param string $country Recipient country code. Use the ISO Standard Alpha Country Codes.  https://developer.cybersource.com/library/documentation/sbc/quickref/countries_alpha_list.pdf  Required for Mastercard Send.
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
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
     * @param string $firstName First name of recipient.  Visa Platform Connect (14) Chase Paymentech (30) Mastercard Send (40)  This field is required for Mastercard Send.
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets middleName
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middleName'];
    }

    /**
     * Sets middleName
     * @param string $middleName Sender’s middle name. This field is a passthrough, which means that CyberSource does not verify the value or modify it in any way before sending it to the processor. If the field is not required for the transaction, CyberSource does not forward it to the processor.
     * @return $this
     */
    public function setMiddleName($middleName)
    {
        $this->container['middleName'] = $middleName;

        return $this;
    }

    /**
     * Gets middleInitial
     * @return string
     */
    public function getMiddleInitial()
    {
        return $this->container['middleInitial'];
    }

    /**
     * Sets middleInitial
     * @param string $middleInitial Middle Initial of recipient.  This field is supported by FDC Compass.
     * @return $this
     */
    public function setMiddleInitial($middleInitial)
    {
        $this->container['middleInitial'] = $middleInitial;

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
     * @param string $lastName Last name of recipient.  Visa Platform Connect (14) Paymentech (30) Mastercard Send (40)  This field is required for Mastercard Send.
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets dateOfBirth
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->container['dateOfBirth'];
    }

    /**
     * Sets dateOfBirth
     * @param string $dateOfBirth Recipient date of birth in YYYYMMDD format.
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->container['dateOfBirth'] = $dateOfBirth;

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
     * @param string $phoneNumber Recipient phone number.  This field is supported by FDC Compass.  Mastercard Send: Max length is 15 with no dashes or spaces.
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets personalIdentification
     * @return \CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPersonalIdentification
     */
    public function getPersonalIdentification()
    {
        return $this->container['personalIdentification'];
    }

    /**
     * Sets personalIdentification
     * @param \CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPersonalIdentification $personalIdentification
     * @return $this
     */
    public function setPersonalIdentification($personalIdentification)
    {
        $this->container['personalIdentification'] = $personalIdentification;

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


