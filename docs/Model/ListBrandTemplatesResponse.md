# # ListBrandTemplatesResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**continuation** | **string** | If the success response contains a continuation token, the user has access to more brand templates you can list. You can use this token as a query parameter and retrieve more templates from the list, for example &#x60;/v1/brand-templates?continuation&#x3D;{continuation}&#x60;. To retrieve all the brand templates available to the user, you might need to make multiple requests. | [optional]
**items** | [**\OpenAPI\Client\Model\BrandTemplate[]**](BrandTemplate.md) | The list of brand templates. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
