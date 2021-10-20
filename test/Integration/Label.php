<?php

require_once(__DIR__ . '/../../vendor/autoload.php');

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