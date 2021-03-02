# GetOrderDetailsResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderIdentifier** | **int** |  | [optional] 
**orderStatus** | **string** |  | [optional] 
**createdOn** | [**\DateTime**](\DateTime.md) |  | [optional] 
**printedOn** | [**\DateTime**](\DateTime.md) |  | [optional] 
**shippedOn** | [**\DateTime**](\DateTime.md) |  | [optional] 
**postageAppliedOn** | [**\DateTime**](\DateTime.md) |  | [optional] 
**manifestedOn** | [**\DateTime**](\DateTime.md) |  | [optional] 
**orderDate** | [**\DateTime**](\DateTime.md) |  | [optional] 
**despatchedByOtherCourierOn** | [**\DateTime**](\DateTime.md) |  | [optional] 
**tradingName** | **string** |  | [optional] 
**channel** | **string** |  | [optional] 
**marketplaceTypeName** | **string** |  | [optional] 
**department** | **string** |  | [optional] 
**aIRNumber** | **string** |  | [optional] 
**requiresExportLicense** | **bool** |  | [optional] 
**commercialInvoiceNumber** | **string** |  | [optional] 
**commercialInvoiceDate** | [**\DateTime**](\DateTime.md) |  | [optional] 
**orderReference** | **string** |  | [optional] 
**channelShippingMethod** | **string** |  | [optional] 
**specialInstructions** | **string** |  | [optional] 
**pickerSpecialInstructions** | **string** |  | [optional] 
**subtotal** | [**BigDecimal**](BigDecimal.md) |  | 
**shippingCostCharged** | [**BigDecimal**](BigDecimal.md) |  | 
**orderDiscount** | [**BigDecimal**](BigDecimal.md) |  | 
**total** | [**BigDecimal**](BigDecimal.md) |  | 
**weightInGrams** | **int** |  | 
**packageSize** | **string** |  | [optional] 
**accountBatchNumber** | **string** |  | [optional] 
**currencyCode** | **string** |  | [optional] 
**shippingDetails** | [**\RoyalMail\ClickAndDrop\Rest\Api\models\GetShippingDetailsResult**](GetShippingDetailsResult.md) |  | 
**shippingInfo** | [**\RoyalMail\ClickAndDrop\Rest\Api\models\GetPostalDetailsResult**](GetPostalDetailsResult.md) |  | 
**billingInfo** | [**\RoyalMail\ClickAndDrop\Rest\Api\models\GetPostalDetailsResult**](GetPostalDetailsResult.md) |  | 
**orderLines** | [**\RoyalMail\ClickAndDrop\Rest\Api\models\GetOrderLineResult[]**](GetOrderLineResult.md) |  | 
**tags** | [**\RoyalMail\ClickAndDrop\Rest\Api\models\GetTagDetailsResult[]**](GetTagDetailsResult.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

