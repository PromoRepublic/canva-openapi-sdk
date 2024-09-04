# OpenAPI\Client\FolderApi

All URIs are relative to https://api.canva.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFolder()**](FolderApi.md#createFolder) | **POST** /v1/folders |  |
| [**deleteFolder()**](FolderApi.md#deleteFolder) | **DELETE** /v1/folders/{folderId} |  |
| [**getFolder()**](FolderApi.md#getFolder) | **GET** /v1/folders/{folderId} |  |
| [**listFolderItems()**](FolderApi.md#listFolderItems) | **GET** /v1/folders/{folderId}/items |  |
| [**moveFolderItem()**](FolderApi.md#moveFolderItem) | **POST** /v1/folders/move |  |
| [**updateFolder()**](FolderApi.md#updateFolder) | **PATCH** /v1/folders/{folderId} |  |


## `createFolder()`

```php
createFolder($create_folder_request): \OpenAPI\Client\Model\CreateFolderResponse
```



<Warning>  This API is currently provided as a preview. Be aware of the following:  - There might be unannounced breaking changes. - Any breaking changes to preview APIs won't produce a new [API version](https://www.canva.dev/docs/connect/versions/). - Public integrations that use preview APIs will not pass the review process, and can't be made available to all Canva users.  </Warning>  Creates a folder in either the top level of a Canva user's [projects](https://www.canva.com/help/find-designs-and-folders/) (using the ID `root`), or another folder (using the parent folder's ID). When a folder is successfully created, the endpoint returns its folder ID, along with other information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_folder_request = new \OpenAPI\Client\Model\CreateFolderRequest(); // \OpenAPI\Client\Model\CreateFolderRequest

try {
    $result = $apiInstance->createFolder($create_folder_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->createFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_folder_request** | [**\OpenAPI\Client\Model\CreateFolderRequest**](../Model/CreateFolderRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateFolderResponse**](../Model/CreateFolderResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFolder()`

```php
deleteFolder($folder_id)
```



<Warning>  This API is currently provided as a preview. Be aware of the following:  - There might be unannounced breaking changes. - Any breaking changes to preview APIs won't produce a new [API version](https://www.canva.dev/docs/connect/versions/). - Public integrations that use preview APIs will not pass the review process, and can't be made available to all Canva users.  </Warning>  Deletes a folder with the specified `folderID`. Deleting a folder moves the user's content in the folder to the [Trash](https://www.canva.com/help/deleted-designs/) and content owned by other users is moved to the top level of the owner's [projects](https://www.canva.com/help/find-designs-and-folders/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = FAF2lZtloor; // string | The folder ID.

try {
    $apiInstance->deleteFolder($folder_id);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->deleteFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **string**| The folder ID. | |

### Return type

void (empty response body)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolder()`

```php
getFolder($folder_id): \OpenAPI\Client\Model\GetFolderResponse
```



<Warning>  This API is currently provided as a preview. Be aware of the following:  - There might be unannounced breaking changes. - Any breaking changes to preview APIs won't produce a new [API version](https://www.canva.dev/docs/connect/versions/). - Public integrations that use preview APIs will not pass the review process, and can't be made available to all Canva users.  </Warning>  Gets the name and other details of a folder using a folder's `folderID`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = FAF2lZtloor; // string | The folder ID.

try {
    $result = $apiInstance->getFolder($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->getFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **string**| The folder ID. | |

### Return type

[**\OpenAPI\Client\Model\GetFolderResponse**](../Model/GetFolderResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFolderItems()`

```php
listFolderItems($folder_id, $continuation, $item_types, $sort_by): \OpenAPI\Client\Model\ListFolderItemsResponse
```



<Warning>  This API is currently provided as a preview. Be aware of the following:  - There might be unannounced breaking changes. - Any breaking changes to preview APIs won't produce a new [API version](https://www.canva.dev/docs/connect/versions/). - Public integrations that use preview APIs will not pass the review process, and can't be made available to all Canva users.  </Warning>  Lists the items in a folder, including each item's `type`.  Folders can contain:  - Other folders. - Assets, such as uploaded images and videos. - Designs, such as Instagram posts, Presentations, and Documents ([Canva Docs](https://www.canva.com/create/documents/)). - [Brand templates](https://www.canva.com/help/manage-team-template/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = FAF2lZtloor; // string | The folder ID.
$continuation = RkFGMgXlsVTDbMd:MR3L0QjiaUzycIAjx0yMyuNiV0OildoiOwL0x32G4NjNu4FwtAQNxowUQNMMYN; // string | If the success response contains a continuation token, the folder contains more items you can list. You can use this token as a query parameter and retrieve more items from the list, for example `/v1/folders/{folderId}/items?continuation={continuation}`.  To retrieve all the items in a folder, you might need to make multiple requests.
$item_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FolderItemType()); // \OpenAPI\Client\Model\FolderItemType[] | Filter the folder items to only return specified types. The available types are: `asset`, `design`, `folder`, and `template`. To filter for more than one item type, provide a comma-delimited list.
$sort_by = title_ascending; // FolderItemSortBy | Sort the list of folder items. This can be one of the following:  - `created_ascending`: Sort results by creation date, in ascending order. - `created_descending`: Sort results by creation date, in descending order. - `modified_ascending`: Sort results by the last modified date, in ascending order. - `modified_descending`: (Default) Sort results by the last modified date, in descending order. - `title_ascending`: Sort results by title, in ascending order. The title is either the `name` field for a folder or asset, or the `title` field for a design. - `title_descending`: Sort results by title, in descending order. The title is either the `name` field for a folder or asset, or the `title` field for a design.

try {
    $result = $apiInstance->listFolderItems($folder_id, $continuation, $item_types, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->listFolderItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **string**| The folder ID. | |
| **continuation** | **string**| If the success response contains a continuation token, the folder contains more items you can list. You can use this token as a query parameter and retrieve more items from the list, for example &#x60;/v1/folders/{folderId}/items?continuation&#x3D;{continuation}&#x60;.  To retrieve all the items in a folder, you might need to make multiple requests. | [optional] |
| **item_types** | [**\OpenAPI\Client\Model\FolderItemType[]**](../Model/\OpenAPI\Client\Model\FolderItemType.md)| Filter the folder items to only return specified types. The available types are: &#x60;asset&#x60;, &#x60;design&#x60;, &#x60;folder&#x60;, and &#x60;template&#x60;. To filter for more than one item type, provide a comma-delimited list. | [optional] |
| **sort_by** | [**FolderItemSortBy**](../Model/.md)| Sort the list of folder items. This can be one of the following:  - &#x60;created_ascending&#x60;: Sort results by creation date, in ascending order. - &#x60;created_descending&#x60;: Sort results by creation date, in descending order. - &#x60;modified_ascending&#x60;: Sort results by the last modified date, in ascending order. - &#x60;modified_descending&#x60;: (Default) Sort results by the last modified date, in descending order. - &#x60;title_ascending&#x60;: Sort results by title, in ascending order. The title is either the &#x60;name&#x60; field for a folder or asset, or the &#x60;title&#x60; field for a design. - &#x60;title_descending&#x60;: Sort results by title, in descending order. The title is either the &#x60;name&#x60; field for a folder or asset, or the &#x60;title&#x60; field for a design. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListFolderItemsResponse**](../Model/ListFolderItemsResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveFolderItem()`

```php
moveFolderItem($move_folder_item_request)
```



<Warning>  This API is currently provided as a preview. Be aware of the following:  - There might be unannounced breaking changes. - Any breaking changes to preview APIs won't produce a new [API version](https://www.canva.dev/docs/connect/versions/). - Public integrations that use preview APIs will not pass the review process, and can't be made available to all Canva users.  </Warning>  Moves items from one folder to another. You must specify the the folder IDs of both the source and destination folders, as well as the ID of the item you want to move.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$move_folder_item_request = new \OpenAPI\Client\Model\MoveFolderItemRequest(); // \OpenAPI\Client\Model\MoveFolderItemRequest

try {
    $apiInstance->moveFolderItem($move_folder_item_request);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->moveFolderItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **move_folder_item_request** | [**\OpenAPI\Client\Model\MoveFolderItemRequest**](../Model/MoveFolderItemRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFolder()`

```php
updateFolder($folder_id, $update_folder_request): \OpenAPI\Client\Model\UpdateFolderResponse
```



<Warning>  This API is currently provided as a preview. Be aware of the following:  - There might be unannounced breaking changes. - Any breaking changes to preview APIs won't produce a new [API version](https://www.canva.dev/docs/connect/versions/). - Public integrations that use preview APIs will not pass the review process, and can't be made available to all Canva users.  </Warning>  Updates a folder's details using its `folderID`. Currently, you can only update a folder's name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = FAF2lZtloor; // string | The folder ID.
$update_folder_request = new \OpenAPI\Client\Model\UpdateFolderRequest(); // \OpenAPI\Client\Model\UpdateFolderRequest

try {
    $result = $apiInstance->updateFolder($folder_id, $update_folder_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->updateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **string**| The folder ID. | |
| **update_folder_request** | [**\OpenAPI\Client\Model\UpdateFolderRequest**](../Model/UpdateFolderRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateFolderResponse**](../Model/UpdateFolderResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
