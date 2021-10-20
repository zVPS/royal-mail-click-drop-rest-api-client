# RoyalMail\ClickAndDrop\Rest\Api\VersionApi

https://api.parcel.royalmail.com/api/v1

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVersionAsync**](VersionApi.md#getVersionAsync) | **GET** /version | Get API version details.


# **getVersionAsync**
> \RoyalMail\ClickAndDrop\Rest\Api\Models\GetVersionResource getVersionAsync()

Get API version details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RoyalMail\ClickAndDrop\Rest\Api\VersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getVersionAsync();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersionApi->getVersionAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RoyalMail\ClickAndDrop\Rest\Api\Models\GetVersionResource**](../Model/GetVersionResource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

