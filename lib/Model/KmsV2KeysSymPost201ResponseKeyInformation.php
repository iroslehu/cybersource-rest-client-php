<?php
/**
 * KmsV2KeysSymPost201ResponseKeyInformation
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
 * KmsV2KeysSymPost201ResponseKeyInformation Class Doc Comment
 *
 * @category    Class
 * @description key information
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class KmsV2KeysSymPost201ResponseKeyInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'kmsV2KeysSymPost201Response_keyInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organizationId' => 'string',
        'externalOrganizationId' => 'string',
        'referenceNumber' => 'string',
        'keyId' => 'string',
        'key' => 'string',
        'status' => 'string',
        'expirationDate' => 'string',
        'message' => 'string',
        'errorInformation' => '\CyberSource\Model\KmsV2KeysSymPost201ResponseErrorInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organizationId' => null,
        'externalOrganizationId' => null,
        'referenceNumber' => null,
        'keyId' => null,
        'key' => null,
        'status' => null,
        'expirationDate' => null,
        'message' => null,
        'errorInformation' => null
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
        'organizationId' => 'organizationId',
        'externalOrganizationId' => 'externalOrganizationId',
        'referenceNumber' => 'referenceNumber',
        'keyId' => 'keyId',
        'key' => 'key',
        'status' => 'status',
        'expirationDate' => 'expirationDate',
        'message' => 'message',
        'errorInformation' => 'errorInformation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'organizationId' => 'setOrganizationId',
        'externalOrganizationId' => 'setExternalOrganizationId',
        'referenceNumber' => 'setReferenceNumber',
        'keyId' => 'setKeyId',
        'key' => 'setKey',
        'status' => 'setStatus',
        'expirationDate' => 'setExpirationDate',
        'message' => 'setMessage',
        'errorInformation' => 'setErrorInformation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'organizationId' => 'getOrganizationId',
        'externalOrganizationId' => 'getExternalOrganizationId',
        'referenceNumber' => 'getReferenceNumber',
        'keyId' => 'getKeyId',
        'key' => 'getKey',
        'status' => 'getStatus',
        'expirationDate' => 'getExpirationDate',
        'message' => 'getMessage',
        'errorInformation' => 'getErrorInformation'
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
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['externalOrganizationId'] = isset($data['externalOrganizationId']) ? $data['externalOrganizationId'] : null;
        $this->container['referenceNumber'] = isset($data['referenceNumber']) ? $data['referenceNumber'] : null;
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['expirationDate'] = isset($data['expirationDate']) ? $data['expirationDate'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['errorInformation'] = isset($data['errorInformation']) ? $data['errorInformation'] : null;
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
     * Gets organizationId
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     * @param string $organizationId Merchant Id
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets externalOrganizationId
     * @return string
     */
    public function getExternalOrganizationId()
    {
        return $this->container['externalOrganizationId'];
    }

    /**
     * Sets externalOrganizationId
     * @param string $externalOrganizationId Payworks MerchantId for given organizationId.
     * @return $this
     */
    public function setExternalOrganizationId($externalOrganizationId)
    {
        $this->container['externalOrganizationId'] = $externalOrganizationId;

        return $this;
    }

    /**
     * Gets referenceNumber
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->container['referenceNumber'];
    }

    /**
     * Sets referenceNumber
     * @param string $referenceNumber Reference number is a unique identifier provided by the client along with the organization Id. This is an optional field provided solely for the client’s convenience. If client specifies value for this field in the request, it is expected to be available in the response.
     * @return $this
     */
    public function setReferenceNumber($referenceNumber)
    {
        $this->container['referenceNumber'] = $referenceNumber;

        return $this;
    }

    /**
     * Gets keyId
     * @return string
     */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
     * Sets keyId
     * @param string $keyId Key Serial Number
     * @return $this
     */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;

        return $this;
    }

    /**
     * Gets key
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     * @param string $key value of the key
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

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
     * @param string $status The status of the key.  Possible values:  - FAILED  - ACTIVE
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets expirationDate
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->container['expirationDate'];
    }

    /**
     * Sets expirationDate
     * @param string $expirationDate The expiration time in UTC. `Format: YYYY-MM-DDThh:mm:ssZ`  Example 2016-08-11T22:47:57Z equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The T separates the date and the time. The Z indicates UTC.
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->container['expirationDate'] = $expirationDate;

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
     * @param string $message message in case of failed key
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets errorInformation
     * @return \CyberSource\Model\KmsV2KeysSymPost201ResponseErrorInformation
     */
    public function getErrorInformation()
    {
        return $this->container['errorInformation'];
    }

    /**
     * Sets errorInformation
     * @param \CyberSource\Model\KmsV2KeysSymPost201ResponseErrorInformation $errorInformation
     * @return $this
     */
    public function setErrorInformation($errorInformation)
    {
        $this->container['errorInformation'] = $errorInformation;

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


