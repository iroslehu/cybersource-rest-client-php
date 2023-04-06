<?php
/**
 * InvoicingV2InvoicesPost201ResponseOrderInformationAmountDetails
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
 * InvoicingV2InvoicesPost201ResponseOrderInformationAmountDetails Class Doc Comment
 *
 * @category    Class
 * @description Contains all of the amount-related fields in the invoice.
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InvoicingV2InvoicesPost201ResponseOrderInformationAmountDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'invoicingV2InvoicesPost201Response_orderInformation_amountDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'totalAmount' => 'string',
        'currency' => 'string',
        'balanceAmount' => 'string',
        'discountAmount' => 'string',
        'discountPercent' => 'float',
        'subAmount' => 'float',
        'minimumPartialAmount' => 'float',
        'taxDetails' => '\CyberSource\Model\Invoicingv2invoicesOrderInformationAmountDetailsTaxDetails',
        'freight' => '\CyberSource\Model\Invoicingv2invoicesOrderInformationAmountDetailsFreight'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'totalAmount' => null,
        'currency' => null,
        'balanceAmount' => null,
        'discountAmount' => null,
        'discountPercent' => null,
        'subAmount' => null,
        'minimumPartialAmount' => null,
        'taxDetails' => null,
        'freight' => null
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
        'totalAmount' => 'totalAmount',
        'currency' => 'currency',
        'balanceAmount' => 'balanceAmount',
        'discountAmount' => 'discountAmount',
        'discountPercent' => 'discountPercent',
        'subAmount' => 'subAmount',
        'minimumPartialAmount' => 'minimumPartialAmount',
        'taxDetails' => 'taxDetails',
        'freight' => 'freight'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'totalAmount' => 'setTotalAmount',
        'currency' => 'setCurrency',
        'balanceAmount' => 'setBalanceAmount',
        'discountAmount' => 'setDiscountAmount',
        'discountPercent' => 'setDiscountPercent',
        'subAmount' => 'setSubAmount',
        'minimumPartialAmount' => 'setMinimumPartialAmount',
        'taxDetails' => 'setTaxDetails',
        'freight' => 'setFreight'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'totalAmount' => 'getTotalAmount',
        'currency' => 'getCurrency',
        'balanceAmount' => 'getBalanceAmount',
        'discountAmount' => 'getDiscountAmount',
        'discountPercent' => 'getDiscountPercent',
        'subAmount' => 'getSubAmount',
        'minimumPartialAmount' => 'getMinimumPartialAmount',
        'taxDetails' => 'getTaxDetails',
        'freight' => 'getFreight'
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
        $this->container['totalAmount'] = isset($data['totalAmount']) ? $data['totalAmount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['balanceAmount'] = isset($data['balanceAmount']) ? $data['balanceAmount'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['discountPercent'] = isset($data['discountPercent']) ? $data['discountPercent'] : null;
        $this->container['subAmount'] = isset($data['subAmount']) ? $data['subAmount'] : null;
        $this->container['minimumPartialAmount'] = isset($data['minimumPartialAmount']) ? $data['minimumPartialAmount'] : null;
        $this->container['taxDetails'] = isset($data['taxDetails']) ? $data['taxDetails'] : null;
        $this->container['freight'] = isset($data['freight']) ? $data['freight'] : null;
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
     * Gets totalAmount
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     * @param string $totalAmount Grand total for the order. This value cannot be negative. You can include a decimal point (.), but no other special characters. CyberSource truncates the amount to the correct number of decimal places.  **Note** For CTV, FDCCompass, Paymentech processors, the maximum length for this field is 12.  **Important** Some processors have specific requirements and limitations, such as maximum amounts and maximum field lengths. For details, see: - \"Authorization Information for Specific Processors\" in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/). - \"Capture Information for Specific Processors\" in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/). - \"Credit Information for Specific Processors\" in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/).  If your processor supports zero amount authorizations, you can set this field to 0 for the authorization to check if the card is lost or stolen. For details, see \"Zero Amount Authorizations,\" \"Credit Information for Specific Processors\" in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### Card Present Required to include either this field or `orderInformation.lineItems[].unitPrice` for the order.  #### Invoicing Required for creating a new invoice.  #### PIN Debit Amount you requested for the PIN debit purchase. This value is returned for partial authorizations. The issuing bank can approve a partial amount if the balance on the debit card is less than the requested transaction amount.  Required field for PIN Debit purchase and PIN Debit credit requests. Optional field for PIN Debit reversal requests.  #### GPX This field is optional for reversing an authorization or credit; however, for all other processors, these fields are required.  #### DCC with a Third-Party Provider Set this field to the converted amount that was returned by the DCC provider. You must include either this field or the 1st line item in the order and the specific line-order amount in your request. For details, see `grand_total_amount` field description in [Dynamic Currency Conversion For First Data Using the SCMP API](http://apps.cybersource.com/library/documentation/dev_guides/DCC_FirstData_SCMP/DCC_FirstData_SCMP_API.pdf).  #### FDMS South If you accept IDR or CLP currencies, see the entry for FDMS South in \"Authorization Information for Specific Processors\" of the [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### DCC for First Data Not used.
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency Currency used for the order. Use the three-character [ISO Standard Currency Codes.](http://apps.cybersource.com/library/documentation/sbc/quickref/currencies.pdf)  #### Used by **Authorization** Required field.  **Authorization Reversal** For an authorization reversal (`reversalInformation`) or a capture (`processingOptions.capture` is set to `true`), you must use the same currency that you used in your payment authorization request.  #### PIN Debit Currency for the amount you requested for the PIN debit purchase. This value is returned for partial authorizations. The issuing bank can approve a partial amount if the balance on the debit card is less than the requested transaction amount. For the possible values, see the [ISO Standard Currency Codes](https://developer.cybersource.com/library/documentation/sbc/quickref/currencies.pdf). Returned by PIN debit purchase.  For PIN debit reversal requests, you must use the same currency that was used for the PIN debit purchase or PIN debit credit that you are reversing. For the possible values, see the [ISO Standard Currency Codes](https://developer.cybersource.com/library/documentation/sbc/quickref/currencies.pdf).  Required field for PIN Debit purchase and PIN Debit credit requests. Optional field for PIN Debit reversal requests.  #### GPX This field is optional for reversing an authorization or credit.  #### DCC for First Data Your local currency. For details, see the `currency` field description in [Dynamic Currency Conversion For First Data Using the SCMP API](http://apps.cybersource.com/library/documentation/dev_guides/DCC_FirstData_SCMP/DCC_FirstData_SCMP_API.pdf).  #### Tax Calculation Required for international tax and value added tax only. Optional for U.S. and Canadian taxes. Your local currency.
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets balanceAmount
     * @return string
     */
    public function getBalanceAmount()
    {
        return $this->container['balanceAmount'];
    }

    /**
     * Sets balanceAmount
     * @param string $balanceAmount Remaining balance on the account.  Returned by authorization service.  #### PIN debit Remaining balance on the prepaid card.  Returned by PIN debit purchase.
     * @return $this
     */
    public function setBalanceAmount($balanceAmount)
    {
        $this->container['balanceAmount'] = $balanceAmount;

        return $this;
    }

    /**
     * Gets discountAmount
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     * @param string $discountAmount Total discount amount applied to the order.
     * @return $this
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets discountPercent
     * @return float
     */
    public function getDiscountPercent()
    {
        return $this->container['discountPercent'];
    }

    /**
     * Sets discountPercent
     * @param float $discountPercent The total discount percentage applied to the invoice.
     * @return $this
     */
    public function setDiscountPercent($discountPercent)
    {
        $this->container['discountPercent'] = $discountPercent;

        return $this;
    }

    /**
     * Gets subAmount
     * @return float
     */
    public function getSubAmount()
    {
        return $this->container['subAmount'];
    }

    /**
     * Sets subAmount
     * @param float $subAmount Sub-amount of the invoice.
     * @return $this
     */
    public function setSubAmount($subAmount)
    {
        $this->container['subAmount'] = $subAmount;

        return $this;
    }

    /**
     * Gets minimumPartialAmount
     * @return float
     */
    public function getMinimumPartialAmount()
    {
        return $this->container['minimumPartialAmount'];
    }

    /**
     * Sets minimumPartialAmount
     * @param float $minimumPartialAmount The minimum partial amount required to pay the invoice.
     * @return $this
     */
    public function setMinimumPartialAmount($minimumPartialAmount)
    {
        $this->container['minimumPartialAmount'] = $minimumPartialAmount;

        return $this;
    }

    /**
     * Gets taxDetails
     * @return \CyberSource\Model\Invoicingv2invoicesOrderInformationAmountDetailsTaxDetails
     */
    public function getTaxDetails()
    {
        return $this->container['taxDetails'];
    }

    /**
     * Sets taxDetails
     * @param \CyberSource\Model\Invoicingv2invoicesOrderInformationAmountDetailsTaxDetails $taxDetails
     * @return $this
     */
    public function setTaxDetails($taxDetails)
    {
        $this->container['taxDetails'] = $taxDetails;

        return $this;
    }

    /**
     * Gets freight
     * @return \CyberSource\Model\Invoicingv2invoicesOrderInformationAmountDetailsFreight
     */
    public function getFreight()
    {
        return $this->container['freight'];
    }

    /**
     * Sets freight
     * @param \CyberSource\Model\Invoicingv2invoicesOrderInformationAmountDetailsFreight $freight
     * @return $this
     */
    public function setFreight($freight)
    {
        $this->container['freight'] = $freight;

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


