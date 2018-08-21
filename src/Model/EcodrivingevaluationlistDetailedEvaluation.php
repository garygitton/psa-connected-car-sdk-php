<?php
/**
 * EcodrivingevaluationlistDetailedEvaluation
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
 * EcodrivingevaluationlistDetailedEvaluation Class Doc Comment
 *
 * @category Class
 * @package  Psa\ConnectedCar
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcodrivingevaluationlistDetailedEvaluation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ecodrivingevaluationlist_detailedEvaluation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acceleration' => 'float',
        'accelerationLabel' => '\Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel',
        'braking' => 'float',
        'brakingLabel' => '\Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel',
        'engineSpeed' => 'float',
        'engineSpeedLabel' => '\Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel',
        'stopAndStart' => 'float',
        'stopAndStartLabel' => '\Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel',
        'speed' => 'float',
        'speedLabel' => '\Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel',
        'slope' => 'float',
        'slopeLabel' => '\Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel',
        'coldTrips' => 'float',
        'coldTripsLabel' => '\Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acceleration' => null,
        'accelerationLabel' => null,
        'braking' => null,
        'brakingLabel' => null,
        'engineSpeed' => null,
        'engineSpeedLabel' => null,
        'stopAndStart' => null,
        'stopAndStartLabel' => null,
        'speed' => null,
        'speedLabel' => null,
        'slope' => null,
        'slopeLabel' => null,
        'coldTrips' => null,
        'coldTripsLabel' => null
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
        'acceleration' => 'acceleration',
        'accelerationLabel' => 'accelerationLabel',
        'braking' => 'braking',
        'brakingLabel' => 'brakingLabel',
        'engineSpeed' => 'engineSpeed',
        'engineSpeedLabel' => 'engineSpeedLabel',
        'stopAndStart' => 'stopAndStart',
        'stopAndStartLabel' => 'stopAndStartLabel',
        'speed' => 'speed',
        'speedLabel' => 'speedLabel',
        'slope' => 'slope',
        'slopeLabel' => 'slopeLabel',
        'coldTrips' => 'coldTrips',
        'coldTripsLabel' => 'coldTripsLabel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acceleration' => 'setAcceleration',
        'accelerationLabel' => 'setAccelerationLabel',
        'braking' => 'setBraking',
        'brakingLabel' => 'setBrakingLabel',
        'engineSpeed' => 'setEngineSpeed',
        'engineSpeedLabel' => 'setEngineSpeedLabel',
        'stopAndStart' => 'setStopAndStart',
        'stopAndStartLabel' => 'setStopAndStartLabel',
        'speed' => 'setSpeed',
        'speedLabel' => 'setSpeedLabel',
        'slope' => 'setSlope',
        'slopeLabel' => 'setSlopeLabel',
        'coldTrips' => 'setColdTrips',
        'coldTripsLabel' => 'setColdTripsLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acceleration' => 'getAcceleration',
        'accelerationLabel' => 'getAccelerationLabel',
        'braking' => 'getBraking',
        'brakingLabel' => 'getBrakingLabel',
        'engineSpeed' => 'getEngineSpeed',
        'engineSpeedLabel' => 'getEngineSpeedLabel',
        'stopAndStart' => 'getStopAndStart',
        'stopAndStartLabel' => 'getStopAndStartLabel',
        'speed' => 'getSpeed',
        'speedLabel' => 'getSpeedLabel',
        'slope' => 'getSlope',
        'slopeLabel' => 'getSlopeLabel',
        'coldTrips' => 'getColdTrips',
        'coldTripsLabel' => 'getColdTripsLabel'
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
        $this->container['acceleration'] = isset($data['acceleration']) ? $data['acceleration'] : null;
        $this->container['accelerationLabel'] = isset($data['accelerationLabel']) ? $data['accelerationLabel'] : null;
        $this->container['braking'] = isset($data['braking']) ? $data['braking'] : null;
        $this->container['brakingLabel'] = isset($data['brakingLabel']) ? $data['brakingLabel'] : null;
        $this->container['engineSpeed'] = isset($data['engineSpeed']) ? $data['engineSpeed'] : null;
        $this->container['engineSpeedLabel'] = isset($data['engineSpeedLabel']) ? $data['engineSpeedLabel'] : null;
        $this->container['stopAndStart'] = isset($data['stopAndStart']) ? $data['stopAndStart'] : null;
        $this->container['stopAndStartLabel'] = isset($data['stopAndStartLabel']) ? $data['stopAndStartLabel'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
        $this->container['speedLabel'] = isset($data['speedLabel']) ? $data['speedLabel'] : null;
        $this->container['slope'] = isset($data['slope']) ? $data['slope'] : null;
        $this->container['slopeLabel'] = isset($data['slopeLabel']) ? $data['slopeLabel'] : null;
        $this->container['coldTrips'] = isset($data['coldTrips']) ? $data['coldTrips'] : null;
        $this->container['coldTripsLabel'] = isset($data['coldTripsLabel']) ? $data['coldTripsLabel'] : null;
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
     * Gets acceleration
     *
     * @return float
     */
    public function getAcceleration()
    {
        return $this->container['acceleration'];
    }

    /**
     * Sets acceleration
     *
     * @param float $acceleration acceleration
     *
     * @return $this
     */
    public function setAcceleration($acceleration)
    {
        $this->container['acceleration'] = $acceleration;

        return $this;
    }

    /**
     * Gets accelerationLabel
     *
     * @return \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel
     */
    public function getAccelerationLabel()
    {
        return $this->container['accelerationLabel'];
    }

    /**
     * Sets accelerationLabel
     *
     * @param \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel $accelerationLabel accelerationLabel
     *
     * @return $this
     */
    public function setAccelerationLabel($accelerationLabel)
    {
        $this->container['accelerationLabel'] = $accelerationLabel;

        return $this;
    }

    /**
     * Gets braking
     *
     * @return float
     */
    public function getBraking()
    {
        return $this->container['braking'];
    }

    /**
     * Sets braking
     *
     * @param float $braking braking
     *
     * @return $this
     */
    public function setBraking($braking)
    {
        $this->container['braking'] = $braking;

        return $this;
    }

    /**
     * Gets brakingLabel
     *
     * @return \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel
     */
    public function getBrakingLabel()
    {
        return $this->container['brakingLabel'];
    }

    /**
     * Sets brakingLabel
     *
     * @param \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel $brakingLabel brakingLabel
     *
     * @return $this
     */
    public function setBrakingLabel($brakingLabel)
    {
        $this->container['brakingLabel'] = $brakingLabel;

        return $this;
    }

    /**
     * Gets engineSpeed
     *
     * @return float
     */
    public function getEngineSpeed()
    {
        return $this->container['engineSpeed'];
    }

    /**
     * Sets engineSpeed
     *
     * @param float $engineSpeed engineSpeed
     *
     * @return $this
     */
    public function setEngineSpeed($engineSpeed)
    {
        $this->container['engineSpeed'] = $engineSpeed;

        return $this;
    }

    /**
     * Gets engineSpeedLabel
     *
     * @return \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel
     */
    public function getEngineSpeedLabel()
    {
        return $this->container['engineSpeedLabel'];
    }

    /**
     * Sets engineSpeedLabel
     *
     * @param \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel $engineSpeedLabel engineSpeedLabel
     *
     * @return $this
     */
    public function setEngineSpeedLabel($engineSpeedLabel)
    {
        $this->container['engineSpeedLabel'] = $engineSpeedLabel;

        return $this;
    }

    /**
     * Gets stopAndStart
     *
     * @return float
     */
    public function getStopAndStart()
    {
        return $this->container['stopAndStart'];
    }

    /**
     * Sets stopAndStart
     *
     * @param float $stopAndStart stopAndStart
     *
     * @return $this
     */
    public function setStopAndStart($stopAndStart)
    {
        $this->container['stopAndStart'] = $stopAndStart;

        return $this;
    }

    /**
     * Gets stopAndStartLabel
     *
     * @return \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel
     */
    public function getStopAndStartLabel()
    {
        return $this->container['stopAndStartLabel'];
    }

    /**
     * Sets stopAndStartLabel
     *
     * @param \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel $stopAndStartLabel stopAndStartLabel
     *
     * @return $this
     */
    public function setStopAndStartLabel($stopAndStartLabel)
    {
        $this->container['stopAndStartLabel'] = $stopAndStartLabel;

        return $this;
    }

    /**
     * Gets speed
     *
     * @return float
     */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
     * Sets speed
     *
     * @param float $speed speed
     *
     * @return $this
     */
    public function setSpeed($speed)
    {
        $this->container['speed'] = $speed;

        return $this;
    }

    /**
     * Gets speedLabel
     *
     * @return \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel
     */
    public function getSpeedLabel()
    {
        return $this->container['speedLabel'];
    }

    /**
     * Sets speedLabel
     *
     * @param \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel $speedLabel speedLabel
     *
     * @return $this
     */
    public function setSpeedLabel($speedLabel)
    {
        $this->container['speedLabel'] = $speedLabel;

        return $this;
    }

    /**
     * Gets slope
     *
     * @return float
     */
    public function getSlope()
    {
        return $this->container['slope'];
    }

    /**
     * Sets slope
     *
     * @param float $slope slope
     *
     * @return $this
     */
    public function setSlope($slope)
    {
        $this->container['slope'] = $slope;

        return $this;
    }

    /**
     * Gets slopeLabel
     *
     * @return \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel
     */
    public function getSlopeLabel()
    {
        return $this->container['slopeLabel'];
    }

    /**
     * Sets slopeLabel
     *
     * @param \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel $slopeLabel slopeLabel
     *
     * @return $this
     */
    public function setSlopeLabel($slopeLabel)
    {
        $this->container['slopeLabel'] = $slopeLabel;

        return $this;
    }

    /**
     * Gets coldTrips
     *
     * @return float
     */
    public function getColdTrips()
    {
        return $this->container['coldTrips'];
    }

    /**
     * Sets coldTrips
     *
     * @param float $coldTrips coldTrips
     *
     * @return $this
     */
    public function setColdTrips($coldTrips)
    {
        $this->container['coldTrips'] = $coldTrips;

        return $this;
    }

    /**
     * Gets coldTripsLabel
     *
     * @return \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel
     */
    public function getColdTripsLabel()
    {
        return $this->container['coldTripsLabel'];
    }

    /**
     * Sets coldTripsLabel
     *
     * @param \Psa\ConnectedCar\Model\EcodrivingevaluationlistGlobalEvaluationDrivingMarkLabel $coldTripsLabel coldTripsLabel
     *
     * @return $this
     */
    public function setColdTripsLabel($coldTripsLabel)
    {
        $this->container['coldTripsLabel'] = $coldTripsLabel;

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


