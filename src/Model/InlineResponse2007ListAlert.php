<?php
/**
 * InlineResponse2007ListAlert
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
 * InlineResponse2007ListAlert Class Doc Comment
 *
 * @category Class
 * @package  Psa\ConnectedCar
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2007ListAlert implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_7_listAlert';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'idAlert' => 'string',
        'dateUpdate' => 'string',
        'vin' => 'string',
        'contract' => 'string',
        'dateAlertBegin' => 'string',
        'dateAlertEnd' => 'string',
        'alertState' => 'float',
        'alert' => 'string',
        'advise' => 'string',
        'category' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'idAlert' => null,
        'dateUpdate' => null,
        'vin' => null,
        'contract' => null,
        'dateAlertBegin' => null,
        'dateAlertEnd' => null,
        'alertState' => null,
        'alert' => null,
        'advise' => null,
        'category' => null
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
        'idAlert' => 'idAlert',
        'dateUpdate' => 'dateUpdate',
        'vin' => 'vin',
        'contract' => 'contract',
        'dateAlertBegin' => 'dateAlertBegin',
        'dateAlertEnd' => 'dateAlertEnd',
        'alertState' => 'alertState',
        'alert' => 'alert',
        'advise' => 'advise',
        'category' => 'category'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'idAlert' => 'setIdAlert',
        'dateUpdate' => 'setDateUpdate',
        'vin' => 'setVin',
        'contract' => 'setContract',
        'dateAlertBegin' => 'setDateAlertBegin',
        'dateAlertEnd' => 'setDateAlertEnd',
        'alertState' => 'setAlertState',
        'alert' => 'setAlert',
        'advise' => 'setAdvise',
        'category' => 'setCategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'idAlert' => 'getIdAlert',
        'dateUpdate' => 'getDateUpdate',
        'vin' => 'getVin',
        'contract' => 'getContract',
        'dateAlertBegin' => 'getDateAlertBegin',
        'dateAlertEnd' => 'getDateAlertEnd',
        'alertState' => 'getAlertState',
        'alert' => 'getAlert',
        'advise' => 'getAdvise',
        'category' => 'getCategory'
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
        $this->container['idAlert'] = isset($data['idAlert']) ? $data['idAlert'] : null;
        $this->container['dateUpdate'] = isset($data['dateUpdate']) ? $data['dateUpdate'] : null;
        $this->container['vin'] = isset($data['vin']) ? $data['vin'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['dateAlertBegin'] = isset($data['dateAlertBegin']) ? $data['dateAlertBegin'] : null;
        $this->container['dateAlertEnd'] = isset($data['dateAlertEnd']) ? $data['dateAlertEnd'] : null;
        $this->container['alertState'] = isset($data['alertState']) ? $data['alertState'] : null;
        $this->container['alert'] = isset($data['alert']) ? $data['alert'] : null;
        $this->container['advise'] = isset($data['advise']) ? $data['advise'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
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
     * Gets idAlert
     *
     * @return string
     */
    public function getIdAlert()
    {
        return $this->container['idAlert'];
    }

    /**
     * Sets idAlert
     *
     * @param string $idAlert idAlert
     *
     * @return $this
     */
    public function setIdAlert($idAlert)
    {
        $this->container['idAlert'] = $idAlert;

        return $this;
    }

    /**
     * Gets dateUpdate
     *
     * @return string
     */
    public function getDateUpdate()
    {
        return $this->container['dateUpdate'];
    }

    /**
     * Sets dateUpdate
     *
     * @param string $dateUpdate dateUpdate
     *
     * @return $this
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->container['dateUpdate'] = $dateUpdate;

        return $this;
    }

    /**
     * Gets vin
     *
     * @return string
     */
    public function getVin()
    {
        return $this->container['vin'];
    }

    /**
     * Sets vin
     *
     * @param string $vin vin
     *
     * @return $this
     */
    public function setVin($vin)
    {
        $this->container['vin'] = $vin;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return string
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param string $contract contract
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets dateAlertBegin
     *
     * @return string
     */
    public function getDateAlertBegin()
    {
        return $this->container['dateAlertBegin'];
    }

    /**
     * Sets dateAlertBegin
     *
     * @param string $dateAlertBegin dateAlertBegin
     *
     * @return $this
     */
    public function setDateAlertBegin($dateAlertBegin)
    {
        $this->container['dateAlertBegin'] = $dateAlertBegin;

        return $this;
    }

    /**
     * Gets dateAlertEnd
     *
     * @return string
     */
    public function getDateAlertEnd()
    {
        return $this->container['dateAlertEnd'];
    }

    /**
     * Sets dateAlertEnd
     *
     * @param string $dateAlertEnd dateAlertEnd
     *
     * @return $this
     */
    public function setDateAlertEnd($dateAlertEnd)
    {
        $this->container['dateAlertEnd'] = $dateAlertEnd;

        return $this;
    }

    /**
     * Gets alertState
     *
     * @return float
     */
    public function getAlertState()
    {
        return $this->container['alertState'];
    }

    /**
     * Sets alertState
     *
     * @param float $alertState alertState
     *
     * @return $this
     */
    public function setAlertState($alertState)
    {
        $this->container['alertState'] = $alertState;

        return $this;
    }

    /**
     * Gets alert
     *
     * @return string
     */
    public function getAlert()
    {
        return $this->container['alert'];
    }

    /**
     * Sets alert
     *
     * @param string $alert alert
     *
     * @return $this
     */
    public function setAlert($alert)
    {
        $this->container['alert'] = $alert;

        return $this;
    }

    /**
     * Gets advise
     *
     * @return string
     */
    public function getAdvise()
    {
        return $this->container['advise'];
    }

    /**
     * Sets advise
     *
     * @param string $advise advise
     *
     * @return $this
     */
    public function setAdvise($advise)
    {
        $this->container['advise'] = $advise;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

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


