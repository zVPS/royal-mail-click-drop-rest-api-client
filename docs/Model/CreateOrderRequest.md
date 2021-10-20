# CreateOrderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderReference** | **string** |  | [optional] 
**recipient** | [**\RoyalMail\ClickAndDrop\Rest\Api\Models\RecipientDetailsRequest**](RecipientDetailsRequest.md) |  | 
**sender** | [**\RoyalMail\ClickAndDrop\Rest\Api\Models\SenderDetailsRequest**](SenderDetailsRequest.md) |  | [optional] 
**billing** | [**\RoyalMail\ClickAndDrop\Rest\Api\Models\BillingDetailsRequest**](BillingDetailsRequest.md) |  | [optional] 
**packages** | [**\RoyalMail\ClickAndDrop\Rest\Api\Models\ShipmentPackageRequest[]**](ShipmentPackageRequest.md) |  | [optional] 
**orderDate** | [**\DateTime**](\DateTime.md) |  | 
**plannedDespatchDate** | [**\DateTime**](\DateTime.md) |  | [optional] 
**specialInstructions** | **string** |  | [optional] 
**subtotal** | **float** |  | 
**shippingCostCharged** | **float** |  | 
**otherCosts** | **float** |  | [optional] 
**total** | **float** |  | 
**currencyCode** | **string** |  | [optional] 
**postageDetails** | [**\RoyalMail\ClickAndDrop\Rest\Api\Models\PostageDetailsRequest**](PostageDetailsRequest.md) |  | [optional] 
**tags** | [**\RoyalMail\ClickAndDrop\Rest\Api\Models\TagRequest[]**](TagRequest.md) |  | [optional] 
**label** | [**\RoyalMail\ClickAndDrop\Rest\Api\Models\LabelGenerationRequest**](LabelGenerationRequest.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


