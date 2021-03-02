# ShipmentPackageRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**weightInGrams** | **int** |  | 
**packageFormatIdentifier** | **string** | &lt;b&gt;Value &#x27;custom&#x27; is reserved for ChannelShipper accounts only&lt;/b&gt; | 
**customPackageFormatIdentifier** | **string** | Is required if &#x27;packageFormatIdentifier&#x27; is provided as &#x27;custom&#x27;. &lt;b&gt;Reserved for ChannelShipper accounts only&lt;/b&gt;. | [optional] 
**dimensions** | [**\RoyalMail\ClickAndDrop\Rest\Api\models\DimensionsRequest**](DimensionsRequest.md) |  | [optional] 
**contents** | [**\RoyalMail\ClickAndDrop\Rest\Api\models\ProductItemRequest[]**](ProductItemRequest.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

