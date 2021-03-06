<?php
/**
 * InlineResponse20013
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
 * InlineResponse20013 Class Doc Comment
 *
 * @category Class
 * @package  Psa\ConnectedCar
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20013 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_13';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accelerationVeh' => '\Psa\ConnectedCar\Model\EnvironmentlistInfoDayAndNight',
        'modeBV' => '\Psa\ConnectedCar\Model\RunninglistModeBV',
        'engineSpeed' => '\Psa\ConnectedCar\Model\RunninglistModeBV',
        'fuelLevel' => 'string',
        'tempOilEng' => 'string',
        'instFuelConsumption' => '\Psa\ConnectedCar\Model\RunninglistInstFuelConsumption',
        'gmpState' => 'float',
        'vin' => 'string',
        'contract' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accelerationVeh' => null,
        'modeBV' => null,
        'engineSpeed' => null,
        'fuelLevel' => null,
        'tempOilEng' => null,
        'instFuelConsumption' => null,
        'gmpState' => null,
        'vin' => null,
        'contract' => null
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
        'accelerationVeh' => 'accelerationVeh',
        'modeBV' => 'modeBV',
        'engineSpeed' => 'engineSpeed',
        'fuelLevel' => 'fuelLevel',
        'tempOilEng' => 'tempOilEng',
        'instFuelConsumption' => 'instFuelConsumption',
        'gmpState' => 'gmpState',
        'vin' => 'vin',
        'contract' => 'contract'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accelerationVeh' => 'setAccelerationVeh',
        'modeBV' => 'setModeBV',
        'engineSpeed' => 'setEngineSpeed',
        'fuelLevel' => 'setFuelLevel',
        'tempOilEng' => 'setTempOilEng',
        'instFuelConsumption' => 'setInstFuelConsumption',
        'gmpState' => 'setGmpState',
        'vin' => 'setVin',
        'contract' => 'setContract'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accelerationVeh' => 'getAccelerationVeh',
        'modeBV' => 'getModeBV',
        'engineSpeed' => 'getEngineSpeed',
        'fuelLevel' => 'getFuelLevel',
        'tempOilEng' => 'getTempOilEng',
        'instFuelConsumption' => 'getInstFuelConsumption',
        'gmpState' => 'getGmpState',
        'vin' => 'getVin',
        'contract' => 'getContract'
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
        $this->container['accelerationVeh'] = isset($data['accelerationVeh']) ? $data['accelerationVeh'] : null;
        $this->container['modeBV'] = isset($data['modeBV']) ? $data['modeBV'] : null;
        $this->container['engineSpeed'] = isset($data['engineSpeed']) ? $data['engineSpeed'] : null;
        $this->container['fuelLevel'] = isset($data['fuelLevel']) ? $data['fuelLevel'] : null;
        $this->container['tempOilEng'] = isset($data['tempOilEng']) ? $data['tempOilEng'] : null;
        $this->container['instFuelConsumption'] = isset($data['instFuelConsumption']) ? $data['instFuelConsumption'] : null;
        $this->container['gmpState'] = isset($data['gmpState']) ? $data['gmpState'] : null;
        $this->container['vin'] = isset($data['vin']) ? $data['vin'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
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
     * Gets accelerationVeh
     *
     * @return \Psa\ConnectedCar\Model\EnvironmentlistInfoDayAndNight
     */
    public function getAccelerationVeh()
    {
        return $this->container['accelerationVeh'];
    }

    /**
     * Sets accelerationVeh
     *
     * @param \Psa\ConnectedCar\Model\EnvironmentlistInfoDayAndNight $accelerationVeh accelerationVeh
     *
     * @return $this
     */
    public function setAccelerationVeh($accelerationVeh)
    {
        $this->container['accelerationVeh'] = $accelerationVeh;

        return $this;
    }

    /**
     * Gets modeBV
     *
     * @return \Psa\ConnectedCar\Model\RunninglistModeBV
     */
    public function getModeBV()
    {
        return $this->container['modeBV'];
    }

    /**
     * Sets modeBV
     *
     * @param \Psa\ConnectedCar\Model\RunninglistModeBV $modeBV modeBV
     *
     * @return $this
     */
    public function setModeBV($modeBV)
    {
        $this->container['modeBV'] = $modeBV;

        return $this;
    }

    /**
     * Gets engineSpeed
     *
     * @return \Psa\ConnectedCar\Model\RunninglistModeBV
     */
    public function getEngineSpeed()
    {
        return $this->container['engineSpeed'];
    }

    /**
     * Sets engineSpeed
     *
     * @param \Psa\ConnectedCar\Model\RunninglistModeBV $engineSpeed engineSpeed
     *
     * @return $this
     */
    public function setEngineSpeed($engineSpeed)
    {
        $this->container['engineSpeed'] = $engineSpeed;

        return $this;
    }

    /**
     * Gets fuelLevel
     *
     * @return string
     */
    public function getFuelLevel()
    {
        return $this->container['fuelLevel'];
    }

    /**
     * Sets fuelLevel
     *
     * @param string $fuelLevel fuelLevel
     *
     * @return $this
     */
    public function setFuelLevel($fuelLevel)
    {
        $this->container['fuelLevel'] = $fuelLevel;

        return $this;
    }

    /**
     * Gets tempOilEng
     *
     * @return string
     */
    public function getTempOilEng()
    {
        return $this->container['tempOilEng'];
    }

    /**
     * Sets tempOilEng
     *
     * @param string $tempOilEng tempOilEng
     *
     * @return $this
     */
    public function setTempOilEng($tempOilEng)
    {
        $this->container['tempOilEng'] = $tempOilEng;

        return $this;
    }

    /**
     * Gets instFuelConsumption
     *
     * @return \Psa\ConnectedCar\Model\RunninglistInstFuelConsumption
     */
    public function getInstFuelConsumption()
    {
        return $this->container['instFuelConsumption'];
    }

    /**
     * Sets instFuelConsumption
     *
     * @param \Psa\ConnectedCar\Model\RunninglistInstFuelConsumption $instFuelConsumption instFuelConsumption
     *
     * @return $this
     */
    public function setInstFuelConsumption($instFuelConsumption)
    {
        $this->container['instFuelConsumption'] = $instFuelConsumption;

        return $this;
    }

    /**
     * Gets gmpState
     *
     * @return float
     */
    public function getGmpState()
    {
        return $this->container['gmpState'];
    }

    /**
     * Sets gmpState
     *
     * @param float $gmpState gmpState
     *
     * @return $this
     */
    public function setGmpState($gmpState)
    {
        $this->container['gmpState'] = $gmpState;

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


