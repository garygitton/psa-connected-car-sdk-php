# Psa\ConnectedCar\DefaultApi

All URIs are relative to *https://localhost/dev/connectedcar/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchAlertReferential**](DefaultApi.md#fetchAlertReferential) | **GET** /referential/alert | 
[**fetchAllCrash**](DefaultApi.md#fetchAllCrash) | **POST** /crash/list | 
[**fetchAllEcodrivingReferential**](DefaultApi.md#fetchAllEcodrivingReferential) | **GET** /referential/ecodriving | 
[**fetchAllEcoevaluation**](DefaultApi.md#fetchAllEcoevaluation) | **POST** /ecodriving/evaluation/list | 
[**fetchAllEcoevaluationPerDay**](DefaultApi.md#fetchAllEcoevaluationPerDay) | **POST** /ecodriving/evaluation/trip/day/list | 
[**fetchAllEcoevaluationPerMonth**](DefaultApi.md#fetchAllEcoevaluationPerMonth) | **POST** /ecodriving/evaluation/trip/month/list | 
[**fetchAllEnvironmentData**](DefaultApi.md#fetchAllEnvironmentData) | **POST** /environment/list | 
[**fetchAllLightStatus**](DefaultApi.md#fetchAllLightStatus) | **POST** /running/lightstatus/list | 
[**fetchAllMaintenanceAlert**](DefaultApi.md#fetchAllMaintenanceAlert) | **POST** /maintenance/list/alert | 
[**fetchAllMaintenanceData**](DefaultApi.md#fetchAllMaintenanceData) | **POST** /maintenance/list | 
[**fetchAllRunningData**](DefaultApi.md#fetchAllRunningData) | **POST** /running/list | 
[**fetchAllRunningDataByVehicle**](DefaultApi.md#fetchAllRunningDataByVehicle) | **GET** /running/data/{vin} | 
[**fetchAllTrip**](DefaultApi.md#fetchAllTrip) | **POST** /trip/list | 
[**fetchCrashByVehicle**](DefaultApi.md#fetchCrashByVehicle) | **GET** /crash/get/{vin} | 
[**fetchEcoevaluationByVehicle**](DefaultApi.md#fetchEcoevaluationByVehicle) | **GET** /ecodriving/evaluation/get/{vin} | 
[**fetchEcoevaluationByVehicleAndTrip**](DefaultApi.md#fetchEcoevaluationByVehicleAndTrip) | **GET** /ecodriving/evaluation/pertrip/{vin}/{tripid} | 
[**fetchEcoevaluationPerDayByVehicle**](DefaultApi.md#fetchEcoevaluationPerDayByVehicle) | **GET** /ecodriving/evaluation/trip/day/{vin} | 
[**fetchEcoevaluationPerDaytripsByVehicle**](DefaultApi.md#fetchEcoevaluationPerDaytripsByVehicle) | **GET** /ecodriving/evaluation/daytrips/{vin} | 
[**fetchEcoevaluationPerMonthByVehicle**](DefaultApi.md#fetchEcoevaluationPerMonthByVehicle) | **GET** /ecodriving/evaluation/trip/month/{vin} | 
[**fetchEnvironmentDataByVehicle**](DefaultApi.md#fetchEnvironmentDataByVehicle) | **GET** /environment/get/{vin} | 
[**fetchFuelPriceReferenceByVehicle**](DefaultApi.md#fetchFuelPriceReferenceByVehicle) | **GET** /trip/get/reference/fuelprice/{vin} | 
[**fetchLastDrivingAssistanceByVehicle**](DefaultApi.md#fetchLastDrivingAssistanceByVehicle) | **GET** /safety/drivingassistance/{vin} | 
[**fetchLastPositionByVehicle**](DefaultApi.md#fetchLastPositionByVehicle) | **GET** /place/lastposition/{vin} | 
[**fetchLastSafetyAssistanceByVehicle**](DefaultApi.md#fetchLastSafetyAssistanceByVehicle) | **GET** /safety/safetyassistance/{vin} | 
[**fetchLastTripEcoevaluationByVehicle**](DefaultApi.md#fetchLastTripEcoevaluationByVehicle) | **GET** /ecodriving/evaluation/lasttrip/{vin} | 
[**fetchLastTripsByVehicle**](DefaultApi.md#fetchLastTripsByVehicle) | **GET** /trip/last/{vin} | 
[**fetchLightStatusByVehicle**](DefaultApi.md#fetchLightStatusByVehicle) | **GET** /running/data/lightstatus/{vin} | 
[**fetchMaintenanceAlertByVehicle**](DefaultApi.md#fetchMaintenanceAlertByVehicle) | **GET** /maintenance/alert/{vin} | 
[**fetchMaintenanceDataByVehicle**](DefaultApi.md#fetchMaintenanceDataByVehicle) | **GET** /maintenance/{vin} | 
[**fetchMaintenanceReferential**](DefaultApi.md#fetchMaintenanceReferential) | **GET** /referential/maintenance | 
[**fetchPictureByVehicleAndContract**](DefaultApi.md#fetchPictureByVehicleAndContract) | **POST** /vehicle/picture/{vin}/{contract} | 
[**fetchPictureByVehicleAndContract2**](DefaultApi.md#fetchPictureByVehicleAndContract2) | **GET** /vehicle/picture/{vin}/{contract} | 
[**fetchPositionPerTripByVehicle**](DefaultApi.md#fetchPositionPerTripByVehicle) | **GET** /place/positions/trip/{vin} | 
[**fetchReferenceTripByVehicle**](DefaultApi.md#fetchReferenceTripByVehicle) | **GET** /trip/get/referencetrip/{vin} | 
[**fetchTripByVehicleAndTrip**](DefaultApi.md#fetchTripByVehicleAndTrip) | **GET** /trip/id/{vin}/{tripid} | 
[**fetchTripPerPeridByVehicle**](DefaultApi.md#fetchTripPerPeridByVehicle) | **GET** /trip/period/{vin} | 
[**fetchVehicleInformationByVehicle**](DefaultApi.md#fetchVehicleInformationByVehicle) | **GET** /vehicle/information/{vin} | 
[**searchCrashByVehicle**](DefaultApi.md#searchCrashByVehicle) | **GET** /crash/search/{vin} | 
[**searchDrivingAssistancePerDayByVehicle**](DefaultApi.md#searchDrivingAssistancePerDayByVehicle) | **GET** /safety/search/drivingassistance/day/{vin} | 
[**searchSafetyAssistancePerDayByVehicle**](DefaultApi.md#searchSafetyAssistancePerDayByVehicle) | **GET** /safety/search/safetyassistance/day/{vin} | 
[**updateFuelPriceForTripByVehicleAndTrip**](DefaultApi.md#updateFuelPriceForTripByVehicleAndTrip) | **PUT** /trip/update/fuelprice/{vin}/{tripid} | 
[**updateFuelPriceReferenceByVehicle**](DefaultApi.md#updateFuelPriceReferenceByVehicle) | **PUT** /trip/update/reference/fuelprice/{vin} | 
[**updateReferenceTripByVehicle**](DefaultApi.md#updateReferenceTripByVehicle) | **PUT** /trip/update/referencetrip/{vin} | 


# **fetchAlertReferential**
> \Psa\ConnectedCar\Model\InlineResponse20010[] fetchAlertReferential($locale, $brand)



Get data's alert from referential

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locale = ""; // string | Locale. For example : fr_FR for french
$brand = ""; // string | Brand of the vehicle : C for Citroën or DS, P for Peugeot

try {
    $result = $apiInstance->fetchAlertReferential($locale, $brand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchAlertReferential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locale** | **string**| Locale. For example : fr_FR for french | [optional] [default to ]
 **brand** | **string**| Brand of the vehicle : C for Citroën or DS, P for Peugeot | [optional] [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20010[]**](../Model/InlineResponse20010.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchAllCrash**
> \Psa\ConnectedCar\Model\InlineResponse200[] fetchAllCrash($body, $listsecond)



Get crash's data with list of vin and contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Psa\ConnectedCar\Model\Body(); // \Psa\ConnectedCar\Model\Body | List of vin and list of related contracts
$listsecond = ""; // string | Comma separated list of seconds to retrieve. Ex: 1,2,3

try {
    $result = $apiInstance->fetchAllCrash($body, $listsecond);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchAllCrash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Psa\ConnectedCar\Model\Body**](../Model/Body.md)| List of vin and list of related contracts |
 **listsecond** | **string**| Comma separated list of seconds to retrieve. Ex: 1,2,3 | [optional] [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse200[]**](../Model/InlineResponse200.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchAllEcodrivingReferential**
> \Psa\ConnectedCar\Model\InlineResponse20011[] fetchAllEcodrivingReferential($locale, $brand)



Get data's ecodriving from referential

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locale = ""; // string | Locale. For example : fr_FR for french
$brand = ""; // string | Brand of the vehicle : C for Citroën or DS, P for Peugeot

try {
    $result = $apiInstance->fetchAllEcodrivingReferential($locale, $brand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchAllEcodrivingReferential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locale** | **string**| Locale. For example : fr_FR for french | [optional] [default to ]
 **brand** | **string**| Brand of the vehicle : C for Citroën or DS, P for Peugeot | [optional] [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20011[]**](../Model/InlineResponse20011.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchAllEcoevaluation**
> \Psa\ConnectedCar\Model\InlineResponse2002[] fetchAllEcoevaluation($body, $locale, $brand)



Vehicle's ecoevaluation of all trips with list of vin and contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Psa\ConnectedCar\Model\Body1(); // \Psa\ConnectedCar\Model\Body1 | List of vin and list of related contracts
$locale = ""; // string | Locale. For example : fr_FR for french
$brand = ""; // string | Brand of the vehicle : C for Citroën or DS, P for Peugeot

try {
    $result = $apiInstance->fetchAllEcoevaluation($body, $locale, $brand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchAllEcoevaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Psa\ConnectedCar\Model\Body1**](../Model/Body1.md)| List of vin and list of related contracts |
 **locale** | **string**| Locale. For example : fr_FR for french | [default to ]
 **brand** | **string**| Brand of the vehicle : C for Citroën or DS, P for Peugeot | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2002[]**](../Model/InlineResponse2002.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchAllEcoevaluationPerDay**
> \Psa\ConnectedCar\Model\InlineResponse2003[] fetchAllEcoevaluationPerDay($body, $locale, $brand, $fromday, $today)



Get ecoevaluation per day with list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Psa\ConnectedCar\Model\Body2(); // \Psa\ConnectedCar\Model\Body2 | List of vin and list of related contracts
$locale = ""; // string | Locale. For example : fr_FR for french
$brand = ""; // string | Brand of the vehicle : C for Citroën or DS, P for Peugeot
$fromday = ""; // string | Start day. Format : yyyyMMdd
$today = ""; // string | End day. Format : yyyyMMdd

try {
    $result = $apiInstance->fetchAllEcoevaluationPerDay($body, $locale, $brand, $fromday, $today);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchAllEcoevaluationPerDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Psa\ConnectedCar\Model\Body2**](../Model/Body2.md)| List of vin and list of related contracts |
 **locale** | **string**| Locale. For example : fr_FR for french | [default to ]
 **brand** | **string**| Brand of the vehicle : C for Citroën or DS, P for Peugeot | [default to ]
 **fromday** | **string**| Start day. Format : yyyyMMdd | [default to ]
 **today** | **string**| End day. Format : yyyyMMdd | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchAllEcoevaluationPerMonth**
> \Psa\ConnectedCar\Model\InlineResponse2003[] fetchAllEcoevaluationPerMonth($body, $brand, $locale, $frommonth, $tomonth)



Get ecoevaluation per month with list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Psa\ConnectedCar\Model\Body3(); // \Psa\ConnectedCar\Model\Body3 | List of vin and list of related contracts
$brand = ""; // string | Brand of the vehicle : C for Citroën or DS, P for Peugeot
$locale = ""; // string | Locale. For example : fr_FR for french
$frommonth = ""; // string | Start month. Format: yyyyMM
$tomonth = ""; // string | End month. Format: yyyyMM

try {
    $result = $apiInstance->fetchAllEcoevaluationPerMonth($body, $brand, $locale, $frommonth, $tomonth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchAllEcoevaluationPerMonth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Psa\ConnectedCar\Model\Body3**](../Model/Body3.md)| List of vin and list of related contracts |
 **brand** | **string**| Brand of the vehicle : C for Citroën or DS, P for Peugeot | [default to ]
 **locale** | **string**| Locale. For example : fr_FR for french | [default to ]
 **frommonth** | **string**| Start month. Format: yyyyMM | [default to ]
 **tomonth** | **string**| End month. Format: yyyyMM | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchAllEnvironmentData**
> \Psa\ConnectedCar\Model\InlineResponse2005[] fetchAllEnvironmentData($body, $listsecond)



Get the last data of environment with list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Psa\ConnectedCar\Model\Body4(); // \Psa\ConnectedCar\Model\Body4 | List of vin and list of related contracts
$listsecond = ""; // string | Comma separated list of seconds to retrieve. Ex: 1,2,3

try {
    $result = $apiInstance->fetchAllEnvironmentData($body, $listsecond);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchAllEnvironmentData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Psa\ConnectedCar\Model\Body4**](../Model/Body4.md)| List of vin and list of related contracts |
 **listsecond** | **string**| Comma separated list of seconds to retrieve. Ex: 1,2,3 | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2005[]**](../Model/InlineResponse2005.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchAllLightStatus**
> \Psa\ConnectedCar\Model\InlineResponse20012[] fetchAllLightStatus($body, $listsecond)



Get light with list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Psa\ConnectedCar\Model\Body7(); // \Psa\ConnectedCar\Model\Body7 | List of vin and list of related contracts
$listsecond = ""; // string | Comma separated list of seconds to retrieve. Ex: 1,2,3

try {
    $result = $apiInstance->fetchAllLightStatus($body, $listsecond);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchAllLightStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Psa\ConnectedCar\Model\Body7**](../Model/Body7.md)| List of vin and list of related contracts |
 **listsecond** | **string**| Comma separated list of seconds to retrieve. Ex: 1,2,3 | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20012[]**](../Model/InlineResponse20012.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchAllMaintenanceAlert**
> \Psa\ConnectedCar\Model\InlineResponse2007 fetchAllMaintenanceAlert($body, $locale, $brand, $active)



Get alert's data with list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Psa\ConnectedCar\Model\Body6(); // \Psa\ConnectedCar\Model\Body6 | List of vin and list of related contracts
$locale = ""; // string | Locale. For example : fr_FR for french
$brand = ""; // string | Brand of the vehicle : C for Citroën or DS, P for Peugeot
$active = ""; // string | Used to seek an active alarm. 0 = inactive, 1 = active.

try {
    $result = $apiInstance->fetchAllMaintenanceAlert($body, $locale, $brand, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchAllMaintenanceAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Psa\ConnectedCar\Model\Body6**](../Model/Body6.md)| List of vin and list of related contracts |
 **locale** | **string**| Locale. For example : fr_FR for french | [default to ]
 **brand** | **string**| Brand of the vehicle : C for Citroën or DS, P for Peugeot | [default to ]
 **active** | **string**| Used to seek an active alarm. 0 &#x3D; inactive, 1 &#x3D; active. | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchAllMaintenanceData**
> \Psa\ConnectedCar\Model\InlineResponse2006[] fetchAllMaintenanceData($body, $locale, $brand)



Get maintenance's data with list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Psa\ConnectedCar\Model\Body5(); // \Psa\ConnectedCar\Model\Body5 | List of vin and list of related contracts
$locale = ""; // string | Locale. For example : fr_FR for french
$brand = ""; // string | Brand of the vehicle : C for Citroën or DS, P for Peugeot

try {
    $result = $apiInstance->fetchAllMaintenanceData($body, $locale, $brand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchAllMaintenanceData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Psa\ConnectedCar\Model\Body5**](../Model/Body5.md)| List of vin and list of related contracts |
 **locale** | **string**| Locale. For example : fr_FR for french | [default to ]
 **brand** | **string**| Brand of the vehicle : C for Citroën or DS, P for Peugeot | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2006[]**](../Model/InlineResponse2006.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchAllRunningData**
> \Psa\ConnectedCar\Model\InlineResponse20013[] fetchAllRunningData($body, $listsecond)



Get running's data with list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Psa\ConnectedCar\Model\Body8(); // \Psa\ConnectedCar\Model\Body8 | List of vin and list of related contracts
$listsecond = ""; // string | Comma separated list of seconds to retrieve. Ex: 1,2,3

try {
    $result = $apiInstance->fetchAllRunningData($body, $listsecond);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchAllRunningData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Psa\ConnectedCar\Model\Body8**](../Model/Body8.md)| List of vin and list of related contracts |
 **listsecond** | **string**| Comma separated list of seconds to retrieve. Ex: 1,2,3 | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20013[]**](../Model/InlineResponse20013.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchAllRunningDataByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse20013 fetchAllRunningDataByVehicle($vin, $contract, $listsecond)



Get running's data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$listsecond = ""; // string | Comma separated list of seconds to retrieve. Ex: 1,2,3

try {
    $result = $apiInstance->fetchAllRunningDataByVehicle($vin, $contract, $listsecond);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchAllRunningDataByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **listsecond** | **string**| Comma separated list of seconds to retrieve. Ex: 1,2,3 | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchAllTrip**
> \Psa\ConnectedCar\Model\InlineResponse20016 fetchAllTrip($body, $from, $to, $limit, $unit)



Get trips with list between two dates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Psa\ConnectedCar\Model\Body9(); // \Psa\ConnectedCar\Model\Body9 | List of vin and list of related contracts
$from = "from_example"; // string | Start day. Format : yyyyMMdd
$to = "to_example"; // string | End day. Format : yyyyMMdd
$limit = "limit_example"; // string | Maximum number of lines to retrieve. 10 by default
$unit = "unit_example"; // string | Unit for this trip : 0 for metric system, 1 for imperial system

try {
    $result = $apiInstance->fetchAllTrip($body, $from, $to, $limit, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchAllTrip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Psa\ConnectedCar\Model\Body9**](../Model/Body9.md)| List of vin and list of related contracts |
 **from** | **string**| Start day. Format : yyyyMMdd |
 **to** | **string**| End day. Format : yyyyMMdd |
 **limit** | **string**| Maximum number of lines to retrieve. 10 by default |
 **unit** | **string**| Unit for this trip : 0 for metric system, 1 for imperial system |

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchCrashByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse2001 fetchCrashByVehicle($vin, $contract, $listsecond)



Get the last data of crash

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$listsecond = ""; // string | Comma separated list of seconds to retrieve. Ex: 1,2,3

try {
    $result = $apiInstance->fetchCrashByVehicle($vin, $contract, $listsecond);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchCrashByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **listsecond** | **string**| Comma separated list of seconds to retrieve. Ex: 1,2,3 | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchEcoevaluationByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse2002 fetchEcoevaluationByVehicle($vin, $contract, $locale, $brand)



Ecoevaluation of all trips for a vehicle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$locale = ""; // string | Locale. For example : fr_FR for french
$brand = ""; // string | Brand of the vehicle : C for Citroën or DS, P for Peugeot

try {
    $result = $apiInstance->fetchEcoevaluationByVehicle($vin, $contract, $locale, $brand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchEcoevaluationByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **locale** | **string**| Locale. For example : fr_FR for french | [default to ]
 **brand** | **string**| Brand of the vehicle : C for Citroën or DS, P for Peugeot | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchEcoevaluationByVehicleAndTrip**
> \Psa\ConnectedCar\Model\InlineResponse2004 fetchEcoevaluationByVehicleAndTrip($vin, $tripid, $contract, $locale, $brand)



Get ecoevaluation per trip

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$tripid = "tripid_example"; // string | Trip's ID. You can get the id of a trip calling the _trip_ operation
$contract = ""; // string | Contract number
$locale = ""; // string | Locale. For example : fr_FR for french
$brand = ""; // string | Brand of the vehicle : C for Citroën or DS, P for Peugeot

try {
    $result = $apiInstance->fetchEcoevaluationByVehicleAndTrip($vin, $tripid, $contract, $locale, $brand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchEcoevaluationByVehicleAndTrip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **tripid** | **string**| Trip&#39;s ID. You can get the id of a trip calling the _trip_ operation |
 **contract** | **string**| Contract number | [default to ]
 **locale** | **string**| Locale. For example : fr_FR for french | [default to ]
 **brand** | **string**| Brand of the vehicle : C for Citroën or DS, P for Peugeot | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchEcoevaluationPerDayByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse2003[] fetchEcoevaluationPerDayByVehicle($vin, $contract, $locale, $brand, $fromday, $today)



Get ecoevaluation per day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$locale = ""; // string | Locale. For example : fr_FR for french
$brand = ""; // string | Brand of the vehicle : C for Citroën or DS, P for Peugeot
$fromday = ""; // string | Start day. Format : yyyyMMdd
$today = ""; // string | End day. Format : yyyyMMdd

try {
    $result = $apiInstance->fetchEcoevaluationPerDayByVehicle($vin, $contract, $locale, $brand, $fromday, $today);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchEcoevaluationPerDayByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **locale** | **string**| Locale. For example : fr_FR for french | [default to ]
 **brand** | **string**| Brand of the vehicle : C for Citroën or DS, P for Peugeot | [default to ]
 **fromday** | **string**| Start day. Format : yyyyMMdd | [default to ]
 **today** | **string**| End day. Format : yyyyMMdd | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchEcoevaluationPerDaytripsByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse2004[] fetchEcoevaluationPerDaytripsByVehicle($vin, $contract, $locale, $brand, $day)



Get ecoevaluation of each trip of the day indicated day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = "contract_example"; // string | Contract number
$locale = "locale_example"; // string | Locale. For example : fr_FR for french
$brand = "brand_example"; // string | Brand of the vehicle : C for Citroën or DS, P for Peugeot
$day = "day_example"; // string | Day of the evaluation. Format : yyyyMMdd

try {
    $result = $apiInstance->fetchEcoevaluationPerDaytripsByVehicle($vin, $contract, $locale, $brand, $day);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchEcoevaluationPerDaytripsByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number |
 **locale** | **string**| Locale. For example : fr_FR for french |
 **brand** | **string**| Brand of the vehicle : C for Citroën or DS, P for Peugeot |
 **day** | **string**| Day of the evaluation. Format : yyyyMMdd |

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2004[]**](../Model/InlineResponse2004.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchEcoevaluationPerMonthByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse2003[] fetchEcoevaluationPerMonthByVehicle($vin, $contract, $locale, $brand, $frommonth, $tomonth)



Get ecoevaluation per month

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$locale = ""; // string | Locale. For example : fr_FR for french
$brand = ""; // string | Brand of the vehicle : C for Citroën or DS, P for Peugeot
$frommonth = ""; // string | Start month. Format: yyyyMM
$tomonth = ""; // string | End month. Format: yyyyMM

try {
    $result = $apiInstance->fetchEcoevaluationPerMonthByVehicle($vin, $contract, $locale, $brand, $frommonth, $tomonth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchEcoevaluationPerMonthByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **locale** | **string**| Locale. For example : fr_FR for french | [default to ]
 **brand** | **string**| Brand of the vehicle : C for Citroën or DS, P for Peugeot | [default to ]
 **frommonth** | **string**| Start month. Format: yyyyMM | [default to ]
 **tomonth** | **string**| End month. Format: yyyyMM | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchEnvironmentDataByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse2005 fetchEnvironmentDataByVehicle($vin, $contract, $listsecond)



Get the last data of environment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$listsecond = ""; // string | Comma separated list of seconds to retrieve. Ex: 1,2,3

try {
    $result = $apiInstance->fetchEnvironmentDataByVehicle($vin, $contract, $listsecond);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchEnvironmentDataByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **listsecond** | **string**| Comma separated list of seconds to retrieve. Ex: 1,2,3 | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchFuelPriceReferenceByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse20018 fetchFuelPriceReferenceByVehicle($vin, $contract)



Get reference fuel price

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number

try {
    $result = $apiInstance->fetchFuelPriceReferenceByVehicle($vin, $contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchFuelPriceReferenceByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchLastDrivingAssistanceByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse20014 fetchLastDrivingAssistanceByVehicle($vin, $contract, $listsecond)



Get the last driving assistance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$listsecond = ""; // string | Comma separated list of seconds to retrieve. Ex: 1,2,3

try {
    $result = $apiInstance->fetchLastDrivingAssistanceByVehicle($vin, $contract, $listsecond);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchLastDrivingAssistanceByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **listsecond** | **string**| Comma separated list of seconds to retrieve. Ex: 1,2,3 | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchLastPositionByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse2009 fetchLastPositionByVehicle($vin, $near, $contract, $listsecond)



Get the last position of the vin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$near = ""; // string | Only for the geolocation service. The position of the car is sampled at 0.17 Hz (every 10s). With near set to 1 , if you request a second where there is no data the API will give you the next non null value.
$contract = ""; // string | Contract number
$listsecond = ""; // string | Comma separated list of seconds to retrieve. Ex: 1,2,3

try {
    $result = $apiInstance->fetchLastPositionByVehicle($vin, $near, $contract, $listsecond);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchLastPositionByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **near** | **string**| Only for the geolocation service. The position of the car is sampled at 0.17 Hz (every 10s). With near set to 1 , if you request a second where there is no data the API will give you the next non null value. | [default to ]
 **contract** | **string**| Contract number | [default to ]
 **listsecond** | **string**| Comma separated list of seconds to retrieve. Ex: 1,2,3 | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchLastSafetyAssistanceByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse20015 fetchLastSafetyAssistanceByVehicle($vin, $contract, $listsecond)



Get the last safety assistance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$listsecond = ""; // string | Comma separated list of seconds to retrieve. Ex: 1,2,3

try {
    $result = $apiInstance->fetchLastSafetyAssistanceByVehicle($vin, $contract, $listsecond);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchLastSafetyAssistanceByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **listsecond** | **string**| Comma separated list of seconds to retrieve. Ex: 1,2,3 | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchLastTripEcoevaluationByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse2004 fetchLastTripEcoevaluationByVehicle($vin, $contract, $locale, $brand)



Get ecoevaluation of the last trip

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$locale = ""; // string | Locale. For example : fr_FR for french
$brand = ""; // string | Brand of the vehicle : C for Citroën or DS, P for Peugeot

try {
    $result = $apiInstance->fetchLastTripEcoevaluationByVehicle($vin, $contract, $locale, $brand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchLastTripEcoevaluationByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **locale** | **string**| Locale. For example : fr_FR for french | [default to ]
 **brand** | **string**| Brand of the vehicle : C for Citroën or DS, P for Peugeot | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchLastTripsByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse20017 fetchLastTripsByVehicle($vin, $contract, $limit, $unit)



Get n last trip(s)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$limit = ""; // string | Maximum number of lines to retrieve
$unit = ""; // string | Unit for this trip : 0 for metric system, 1 for imperial system

try {
    $result = $apiInstance->fetchLastTripsByVehicle($vin, $contract, $limit, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchLastTripsByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **limit** | **string**| Maximum number of lines to retrieve | [default to ]
 **unit** | **string**| Unit for this trip : 0 for metric system, 1 for imperial system | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchLightStatusByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse20012 fetchLightStatusByVehicle($vin, $contract, $listsecond)



Get light's data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$listsecond = ""; // string | Comma separated list of seconds to retrieve. Ex: 1,2,3

try {
    $result = $apiInstance->fetchLightStatusByVehicle($vin, $contract, $listsecond);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchLightStatusByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **listsecond** | **string**| Comma separated list of seconds to retrieve. Ex: 1,2,3 | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchMaintenanceAlertByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse2008 fetchMaintenanceAlertByVehicle($vin, $contract, $locale, $brand, $active)



Get data's alert

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$locale = ""; // string | Locale. For example : fr_FR for french
$brand = ""; // string | Brand of the vehicle : C for Citroën or DS, P for Peugeot
$active = ""; // string | Used to seek an active alarm. 0 = inactive, 1 = active.

try {
    $result = $apiInstance->fetchMaintenanceAlertByVehicle($vin, $contract, $locale, $brand, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchMaintenanceAlertByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **locale** | **string**| Locale. For example : fr_FR for french | [default to ]
 **brand** | **string**| Brand of the vehicle : C for Citroën or DS, P for Peugeot | [default to ]
 **active** | **string**| Used to seek an active alarm. 0 &#x3D; inactive, 1 &#x3D; active. | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchMaintenanceDataByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse2006 fetchMaintenanceDataByVehicle($vin, $contract, $locale, $brand)



Get maintenance's data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$locale = ""; // string | Locale. For example : fr_FR for french
$brand = ""; // string | Brand of the vehicle : C for Citroën or DS, P for Peugeot

try {
    $result = $apiInstance->fetchMaintenanceDataByVehicle($vin, $contract, $locale, $brand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchMaintenanceDataByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **locale** | **string**| Locale. For example : fr_FR for french | [default to ]
 **brand** | **string**| Brand of the vehicle : C for Citroën or DS, P for Peugeot | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchMaintenanceReferential**
> \Psa\ConnectedCar\Model\InlineResponse20010[] fetchMaintenanceReferential($locale, $brand)



Get data's maintenance from referential

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locale = ""; // string | Locale. For example : fr_FR for french
$brand = ""; // string | Brand of the vehicle : C for Citroën or DS, P for Peugeot

try {
    $result = $apiInstance->fetchMaintenanceReferential($locale, $brand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchMaintenanceReferential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locale** | **string**| Locale. For example : fr_FR for french | [optional] [default to ]
 **brand** | **string**| Brand of the vehicle : C for Citroën or DS, P for Peugeot | [optional] [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20010[]**](../Model/InlineResponse20010.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchPictureByVehicleAndContract**
> fetchPictureByVehicleAndContract($body, $vin, $contract)



Get vehicles's pictures

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Psa\ConnectedCar\Model\Body10(); // \Psa\ConnectedCar\Model\Body10 | Picture settings
$vin = "vin_example"; // string | Vehicle's VIN
$contract = "contract_example"; // string | Contract number

try {
    $apiInstance->fetchPictureByVehicleAndContract($body, $vin, $contract);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchPictureByVehicleAndContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Psa\ConnectedCar\Model\Body10**](../Model/Body10.md)| Picture settings |
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number |

### Return type

void (empty response body)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchPictureByVehicleAndContract2**
> fetchPictureByVehicleAndContract2($vin, $contract)



Get vehicle's pictures

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = "contract_example"; // string | Contract number

try {
    $apiInstance->fetchPictureByVehicleAndContract2($vin, $contract);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchPictureByVehicleAndContract2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number |

### Return type

void (empty response body)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchPositionPerTripByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse2009[] fetchPositionPerTripByVehicle($vin, $contract, $listsecond, $near, $tripid)



Get differents positions of a trip

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$listsecond = ""; // string | Comma separated list of seconds to retrieve. Ex: 1,2,3
$near = ""; // string | Only for the geolocation service. The position of the car is sampled at 0.17 Hz (every 10s). With near set to 1 , if you request a second where there is no data the API will give you the next non null value.
$tripid = ""; // string | Trip's id. You can retreive th id of a trip calling the _trip_ operation

try {
    $result = $apiInstance->fetchPositionPerTripByVehicle($vin, $contract, $listsecond, $near, $tripid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchPositionPerTripByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **listsecond** | **string**| Comma separated list of seconds to retrieve. Ex: 1,2,3 | [default to ]
 **near** | **string**| Only for the geolocation service. The position of the car is sampled at 0.17 Hz (every 10s). With near set to 1 , if you request a second where there is no data the API will give you the next non null value. | [default to ]
 **tripid** | **string**| Trip&#39;s id. You can retreive th id of a trip calling the _trip_ operation | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2009[]**](../Model/InlineResponse2009.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchReferenceTripByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse20016 fetchReferenceTripByVehicle($vin, $contract, $unit)



Get reference trip

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$unit = ""; // string | Unit for this trip : 0 for metric system, 1 for imperial system

try {
    $result = $apiInstance->fetchReferenceTripByVehicle($vin, $contract, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchReferenceTripByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **unit** | **string**| Unit for this trip : 0 for metric system, 1 for imperial system | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchTripByVehicleAndTrip**
> \Psa\ConnectedCar\Model\InlineResponse20016Trips fetchTripByVehicleAndTrip($vin, $contract, $tripid, $unit)



Get trip with id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$tripid = "tripid_example"; // string | ID of the trip
$unit = ""; // string | Unit for this trip : 0 for metric system, 1 for imperial system

try {
    $result = $apiInstance->fetchTripByVehicleAndTrip($vin, $contract, $tripid, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchTripByVehicleAndTrip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **tripid** | **string**| ID of the trip |
 **unit** | **string**| Unit for this trip : 0 for metric system, 1 for imperial system | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20016Trips**](../Model/InlineResponse20016Trips.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchTripPerPeridByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse20017 fetchTripPerPeridByVehicle($vin, $contract, $from, $to, $limit, $unit)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = "contract_example"; // string | Contract number
$from = "from_example"; // string | Start day. Format : yyyyMMdd
$to = "to_example"; // string | End day. Format : yyyyMMdd
$limit = "limit_example"; // string | Maximum number of lines to retrieve. 10 by default
$unit = "unit_example"; // string | Unit for this trip : 0 for metric system, 1 for imperial system

try {
    $result = $apiInstance->fetchTripPerPeridByVehicle($vin, $contract, $from, $to, $limit, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchTripPerPeridByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number |
 **from** | **string**| Start day. Format : yyyyMMdd |
 **to** | **string**| End day. Format : yyyyMMdd |
 **limit** | **string**| Maximum number of lines to retrieve. 10 by default |
 **unit** | **string**| Unit for this trip : 0 for metric system, 1 for imperial system |

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchVehicleInformationByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse20019 fetchVehicleInformationByVehicle($vin, $contract)



Get vehicles's informations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = "contract_example"; // string | Contract number

try {
    $result = $apiInstance->fetchVehicleInformationByVehicle($vin, $contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchVehicleInformationByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number |

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCrashByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse2001[] searchCrashByVehicle($vin, $contract, $from, $to, $limit)



Get crash's data by date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$from = ""; // string | Start date. Format : yyyyMMddHHmm
$to = ""; // string | End date. Format : yyyyMMddHHmm
$limit = "10"; // string | Number of lines to retrieve

try {
    $result = $apiInstance->searchCrashByVehicle($vin, $contract, $from, $to, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchCrashByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **from** | **string**| Start date. Format : yyyyMMddHHmm | [default to ]
 **to** | **string**| End date. Format : yyyyMMddHHmm | [default to ]
 **limit** | **string**| Number of lines to retrieve | [optional] [default to 10]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse2001[]**](../Model/InlineResponse2001.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchDrivingAssistancePerDayByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse20014 searchDrivingAssistancePerDayByVehicle($vin, $contract, $listsecond, $day)



Get driving assistance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$listsecond = ""; // string | Comma separated list of seconds to retrieve. Ex: 1,2,3
$day = ""; // string | Day of the eveluation. Format : yyyyMMdd

try {
    $result = $apiInstance->searchDrivingAssistancePerDayByVehicle($vin, $contract, $listsecond, $day);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchDrivingAssistancePerDayByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **listsecond** | **string**| Comma separated list of seconds to retrieve. Ex: 1,2,3 | [default to ]
 **day** | **string**| Day of the eveluation. Format : yyyyMMdd | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchSafetyAssistancePerDayByVehicle**
> \Psa\ConnectedCar\Model\InlineResponse20015 searchSafetyAssistancePerDayByVehicle($vin, $contract, $listsecond, $day)



Get safety assistance per day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$listsecond = ""; // string | Comma separated list of seconds to retrieve. Ex: 1,2,3
$day = ""; // string | Day of the eveluation. Format : yyyyMMdd

try {
    $result = $apiInstance->searchSafetyAssistancePerDayByVehicle($vin, $contract, $listsecond, $day);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchSafetyAssistancePerDayByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **listsecond** | **string**| Comma separated list of seconds to retrieve. Ex: 1,2,3 | [default to ]
 **day** | **string**| Day of the eveluation. Format : yyyyMMdd | [default to ]

### Return type

[**\Psa\ConnectedCar\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFuelPriceForTripByVehicleAndTrip**
> updateFuelPriceForTripByVehicleAndTrip($vin, $tripid, $contract, $price)



Updating fuel price of a trip

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$tripid = "tripid_example"; // string | ID of the trip
$contract = ""; // string | Contract number
$price = ""; // string | Fuel price

try {
    $apiInstance->updateFuelPriceForTripByVehicleAndTrip($vin, $tripid, $contract, $price);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateFuelPriceForTripByVehicleAndTrip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **tripid** | **string**| ID of the trip |
 **contract** | **string**| Contract number | [default to ]
 **price** | **string**| Fuel price | [default to ]

### Return type

void (empty response body)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFuelPriceReferenceByVehicle**
> updateFuelPriceReferenceByVehicle($vin, $contract, $price)



Updating reference fuel price

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$price = ""; // string | Fuel price

try {
    $apiInstance->updateFuelPriceReferenceByVehicle($vin, $contract, $price);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateFuelPriceReferenceByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **price** | **string**| Fuel price | [default to ]

### Return type

void (empty response body)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReferenceTripByVehicle**
> updateReferenceTripByVehicle($vin, $contract, $tripid)



Updating reference trip

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Client ID
$config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Psa\ConnectedCar\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Psa\ConnectedCar\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vin = "vin_example"; // string | Vehicle's VIN
$contract = ""; // string | Contract number
$tripid = ""; // string | ID of the trip

try {
    $apiInstance->updateReferenceTripByVehicle($vin, $contract, $tripid);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateReferenceTripByVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| Vehicle&#39;s VIN |
 **contract** | **string**| Contract number | [default to ]
 **tripid** | **string**| ID of the trip | [default to ]

### Return type

void (empty response body)

### Authorization

[Client ID](../../README.md#Client ID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

