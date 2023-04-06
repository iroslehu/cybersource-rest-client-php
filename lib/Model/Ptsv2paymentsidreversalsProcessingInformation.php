<?php
/**
 * Ptsv2paymentsidreversalsProcessingInformation
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
 * Ptsv2paymentsidreversalsProcessingInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsidreversalsProcessingInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2paymentsidreversals_processingInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paymentSolution' => 'string',
        'reconciliationId' => 'string',
        'linkId' => 'string',
        'reportGroup' => 'string',
        'visaCheckoutId' => 'string',
        'issuer' => '\CyberSource\Model\Ptsv2paymentsIssuerInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'paymentSolution' => null,
        'reconciliationId' => null,
        'linkId' => null,
        'reportGroup' => null,
        'visaCheckoutId' => null,
        'issuer' => null
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
        'paymentSolution' => 'paymentSolution',
        'reconciliationId' => 'reconciliationId',
        'linkId' => 'linkId',
        'reportGroup' => 'reportGroup',
        'visaCheckoutId' => 'visaCheckoutId',
        'issuer' => 'issuer'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'paymentSolution' => 'setPaymentSolution',
        'reconciliationId' => 'setReconciliationId',
        'linkId' => 'setLinkId',
        'reportGroup' => 'setReportGroup',
        'visaCheckoutId' => 'setVisaCheckoutId',
        'issuer' => 'setIssuer'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'paymentSolution' => 'getPaymentSolution',
        'reconciliationId' => 'getReconciliationId',
        'linkId' => 'getLinkId',
        'reportGroup' => 'getReportGroup',
        'visaCheckoutId' => 'getVisaCheckoutId',
        'issuer' => 'getIssuer'
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
        $this->container['paymentSolution'] = isset($data['paymentSolution']) ? $data['paymentSolution'] : null;
        $this->container['reconciliationId'] = isset($data['reconciliationId']) ? $data['reconciliationId'] : null;
        $this->container['linkId'] = isset($data['linkId']) ? $data['linkId'] : null;
        $this->container['reportGroup'] = isset($data['reportGroup']) ? $data['reportGroup'] : null;
        $this->container['visaCheckoutId'] = isset($data['visaCheckoutId']) ? $data['visaCheckoutId'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
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
     * Gets paymentSolution
     * @return string
     */
    public function getPaymentSolution()
    {
        return $this->container['paymentSolution'];
    }

    /**
     * Sets paymentSolution
     * @param string $paymentSolution Type of digital payment solution for the transaction. Possible Values:   - `visacheckout`: Visa Checkout. This value is required for Visa Checkout transactions. For details, see `payment_solution` field description in [Visa Checkout Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/VCO_SCMP_API/html/)  - `001`: Apple Pay.  - `004`: Cybersource In-App Solution.  - `005`: Masterpass. This value is required for Masterpass transactions on OmniPay Direct. For details, see \"Masterpass\" in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  - `006`: Android Pay.  - `007`: Chase Pay.  - `008`: Samsung Pay.  - `012`: Google Pay.  - `013`: Cybersource P2PE Decryption  - `014`: Mastercard credential on file (COF) payment network token. Returned in authorizations that use a payment network token associated with a TMS token.  - `015`: Visa credential on file (COF) payment network token. Returned in authorizations that use a payment network token associated with a TMS token.  - `027`: Click to Pay.
     * @return $this
     */
    public function setPaymentSolution($paymentSolution)
    {
        $this->container['paymentSolution'] = $paymentSolution;

        return $this;
    }

    /**
     * Gets reconciliationId
     * @return string
     */
    public function getReconciliationId()
    {
        return $this->container['reconciliationId'];
    }

    /**
     * Sets reconciliationId
     * @param string $reconciliationId Please check with Cybersource customer support to see if your merchant account is configured correctly so you can include this field in your request. * For Payouts: max length for FDCCompass is String (22).
     * @return $this
     */
    public function setReconciliationId($reconciliationId)
    {
        $this->container['reconciliationId'] = $reconciliationId;

        return $this;
    }

    /**
     * Gets linkId
     * @return string
     */
    public function getLinkId()
    {
        return $this->container['linkId'];
    }

    /**
     * Sets linkId
     * @param string $linkId Value that links the current authorization request to the original authorization request. Set this value to the ID that was returned in the reply message from the original authorization request.  This value is used for:  - Partial authorizations - Split shipments  For details, see `link_to_request` field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setLinkId($linkId)
    {
        $this->container['linkId'] = $linkId;

        return $this;
    }

    /**
     * Gets reportGroup
     * @return string
     */
    public function getReportGroup()
    {
        return $this->container['reportGroup'];
    }

    /**
     * Sets reportGroup
     * @param string $reportGroup Attribute that lets you define custom grouping for your processor reports. This field is supported only for **Worldpay VAP**.  For details, see `report_group` field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setReportGroup($reportGroup)
    {
        $this->container['reportGroup'] = $reportGroup;

        return $this;
    }

    /**
     * Gets visaCheckoutId
     * @return string
     */
    public function getVisaCheckoutId()
    {
        return $this->container['visaCheckoutId'];
    }

    /**
     * Sets visaCheckoutId
     * @param string $visaCheckoutId Identifier for the **Visa Checkout** order. Visa Checkout provides a unique order ID for every transaction in the Visa Checkout **callID** field.
     * @return $this
     */
    public function setVisaCheckoutId($visaCheckoutId)
    {
        $this->container['visaCheckoutId'] = $visaCheckoutId;

        return $this;
    }

    /**
     * Gets issuer
     * @return \CyberSource\Model\Ptsv2paymentsIssuerInformation
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     * @param \CyberSource\Model\Ptsv2paymentsIssuerInformation $issuer
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

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


