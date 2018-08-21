<?php
/**
 * InlineResponse20016Trips
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
 * InlineResponse20016Trips Class Doc Comment
 *
 * @category Class
 * @package  Psa\ConnectedCar
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20016Trips implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_16_trips';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tripId' => 'float',
        'dateTripBegin' => 'string',
        'tripDuration' => 'float',
        'dateUpdate' => 'string',
        'avgFuelConsumption' => 'float',
        'deltaFuelLevel' => 'float',
        'tripMileage' => 'float',
        'totMileage' => 'float',
        'avgSpeed' => 'float',
        'engineSpeed' => 'float',
        'engineOilTemp' => 'float',
        'fuelPrice' => 'float',
        'tripCost' => 'float',
        'referenceTrip' => 'float',
        'cO2Emission' => 'float',
        'ecoDriving' => 'float',
        'refueling' => 'float',
        'modePrivacy' => 'float',
        'refuelingCost' => 'float',
        'siphoning' => 'float',
        'siphoningCost' => 'float',
        'fuelTankLevel' => 'float',
        'tripFuelConsumption' => 'float',
        'geoLocalisation' => '\Psa\ConnectedCar\Model\InlineResponse20016GeoLocalisation',
        'vin' => 'string',
        'contract' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tripId' => null,
        'dateTripBegin' => null,
        'tripDuration' => null,
        'dateUpdate' => null,
        'avgFuelConsumption' => null,
        'deltaFuelLevel' => null,
        'tripMileage' => null,
        'totMileage' => null,
        'avgSpeed' => null,
        'engineSpeed' => null,
        'engineOilTemp' => null,
        'fuelPrice' => null,
        'tripCost' => null,
        'referenceTrip' => null,
        'cO2Emission' => null,
        'ecoDriving' => null,
        'refueling' => null,
        'modePrivacy' => null,
        'refuelingCost' => null,
        'siphoning' => null,
        'siphoningCost' => null,
        'fuelTankLevel' => null,
        'tripFuelConsumption' => null,
        'geoLocalisation' => null,
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
        'tripId' => 'tripId',
        'dateTripBegin' => 'dateTripBegin',
        'tripDuration' => 'tripDuration',
        'dateUpdate' => 'dateUpdate',
        'avgFuelConsumption' => 'avgFuelConsumption',
        'deltaFuelLevel' => 'deltaFuelLevel',
        'tripMileage' => 'tripMileage',
        'totMileage' => 'totMileage',
        'avgSpeed' => 'avgSpeed',
        'engineSpeed' => 'engineSpeed',
        'engineOilTemp' => 'engineOilTemp',
        'fuelPrice' => 'fuelPrice',
        'tripCost' => 'tripCost',
        'referenceTrip' => 'referenceTrip',
        'cO2Emission' => 'CO2Emission',
        'ecoDriving' => 'ecoDriving',
        'refueling' => 'refueling',
        'modePrivacy' => 'modePrivacy',
        'refuelingCost' => 'refuelingCost',
        'siphoning' => 'siphoning',
        'siphoningCost' => 'siphoningCost',
        'fuelTankLevel' => 'fuelTankLevel',
        'tripFuelConsumption' => 'tripFuelConsumption',
        'geoLocalisation' => 'geoLocalisation',
        'vin' => 'vin',
        'contract' => 'contract'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tripId' => 'setTripId',
        'dateTripBegin' => 'setDateTripBegin',
        'tripDuration' => 'setTripDuration',
        'dateUpdate' => 'setDateUpdate',
        'avgFuelConsumption' => 'setAvgFuelConsumption',
        'deltaFuelLevel' => 'setDeltaFuelLevel',
        'tripMileage' => 'setTripMileage',
        'totMileage' => 'setTotMileage',
        'avgSpeed' => 'setAvgSpeed',
        'engineSpeed' => 'setEngineSpeed',
        'engineOilTemp' => 'setEngineOilTemp',
        'fuelPrice' => 'setFuelPrice',
        'tripCost' => 'setTripCost',
        'referenceTrip' => 'setReferenceTrip',
        'cO2Emission' => 'setCO2Emission',
        'ecoDriving' => 'setEcoDriving',
        'refueling' => 'setRefueling',
        'modePrivacy' => 'setModePrivacy',
        'refuelingCost' => 'setRefuelingCost',
        'siphoning' => 'setSiphoning',
        'siphoningCost' => 'setSiphoningCost',
        'fuelTankLevel' => 'setFuelTankLevel',
        'tripFuelConsumption' => 'setTripFuelConsumption',
        'geoLocalisation' => 'setGeoLocalisation',
        'vin' => 'setVin',
        'contract' => 'setContract'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tripId' => 'getTripId',
        'dateTripBegin' => 'getDateTripBegin',
        'tripDuration' => 'getTripDuration',
        'dateUpdate' => 'getDateUpdate',
        'avgFuelConsumption' => 'getAvgFuelConsumption',
        'deltaFuelLevel' => 'getDeltaFuelLevel',
        'tripMileage' => 'getTripMileage',
        'totMileage' => 'getTotMileage',
        'avgSpeed' => 'getAvgSpeed',
        'engineSpeed' => 'getEngineSpeed',
        'engineOilTemp' => 'getEngineOilTemp',
        'fuelPrice' => 'getFuelPrice',
        'tripCost' => 'getTripCost',
        'referenceTrip' => 'getReferenceTrip',
        'cO2Emission' => 'getCO2Emission',
        'ecoDriving' => 'getEcoDriving',
        'refueling' => 'getRefueling',
        'modePrivacy' => 'getModePrivacy',
        'refuelingCost' => 'getRefuelingCost',
        'siphoning' => 'getSiphoning',
        'siphoningCost' => 'getSiphoningCost',
        'fuelTankLevel' => 'getFuelTankLevel',
        'tripFuelConsumption' => 'getTripFuelConsumption',
        'geoLocalisation' => 'getGeoLocalisation',
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
        $this->container['tripId'] = isset($data['tripId']) ? $data['tripId'] : null;
        $this->container['dateTripBegin'] = isset($data['dateTripBegin']) ? $data['dateTripBegin'] : null;
        $this->container['tripDuration'] = isset($data['tripDuration']) ? $data['tripDuration'] : null;
        $this->container['dateUpdate'] = isset($data['dateUpdate']) ? $data['dateUpdate'] : null;
        $this->container['avgFuelConsumption'] = isset($data['avgFuelConsumption']) ? $data['avgFuelConsumption'] : null;
        $this->container['deltaFuelLevel'] = isset($data['deltaFuelLevel']) ? $data['deltaFuelLevel'] : null;
        $this->container['tripMileage'] = isset($data['tripMileage']) ? $data['tripMileage'] : null;
        $this->container['totMileage'] = isset($data['totMileage']) ? $data['totMileage'] : null;
        $this->container['avgSpeed'] = isset($data['avgSpeed']) ? $data['avgSpeed'] : null;
        $this->container['engineSpeed'] = isset($data['engineSpeed']) ? $data['engineSpeed'] : null;
        $this->container['engineOilTemp'] = isset($data['engineOilTemp']) ? $data['engineOilTemp'] : null;
        $this->container['fuelPrice'] = isset($data['fuelPrice']) ? $data['fuelPrice'] : null;
        $this->container['tripCost'] = isset($data['tripCost']) ? $data['tripCost'] : null;
        $this->container['referenceTrip'] = isset($data['referenceTrip']) ? $data['referenceTrip'] : null;
        $this->container['cO2Emission'] = isset($data['cO2Emission']) ? $data['cO2Emission'] : null;
        $this->container['ecoDriving'] = isset($data['ecoDriving']) ? $data['ecoDriving'] : null;
        $this->container['refueling'] = isset($data['refueling']) ? $data['refueling'] : null;
        $this->container['modePrivacy'] = isset($data['modePrivacy']) ? $data['modePrivacy'] : null;
        $this->container['refuelingCost'] = isset($data['refuelingCost']) ? $data['refuelingCost'] : null;
        $this->container['siphoning'] = isset($data['siphoning']) ? $data['siphoning'] : null;
        $this->container['siphoningCost'] = isset($data['siphoningCost']) ? $data['siphoningCost'] : null;
        $this->container['fuelTankLevel'] = isset($data['fuelTankLevel']) ? $data['fuelTankLevel'] : null;
        $this->container['tripFuelConsumption'] = isset($data['tripFuelConsumption']) ? $data['tripFuelConsumption'] : null;
        $this->container['geoLocalisation'] = isset($data['geoLocalisation']) ? $data['geoLocalisation'] : null;
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
     * Gets tripId
     *
     * @return float
     */
    public function getTripId()
    {
        return $this->container['tripId'];
    }

    /**
     * Sets tripId
     *
     * @param float $tripId tripId
     *
     * @return $this
     */
    public function setTripId($tripId)
    {
        $this->container['tripId'] = $tripId;

        return $this;
    }

    /**
     * Gets dateTripBegin
     *
     * @return string
     */
    public function getDateTripBegin()
    {
        return $this->container['dateTripBegin'];
    }

    /**
     * Sets dateTripBegin
     *
     * @param string $dateTripBegin dateTripBegin
     *
     * @return $this
     */
    public function setDateTripBegin($dateTripBegin)
    {
        $this->container['dateTripBegin'] = $dateTripBegin;

        return $this;
    }

    /**
     * Gets tripDuration
     *
     * @return float
     */
    public function getTripDuration()
    {
        return $this->container['tripDuration'];
    }

    /**
     * Sets tripDuration
     *
     * @param float $tripDuration tripDuration
     *
     * @return $this
     */
    public function setTripDuration($tripDuration)
    {
        $this->container['tripDuration'] = $tripDuration;

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
     * Gets avgFuelConsumption
     *
     * @return float
     */
    public function getAvgFuelConsumption()
    {
        return $this->container['avgFuelConsumption'];
    }

    /**
     * Sets avgFuelConsumption
     *
     * @param float $avgFuelConsumption avgFuelConsumption
     *
     * @return $this
     */
    public function setAvgFuelConsumption($avgFuelConsumption)
    {
        $this->container['avgFuelConsumption'] = $avgFuelConsumption;

        return $this;
    }

    /**
     * Gets deltaFuelLevel
     *
     * @return float
     */
    public function getDeltaFuelLevel()
    {
        return $this->container['deltaFuelLevel'];
    }

    /**
     * Sets deltaFuelLevel
     *
     * @param float $deltaFuelLevel deltaFuelLevel
     *
     * @return $this
     */
    public function setDeltaFuelLevel($deltaFuelLevel)
    {
        $this->container['deltaFuelLevel'] = $deltaFuelLevel;

        return $this;
    }

    /**
     * Gets tripMileage
     *
     * @return float
     */
    public function getTripMileage()
    {
        return $this->container['tripMileage'];
    }

    /**
     * Sets tripMileage
     *
     * @param float $tripMileage tripMileage
     *
     * @return $this
     */
    public function setTripMileage($tripMileage)
    {
        $this->container['tripMileage'] = $tripMileage;

        return $this;
    }

    /**
     * Gets totMileage
     *
     * @return float
     */
    public function getTotMileage()
    {
        return $this->container['totMileage'];
    }

    /**
     * Sets totMileage
     *
     * @param float $totMileage totMileage
     *
     * @return $this
     */
    public function setTotMileage($totMileage)
    {
        $this->container['totMileage'] = $totMileage;

        return $this;
    }

    /**
     * Gets avgSpeed
     *
     * @return float
     */
    public function getAvgSpeed()
    {
        return $this->container['avgSpeed'];
    }

    /**
     * Sets avgSpeed
     *
     * @param float $avgSpeed avgSpeed
     *
     * @return $this
     */
    public function setAvgSpeed($avgSpeed)
    {
        $this->container['avgSpeed'] = $avgSpeed;

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
     * Gets engineOilTemp
     *
     * @return float
     */
    public function getEngineOilTemp()
    {
        return $this->container['engineOilTemp'];
    }

    /**
     * Sets engineOilTemp
     *
     * @param float $engineOilTemp engineOilTemp
     *
     * @return $this
     */
    public function setEngineOilTemp($engineOilTemp)
    {
        $this->container['engineOilTemp'] = $engineOilTemp;

        return $this;
    }

    /**
     * Gets fuelPrice
     *
     * @return float
     */
    public function getFuelPrice()
    {
        return $this->container['fuelPrice'];
    }

    /**
     * Sets fuelPrice
     *
     * @param float $fuelPrice fuelPrice
     *
     * @return $this
     */
    public function setFuelPrice($fuelPrice)
    {
        $this->container['fuelPrice'] = $fuelPrice;

        return $this;
    }

    /**
     * Gets tripCost
     *
     * @return float
     */
    public function getTripCost()
    {
        return $this->container['tripCost'];
    }

    /**
     * Sets tripCost
     *
     * @param float $tripCost tripCost
     *
     * @return $this
     */
    public function setTripCost($tripCost)
    {
        $this->container['tripCost'] = $tripCost;

        return $this;
    }

    /**
     * Gets referenceTrip
     *
     * @return float
     */
    public function getReferenceTrip()
    {
        return $this->container['referenceTrip'];
    }

    /**
     * Sets referenceTrip
     *
     * @param float $referenceTrip referenceTrip
     *
     * @return $this
     */
    public function setReferenceTrip($referenceTrip)
    {
        $this->container['referenceTrip'] = $referenceTrip;

        return $this;
    }

    /**
     * Gets cO2Emission
     *
     * @return float
     */
    public function getCO2Emission()
    {
        return $this->container['cO2Emission'];
    }

    /**
     * Sets cO2Emission
     *
     * @param float $cO2Emission cO2Emission
     *
     * @return $this
     */
    public function setCO2Emission($cO2Emission)
    {
        $this->container['cO2Emission'] = $cO2Emission;

        return $this;
    }

    /**
     * Gets ecoDriving
     *
     * @return float
     */
    public function getEcoDriving()
    {
        return $this->container['ecoDriving'];
    }

    /**
     * Sets ecoDriving
     *
     * @param float $ecoDriving ecoDriving
     *
     * @return $this
     */
    public function setEcoDriving($ecoDriving)
    {
        $this->container['ecoDriving'] = $ecoDriving;

        return $this;
    }

    /**
     * Gets refueling
     *
     * @return float
     */
    public function getRefueling()
    {
        return $this->container['refueling'];
    }

    /**
     * Sets refueling
     *
     * @param float $refueling refueling
     *
     * @return $this
     */
    public function setRefueling($refueling)
    {
        $this->container['refueling'] = $refueling;

        return $this;
    }

    /**
     * Gets modePrivacy
     *
     * @return float
     */
    public function getModePrivacy()
    {
        return $this->container['modePrivacy'];
    }

    /**
     * Sets modePrivacy
     *
     * @param float $modePrivacy modePrivacy
     *
     * @return $this
     */
    public function setModePrivacy($modePrivacy)
    {
        $this->container['modePrivacy'] = $modePrivacy;

        return $this;
    }

    /**
     * Gets refuelingCost
     *
     * @return float
     */
    public function getRefuelingCost()
    {
        return $this->container['refuelingCost'];
    }

    /**
     * Sets refuelingCost
     *
     * @param float $refuelingCost refuelingCost
     *
     * @return $this
     */
    public function setRefuelingCost($refuelingCost)
    {
        $this->container['refuelingCost'] = $refuelingCost;

        return $this;
    }

    /**
     * Gets siphoning
     *
     * @return float
     */
    public function getSiphoning()
    {
        return $this->container['siphoning'];
    }

    /**
     * Sets siphoning
     *
     * @param float $siphoning siphoning
     *
     * @return $this
     */
    public function setSiphoning($siphoning)
    {
        $this->container['siphoning'] = $siphoning;

        return $this;
    }

    /**
     * Gets siphoningCost
     *
     * @return float
     */
    public function getSiphoningCost()
    {
        return $this->container['siphoningCost'];
    }

    /**
     * Sets siphoningCost
     *
     * @param float $siphoningCost siphoningCost
     *
     * @return $this
     */
    public function setSiphoningCost($siphoningCost)
    {
        $this->container['siphoningCost'] = $siphoningCost;

        return $this;
    }

    /**
     * Gets fuelTankLevel
     *
     * @return float
     */
    public function getFuelTankLevel()
    {
        return $this->container['fuelTankLevel'];
    }

    /**
     * Sets fuelTankLevel
     *
     * @param float $fuelTankLevel fuelTankLevel
     *
     * @return $this
     */
    public function setFuelTankLevel($fuelTankLevel)
    {
        $this->container['fuelTankLevel'] = $fuelTankLevel;

        return $this;
    }

    /**
     * Gets tripFuelConsumption
     *
     * @return float
     */
    public function getTripFuelConsumption()
    {
        return $this->container['tripFuelConsumption'];
    }

    /**
     * Sets tripFuelConsumption
     *
     * @param float $tripFuelConsumption tripFuelConsumption
     *
     * @return $this
     */
    public function setTripFuelConsumption($tripFuelConsumption)
    {
        $this->container['tripFuelConsumption'] = $tripFuelConsumption;

        return $this;
    }

    /**
     * Gets geoLocalisation
     *
     * @return \Psa\ConnectedCar\Model\InlineResponse20016GeoLocalisation
     */
    public function getGeoLocalisation()
    {
        return $this->container['geoLocalisation'];
    }

    /**
     * Sets geoLocalisation
     *
     * @param \Psa\ConnectedCar\Model\InlineResponse20016GeoLocalisation $geoLocalisation geoLocalisation
     *
     * @return $this
     */
    public function setGeoLocalisation($geoLocalisation)
    {
        $this->container['geoLocalisation'] = $geoLocalisation;

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

