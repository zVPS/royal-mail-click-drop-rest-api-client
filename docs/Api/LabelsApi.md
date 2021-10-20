# RoyalMail\ClickAndDrop\Rest\Api\LabelsApi

https://api.parcel.royalmail.com/api/v1

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrdersLabelAsync**](LabelsApi.md#getOrdersLabelAsync) | **GET** /orders/{orderIdentifiers}/label | Return a single PDF file with generated label and/or associated document(s)


# **getOrdersLabelAsync**
> \SplFileObject getOrdersLabelAsync($orderIdentifiers, $documentType, $includeReturnsLabel, $includeCN)

Return a single PDF file with generated label and/or associated document(s)

<b>Reserved for ChannelShipper accounts only</b></br></br>The account \"Label format\" settings page will control the page format settings used to print the postage label and associated documents.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = RoyalMail\ClickAndDrop\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\ClickAndDrop\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new RoyalMail\ClickAndDrop\Rest\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderIdentifiers = "orderIdentifiers_example"; // string | Order Identifier or several Order Identifiers separated by semicolon
$documentType = "documentType_example"; // string | Document generation mode. When documentType is set to \"postageLabel\" the additional parameters below must be used. These additional parameters will be ignored when documentType is not set to \"postageLabel\"
$includeReturnsLabel = true; // bool | Include returns label. Required when documentType is set to 'postageLabel'
$includeCN = true; // bool | Include CN22/CN23 with label. Optional parameter. If this parameter is used the setting will override the default account behaviour specified in the \"Label format\" setting \"Generate customs declarations with orders\"

try {
    $result = $apiInstance->getOrdersLabelAsync($orderIdentifiers, $documentType, $includeReturnsLabel, $includeCN);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->getOrdersLabelAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderIdentifiers** | **string**| Order Identifier or several Order Identifiers separated by semicolon |
 **documentType** | **string**| Document generation mode. When documentType is set to \&quot;postageLabel\&quot; the additional parameters below must be used. These additional parameters will be ignored when documentType is not set to \&quot;postageLabel\&quot; |
 **includeReturnsLabel** | **bool**| Include returns label. Required when documentType is set to &#39;postageLabel&#39; | [optional]
 **includeCN** | **bool**| Include CN22/CN23 with label. Optional parameter. If this parameter is used the setting will override the default account behaviour specified in the \&quot;Label format\&quot; setting \&quot;Generate customs declarations with orders\&quot; | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

