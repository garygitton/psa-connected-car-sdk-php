<?php
/**
 * RunninglistInstFuelConsumption
 *
 * PHP version 5
 *
 * @category Class
 * @package  Psa\ConnectedCar
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Connected Car Development
 *
 * This is the first release of our connected car API. With this API you can access more than 89 signals in a car. This API is available on Peugeot, Citroën and DS cars.
 *
 * OpenAPI spec version: 1.0.5
 * Contact: connectedcar@mpsa.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Psa\ConnectedCar\Model;

use \ArrayAccess;
use \Psa\ConnectedCar\ObjectSerializer;

/**
 * RunninglistInstFuelConsumption Class Doc Comment
 *
 * @category Class
 * @package  Psa\ConnectedCar
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RunninglistInstFuelConsumption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'runninglist_instFuelConsumption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_10' => 'string',
        '_20' => 'string',
        '_30' => 'string',
        '_40' => 'string',
        '_50' => 'string',
        '_60' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_10' => null,
        '_20' => null,
        '_30' => null,
        '_40' => null,
        '_50' => null,
        '_60' => null
    ];

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
        '_10' => '10',
        '_20' => '20',
        '_30' => '30',
        '_40' => '40',
        '_50' => '50',
        '_60' => '60'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_10' => 'set10',
        '_20' => 'set20',
        '_30' => 'set30',
        '_40' => 'set40',
        '_50' => 'set50',
        '_60' => 'set60'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_10' => 'get10',
        '_20' => 'get20',
        '_30' => 'get30',
        '_40' => 'get40',
        '_50' => 'get50',
        '_60' => 'get60'
    ];

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
        $this->container['_10'] = isset($data['_10']) ? $data['_10'] : null;
        $this->container['_20'] = isset($data['_20']) ? $data['_20'] : null;
        $this->container['_30'] = isset($data['_30']) ? $data['_30'] : null;
        $this->container['_40'] = isset($data['_40']) ? $data['_40'] : null;
        $this->container['_50'] = isset($data['_50']) ? $data['_50'] : null;
        $this->container['_60'] = isset($data['_60']) ? $data['_60'] : null;
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
     * Gets _10
     *
     * @return string
     */
    public function get10()
    {
        return $this->container['_10'];
    }

    /**
     * Sets _10
     *
     * @param string $_10 _10
     *
     * @return $this
     */
    public function set10($_10)
    {
        $this->container['_10'] = $_10;

        return $this;
    }

    /**
     * Gets _20
     *
     * @return string
     */
    public function get20()
    {
        return $this->container['_20'];
    }

    /**
     * Sets _20
     *
     * @param string $_20 _20
     *
     * @return $this
     */
    public function set20($_20)
    {
        $this->container['_20'] = $_20;

        return $this;
    }

    /**
     * Gets _30
     *
     * @return string
     */
    public function get30()
    {
        return $this->container['_30'];
    }

    /**
     * Sets _30
     *
     * @param string $_30 _30
     *
     * @return $this
     */
    public function set30($_30)
    {
        $this->container['_30'] = $_30;

        return $this;
    }

    /**
     * Gets _40
     *
     * @return string
     */
    public function get40()
    {
        return $this->container['_40'];
    }

    /**
     * Sets _40
     *
     * @param string $_40 _40
     *
     * @return $this
     */
    public function set40($_40)
    {
        $this->container['_40'] = $_40;

        return $this;
    }

    /**
     * Gets _50
     *
     * @return string
     */
    public function get50()
    {
        return $this->container['_50'];
    }

    /**
     * Sets _50
     *
     * @param string $_50 _50
     *
     * @return $this
     */
    public function set50($_50)
    {
        $this->container['_50'] = $_50;

        return $this;
    }

    /**
     * Gets _60
     *
     * @return string
     */
    public function get60()
    {
        return $this->container['_60'];
    }

    /**
     * Sets _60
     *
     * @param string $_60 _60
     *
     * @return $this
     */
    public function set60($_60)
    {
        $this->container['_60'] = $_60;

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


