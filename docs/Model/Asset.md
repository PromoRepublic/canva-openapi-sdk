# # Asset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the asset. |
**name** | **string** | The name of the asset. |
**tags** | **string[]** | The user-facing tags attached to the asset. Users can add these tags to their uploaded assets, and they can search their uploaded assets in the Canva UI by searching for these tags. For information on how users use tags, see the [Canva Help Center page on asset tags](https://www.canva.com/help/add-edit-tags/). |
**import_status** | [**\OpenAPI\Client\Model\ImportStatus**](ImportStatus.md) |  | [optional]
**created_at** | **int** | When the asset was added to Canva, as a Unix timestamp (in seconds since the Unix Epoch). |
**updated_at** | **int** | When the asset was last updated in Canva, as a Unix timestamp (in seconds since the Unix Epoch). |
**thumbnail** | [**\OpenAPI\Client\Model\Thumbnail**](Thumbnail.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
