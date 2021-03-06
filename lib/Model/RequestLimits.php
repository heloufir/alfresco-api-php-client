<?php
/**
 * RequestLimits
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfresco
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Alfresco Content Services REST API
 *
 * **API**  Provides access to the features of Alfresco Content Services.
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Alfresco\Model;

use \ArrayAccess;

/**
 * RequestLimits Class Doc Comment
 *
 * @category    Class
 * @description Limit the time and resources used for query execution
 * @package     Alfresco
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RequestLimits implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RequestLimits';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'permission_evaluation_time' => 'int',
        'permission_evaluation_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'permission_evaluation_time' => null,
        'permission_evaluation_count' => null
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
        'permission_evaluation_time' => 'permissionEvaluationTime',
        'permission_evaluation_count' => 'permissionEvaluationCount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'permission_evaluation_time' => 'setPermissionEvaluationTime',
        'permission_evaluation_count' => 'setPermissionEvaluationCount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'permission_evaluation_time' => 'getPermissionEvaluationTime',
        'permission_evaluation_count' => 'getPermissionEvaluationCount'
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
        $this->container['permission_evaluation_time'] = isset($data['permission_evaluation_time']) ? $data['permission_evaluation_time'] : null;
        $this->container['permission_evaluation_count'] = isset($data['permission_evaluation_count']) ? $data['permission_evaluation_count'] : null;
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
     * Gets permission_evaluation_time
     * @return int
     */
    public function getPermissionEvaluationTime()
    {
        return $this->container['permission_evaluation_time'];
    }

    /**
     * Sets permission_evaluation_time
     * @param int $permission_evaluation_time Maximum time for post query permission evaluation
     * @return $this
     */
    public function setPermissionEvaluationTime($permission_evaluation_time)
    {
        $this->container['permission_evaluation_time'] = $permission_evaluation_time;

        return $this;
    }

    /**
     * Gets permission_evaluation_count
     * @return int
     */
    public function getPermissionEvaluationCount()
    {
        return $this->container['permission_evaluation_count'];
    }

    /**
     * Sets permission_evaluation_count
     * @param int $permission_evaluation_count Maximum count of post query permission evaluations
     * @return $this
     */
    public function setPermissionEvaluationCount($permission_evaluation_count)
    {
        $this->container['permission_evaluation_count'] = $permission_evaluation_count;

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
            return json_encode(\Alfresco\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Alfresco\ObjectSerializer::sanitizeForSerialization($this));
    }
}


