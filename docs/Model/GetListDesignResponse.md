# # GetListDesignResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**continuation** | **string** | A continuation token. If the success response contains a continuation token, the list contains more designs you can list. You can use this token as a query parameter and retrieve more designs from the list, for example &#x60;/v1/designs?continuation&#x3D;{continuation}&#x60;.  To retrieve all of a user&#39;s designs, you might need to make multiple requests. | [optional]
**items** | [**\Integrations\Canva\SDK\Model\Design[]**](Design.md) | The list of designs. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
