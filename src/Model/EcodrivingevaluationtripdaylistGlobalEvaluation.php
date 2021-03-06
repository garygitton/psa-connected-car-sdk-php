<?php
/**
 * EcodrivingevaluationtripdaylistGlobalEvaluation
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
 * EcodrivingevaluationtripdaylistGlobalEvaluation Class Doc Comment
 *
 * @category Class
 * @package  Psa\ConnectedCar
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcodrivingevaluationtripdaylistGlobalEvaluation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ecodrivingevaluationtripdaylist_globalEvaluation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'duration' => 'float',
        'dateAggr' => 'float',
        'drivingMark' => 'float',
        'drivingMarkLabel' => '\Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel',
        'drivingAttitude' => 'float',
        'drivingAttitudeLabel' => '\Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel',
        'roadProfile' => 'float',
        'roadProfileLabel' => '\Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'duration' => null,
        'dateAggr' => null,
        'drivingMark' => null,
        'drivingMarkLabel' => null,
        'drivingAttitude' => null,
        'drivingAttitudeLabel' => null,
        'roadProfile' => null,
        'roadProfileLabel' => null
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
        'duration' => 'duration',
        'dateAggr' => 'dateAggr',
        'drivingMark' => 'drivingMark',
        'drivingMarkLabel' => 'drivingMarkLabel',
        'drivingAttitude' => 'drivingAttitude',
        'drivingAttitudeLabel' => 'drivingAttitudeLabel',
        'roadProfile' => 'roadProfile',
        'roadProfileLabel' => 'roadProfileLabel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'duration' => 'setDuration',
        'dateAggr' => 'setDateAggr',
        'drivingMark' => 'setDrivingMark',
        'drivingMarkLabel' => 'setDrivingMarkLabel',
        'drivingAttitude' => 'setDrivingAttitude',
        'drivingAttitudeLabel' => 'setDrivingAttitudeLabel',
        'roadProfile' => 'setRoadProfile',
        'roadProfileLabel' => 'setRoadProfileLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'duration' => 'getDuration',
        'dateAggr' => 'getDateAggr',
        'drivingMark' => 'getDrivingMark',
        'drivingMarkLabel' => 'getDrivingMarkLabel',
        'drivingAttitude' => 'getDrivingAttitude',
        'drivingAttitudeLabel' => 'getDrivingAttitudeLabel',
        'roadProfile' => 'getRoadProfile',
        'roadProfileLabel' => 'getRoadProfileLabel'
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
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['dateAggr'] = isset($data['dateAggr']) ? $data['dateAggr'] : null;
        $this->container['drivingMark'] = isset($data['drivingMark']) ? $data['drivingMark'] : null;
        $this->container['drivingMarkLabel'] = isset($data['drivingMarkLabel']) ? $data['drivingMarkLabel'] : null;
        $this->container['drivingAttitude'] = isset($data['drivingAttitude']) ? $data['drivingAttitude'] : null;
        $this->container['drivingAttitudeLabel'] = isset($data['drivingAttitudeLabel']) ? $data['drivingAttitudeLabel'] : null;
        $this->container['roadProfile'] = isset($data['roadProfile']) ? $data['roadProfile'] : null;
        $this->container['roadProfileLabel'] = isset($data['roadProfileLabel']) ? $data['roadProfileLabel'] : null;
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
     * Gets duration
     *
     * @return float
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param float $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets dateAggr
     *
     * @return float
     */
    public function getDateAggr()
    {
        return $this->container['dateAggr'];
    }

    /**
     * Sets dateAggr
     *
     * @param float $dateAggr dateAggr
     *
     * @return $this
     */
    public function setDateAggr($dateAggr)
    {
        $this->container['dateAggr'] = $dateAggr;

        return $this;
    }

    /**
     * Gets drivingMark
     *
     * @return float
     */
    public function getDrivingMark()
    {
        return $this->container['drivingMark'];
    }

    /**
     * Sets drivingMark
     *
     * @param float $drivingMark drivingMark
     *
     * @return $this
     */
    public function setDrivingMark($drivingMark)
    {
        $this->container['drivingMark'] = $drivingMark;

        return $this;
    }

    /**
     * Gets drivingMarkLabel
     *
     * @return \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel
     */
    public function getDrivingMarkLabel()
    {
        return $this->container['drivingMarkLabel'];
    }

    /**
     * Sets drivingMarkLabel
     *
     * @param \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel $drivingMarkLabel drivingMarkLabel
     *
     * @return $this
     */
    public function setDrivingMarkLabel($drivingMarkLabel)
    {
        $this->container['drivingMarkLabel'] = $drivingMarkLabel;

        return $this;
    }

    /**
     * Gets drivingAttitude
     *
     * @return float
     */
    public function getDrivingAttitude()
    {
        return $this->container['drivingAttitude'];
    }

    /**
     * Sets drivingAttitude
     *
     * @param float $drivingAttitude drivingAttitude
     *
     * @return $this
     */
    public function setDrivingAttitude($drivingAttitude)
    {
        $this->container['drivingAttitude'] = $drivingAttitude;

        return $this;
    }

    /**
     * Gets drivingAttitudeLabel
     *
     * @return \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel
     */
    public function getDrivingAttitudeLabel()
    {
        return $this->container['drivingAttitudeLabel'];
    }

    /**
     * Sets drivingAttitudeLabel
     *
     * @param \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel $drivingAttitudeLabel drivingAttitudeLabel
     *
     * @return $this
     */
    public function setDrivingAttitudeLabel($drivingAttitudeLabel)
    {
        $this->container['drivingAttitudeLabel'] = $drivingAttitudeLabel;

        return $this;
    }

    /**
     * Gets roadProfile
     *
     * @return float
     */
    public function getRoadProfile()
    {
        return $this->container['roadProfile'];
    }

    /**
     * Sets roadProfile
     *
     * @param float $roadProfile roadProfile
     *
     * @return $this
     */
    public function setRoadProfile($roadProfile)
    {
        $this->container['roadProfile'] = $roadProfile;

        return $this;
    }

    /**
     * Gets roadProfileLabel
     *
     * @return \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel
     */
    public function getRoadProfileLabel()
    {
        return $this->container['roadProfileLabel'];
    }

    /**
     * Sets roadProfileLabel
     *
     * @param \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel $roadProfileLabel roadProfileLabel
     *
     * @return $this
     */
    public function setRoadProfileLabel($roadProfileLabel)
    {
        $this->container['roadProfileLabel'] = $roadProfileLabel;

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


