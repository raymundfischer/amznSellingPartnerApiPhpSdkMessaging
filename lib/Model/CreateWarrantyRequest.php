<?php
/**
 * CreateWarrantyRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  amznSellingPartnerApiPhpSdk\Messaging
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Messaging
 *
 * With the Messaging API you can build applications that send messages to buyers. You can get a list of message types that are available for an order that you specify, then call an operation that sends a message to the buyer for that order. The Messaging API returns responses that are formed according to the <a href=https://tools.ietf.org/html/draft-kelly-json-hal-08>JSON Hypertext Application Language</a> (HAL) standard.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace amznSellingPartnerApiPhpSdk\Messaging\Model;

use \ArrayAccess;
use \amznSellingPartnerApiPhpSdk\Messaging\ObjectSerializer;

/**
 * CreateWarrantyRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for the createWarranty operation.
 * @package  amznSellingPartnerApiPhpSdk\Messaging
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateWarrantyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateWarrantyRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attachments' => '\amznSellingPartnerApiPhpSdk\Messaging\Model\Attachment[]',
'coverage_start_date' => '\DateTime',
'coverage_end_date' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attachments' => null,
'coverage_start_date' => 'date-time',
'coverage_end_date' => 'date-time'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'attachments' => 'attachments',
'coverage_start_date' => 'coverageStartDate',
'coverage_end_date' => 'coverageEndDate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachments' => 'setAttachments',
'coverage_start_date' => 'setCoverageStartDate',
'coverage_end_date' => 'setCoverageEndDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachments' => 'getAttachments',
'coverage_start_date' => 'getCoverageStartDate',
'coverage_end_date' => 'getCoverageEndDate'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['coverage_start_date'] = isset($data['coverage_start_date']) ? $data['coverage_start_date'] : null;
        $this->container['coverage_end_date'] = isset($data['coverage_end_date']) ? $data['coverage_end_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets attachments
     *
     * @return \amznSellingPartnerApiPhpSdk\Messaging\Model\Attachment[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \amznSellingPartnerApiPhpSdk\Messaging\Model\Attachment[] $attachments Attachments to include in the message to the buyer.
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets coverage_start_date
     *
     * @return \DateTime
     */
    public function getCoverageStartDate()
    {
        return $this->container['coverage_start_date'];
    }

    /**
     * Sets coverage_start_date
     *
     * @param \DateTime $coverage_start_date The start date of the warranty coverage to include in the message to the buyer.
     *
     * @return $this
     */
    public function setCoverageStartDate($coverage_start_date)
    {
        $this->container['coverage_start_date'] = $coverage_start_date;

        return $this;
    }

    /**
     * Gets coverage_end_date
     *
     * @return \DateTime
     */
    public function getCoverageEndDate()
    {
        return $this->container['coverage_end_date'];
    }

    /**
     * Sets coverage_end_date
     *
     * @param \DateTime $coverage_end_date The end date of the warranty coverage to include in the message to the buyer.
     *
     * @return $this
     */
    public function setCoverageEndDate($coverage_end_date)
    {
        $this->container['coverage_end_date'] = $coverage_end_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
