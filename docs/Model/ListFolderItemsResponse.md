# # ListFolderItemsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items** | [**\OpenAPI\Client\Model\FolderItemSummary[]**](FolderItemSummary.md) | An array of items in the folder. |
**continuation** | **string** | If the success response contains a continuation token, the folder contains more items you can list. You can use this token as a query parameter and retrieve more items from the list, for example &#x60;/v1/folders/{folderId}/items?continuation&#x3D;{continuation}&#x60;.  To retrieve all the items in a folder, you might need to make multiple requests. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
