# ShipmentPackageRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**weightInGrams** | **int** |  | 
**packageFormatIdentifier** | **string** | &lt;b&gt;Value &#39;custom&#39; is reserved for ChannelShipper accounts only&lt;/b&gt; | 
**customPackageFormatIdentifier** | **string** | Is required if &#39;packageFormatIdentifier&#39; is provided as &#39;custom&#39;. &lt;b&gt;Reserved for ChannelShipper accounts only&lt;/b&gt;. | [optional] 
**dimensions** | [**\RoyalMail\ClickAndDrop\Rest\Api\Models\DimensionsRequest**](DimensionsRequest.md) |  | [optional] 
**contents** | [**\RoyalMail\ClickAndDrop\Rest\Api\Models\ProductItemRequest[]**](ProductItemRequest.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


