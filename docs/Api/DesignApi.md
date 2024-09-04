# OpenAPI\Client\DesignApi

All URIs are relative to https://api.canva.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDesign()**](DesignApi.md#createDesign) | **POST** /v1/designs |  |
| [**getDesign()**](DesignApi.md#getDesign) | **GET** /v1/designs/{designId} |  |
| [**listDesigns()**](DesignApi.md#listDesigns) | **GET** /v1/designs |  |


## `createDesign()`

```php
createDesign($create_design_request): \OpenAPI\Client\Model\CreateDesignResponse
```



Creates a new Canva design. To create a new design, you can either:  - Use a preset design type. - Set height and width dimensions for a custom design.  Additionally, you can also provide the `asset_id` of an asset in the user's [projects](https://www.canva.com/help/find-designs-and-folders/) to add to the new design. To list the assets in a folder in the user's projects, use the [List folder items API](https://www.canva.dev/docs/connect/api-reference/folders/list-folder-items/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DesignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_design_request = new \OpenAPI\Client\Model\CreateDesignRequest(); // \OpenAPI\Client\Model\CreateDesignRequest

try {
    $result = $apiInstance->createDesign($create_design_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->createDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_design_request** | [**\OpenAPI\Client\Model\CreateDesignRequest**](../Model/CreateDesignRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateDesignResponse**](../Model/CreateDesignResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDesign()`

```php
getDesign($design_id): \OpenAPI\Client\Model\GetDesignResponse
```



Gets the metadata for a design. This includes owner information, URLs for editing and viewing, and thumbnail information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DesignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$design_id = 'design_id_example'; // string | The design ID.

try {
    $result = $apiInstance->getDesign($design_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->getDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **design_id** | **string**| The design ID. | |

### Return type

[**\OpenAPI\Client\Model\GetDesignResponse**](../Model/GetDesignResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDesigns()`

```php
listDesigns($query, $continuation, $ownership, $sort_by): \OpenAPI\Client\Model\GetListDesignResponse
```



Lists metadata for all the designs in a Canva user's [projects](https://www.canva.com/help/find-designs-and-folders/). You can also:  - Use search terms to filter the listed designs. - Show designs either created by, or shared with the user. - Sort the results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DesignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = party invites; // string | Lets you search the user's designs, and designs shared with the user, using a search term or terms.
$continuation = RkFGMgXlsVTDbMd:MR3L0QjiaUzycIAjx0yMyuNiV0OildoiOwL0x32G4NjNu4FwtAQNxowUQNMMYN; // string | If the success response contains a continuation token, the list contains more designs you can list. You can use this token as a query parameter and retrieve more designs from the list, for example `/v1/designs?continuation={continuation}`.  To retrieve all of a user's designs, you might need to make multiple requests.
$ownership = any; // OwnershipType | Filter the list of designs based on the user's ownership of the designs. This can be one of the following:  - `owned`: Designs owned by the user. - `shared`: Designs shared with the user. - `any`: Designs owned by and shared with the user.
$sort_by = relevance; // SortByType | Sort the list of designs. This can be one of the following:  - `relevance`: (Default) Sort results using a relevance algorithm. - `modified_descending`: Sort results by the date last modified in descending order. - `modified_ascending`: Sort results by the date last modified in ascending order. - `title_descending`: Sort results by title in descending order. - `title_ascending`: Sort results by title in ascending order.

try {
    $result = $apiInstance->listDesigns($query, $continuation, $ownership, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->listDesigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| Lets you search the user&#39;s designs, and designs shared with the user, using a search term or terms. | [optional] |
| **continuation** | **string**| If the success response contains a continuation token, the list contains more designs you can list. You can use this token as a query parameter and retrieve more designs from the list, for example &#x60;/v1/designs?continuation&#x3D;{continuation}&#x60;.  To retrieve all of a user&#39;s designs, you might need to make multiple requests. | [optional] |
| **ownership** | [**OwnershipType**](../Model/.md)| Filter the list of designs based on the user&#39;s ownership of the designs. This can be one of the following:  - &#x60;owned&#x60;: Designs owned by the user. - &#x60;shared&#x60;: Designs shared with the user. - &#x60;any&#x60;: Designs owned by and shared with the user. | [optional] |
| **sort_by** | [**SortByType**](../Model/.md)| Sort the list of designs. This can be one of the following:  - &#x60;relevance&#x60;: (Default) Sort results using a relevance algorithm. - &#x60;modified_descending&#x60;: Sort results by the date last modified in descending order. - &#x60;modified_ascending&#x60;: Sort results by the date last modified in ascending order. - &#x60;title_descending&#x60;: Sort results by title in descending order. - &#x60;title_ascending&#x60;: Sort results by title in ascending order. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetListDesignResponse**](../Model/GetListDesignResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
