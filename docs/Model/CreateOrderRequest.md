# CreateOrderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderReference** | **string** |  | [optional] 
**recipient** | [**\RoyalMail\ClickAndDrop\Rest\Api\models\RecipientDetailsRequest**](RecipientDetailsRequest.md) |  | 
**sender** | [**\RoyalMail\ClickAndDrop\Rest\Api\models\SenderDetailsRequest**](SenderDetailsRequest.md) |  | [optional] 
**billing** | [**\RoyalMail\ClickAndDrop\Rest\Api\models\BillingDetailsRequest**](BillingDetailsRequest.md) |  | [optional] 
**packages** | [**\RoyalMail\ClickAndDrop\Rest\Api\models\ShipmentPackageRequest[]**](ShipmentPackageRequest.md) |  | [optional] 
**orderDate** | [**\DateTime**](\DateTime.md) |  | 
**plannedDespatchDate** | [**\DateTime**](\DateTime.md) |  | [optional] 
**specialInstructions** | **string** |  | [optional] 
**subtotal** | [**BigDecimal**](BigDecimal.md) |  | 
**shippingCostCharged** | [**BigDecimal**](BigDecimal.md) |  | 
**otherCosts** | [**BigDecimal**](BigDecimal.md) |  | [optional] 
**total** | [**BigDecimal**](BigDecimal.md) |  | 
**currencyCode** | **string** |  | [optional] 
**postageDetails** | [**\RoyalMail\ClickAndDrop\Rest\Api\models\PostageDetailsRequest**](PostageDetailsRequest.md) |  | [optional] 
**tags** | [**\RoyalMail\ClickAndDrop\Rest\Api\models\TagRequest[]**](TagRequest.md) |  | [optional] 
**label** | [**\RoyalMail\ClickAndDrop\Rest\Api\models\LabelGenerationRequest**](LabelGenerationRequest.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

