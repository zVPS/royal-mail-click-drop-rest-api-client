# RoyalMail\ClickAndDrop\Rest\Api\OrdersApi

https://api.parcel.royalmail.com/api/v1

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrdersAsync**](OrdersApi.md#createOrdersAsync) | **POST** /orders | Create orders
[**getOrdersAsync**](OrdersApi.md#getOrdersAsync) | **GET** /orders/{orderIdentifiers} | Retrieve orders
[**getOrdersWithDetailsAsync**](OrdersApi.md#getOrdersWithDetailsAsync) | **GET** /orders/{orderIdentifiers}/full | Retrieve orders details


# **createOrdersAsync**
> \RoyalMail\ClickAndDrop\Rest\Api\Models\CreateOrdersResponse createOrdersAsync($request)

Create orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = RoyalMail\ClickAndDrop\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\ClickAndDrop\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new RoyalMail\ClickAndDrop\Rest\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \RoyalMail\ClickAndDrop\Rest\Api\Models\CreateOrdersRequest(); // \RoyalMail\ClickAndDrop\Rest\Api\Models\CreateOrdersRequest | 

try {
    $result = $apiInstance->createOrdersAsync($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrdersAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\RoyalMail\ClickAndDrop\Rest\Api\Models\CreateOrdersRequest**](../Model/CreateOrdersRequest.md)|  |

### Return type

[**\RoyalMail\ClickAndDrop\Rest\Api\Models\CreateOrdersResponse**](../Model/CreateOrdersResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrdersAsync**
> \RoyalMail\ClickAndDrop\Rest\Api\Models\GetOrderInfoResource[] getOrdersAsync($orderIdentifiers)

Retrieve orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = RoyalMail\ClickAndDrop\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\ClickAndDrop\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new RoyalMail\ClickAndDrop\Rest\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderIdentifiers = "orderIdentifiers_example"; // string | Order Identifier or several Order Identifiers separated by semicolon

try {
    $result = $apiInstance->getOrdersAsync($orderIdentifiers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrdersAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderIdentifiers** | **string**| Order Identifier or several Order Identifiers separated by semicolon |

### Return type

[**\RoyalMail\ClickAndDrop\Rest\Api\Models\GetOrderInfoResource[]**](../Model/GetOrderInfoResource.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrdersWithDetailsAsync**
> \RoyalMail\ClickAndDrop\Rest\Api\Models\GetOrderDetailsResource[] getOrdersWithDetailsAsync($orderIdentifiers)

Retrieve orders details

<b>Reserved for ChannelShipper accounts only</b>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = RoyalMail\ClickAndDrop\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\ClickAndDrop\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new RoyalMail\ClickAndDrop\Rest\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderIdentifiers = "orderIdentifiers_example"; // string | Order Identifier or several Order Identifiers separated by semicolon

try {
    $result = $apiInstance->getOrdersWithDetailsAsync($orderIdentifiers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrdersWithDetailsAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderIdentifiers** | **string**| Order Identifier or several Order Identifiers separated by semicolon |

### Return type

[**\RoyalMail\ClickAndDrop\Rest\Api\Models\GetOrderDetailsResource[]**](../Model/GetOrderDetailsResource.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

