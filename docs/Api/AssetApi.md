# Integrations\Canva\SDK\AssetApi

All URIs are relative to https://api.canva.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAssetUploadJob()**](AssetApi.md#createAssetUploadJob) | **POST** /v1/asset-uploads |  |
| [**deleteAsset()**](AssetApi.md#deleteAsset) | **DELETE** /v1/assets/{assetId} |  |
| [**getAsset()**](AssetApi.md#getAsset) | **GET** /v1/assets/{assetId} |  |
| [**getAssetUploadJob()**](AssetApi.md#getAssetUploadJob) | **GET** /v1/asset-uploads/{jobId} |  |
| [**updateAsset()**](AssetApi.md#updateAsset) | **PATCH** /v1/assets/{assetId} |  |


## `createAssetUploadJob()`

```php
createAssetUploadJob($asset_upload_metadata, $body): \Integrations\Canva\SDK\Model\CreateAssetUploadJobResponse
```



Starts a new job to upload an asset to a user's content library.  The request format for this endpoint is an `application/octet-stream` body of bytes. Attach information about the upload using an `Asset-Upload-Metadata` header.  You can check the status and get the results of asset upload jobs created with this API using the [Get asset upload job API](https://www.canva.dev/docs/connect/api-reference/assets/get-asset-upload-job/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_upload_metadata = new \Integrations\Canva\SDK\Model\AssetUploadMetadata(); // AssetUploadMetadata
$body = "/path/to/file.txt"; // \SplFileObject | Binary of the asset to upload.

try {
    $result = $apiInstance->createAssetUploadJob($asset_upload_metadata, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->createAssetUploadJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_upload_metadata** | [**AssetUploadMetadata**](../Model/.md)|  | |
| **body** | **\SplFileObject****\SplFileObject**| Binary of the asset to upload. | |

### Return type

[**\Integrations\Canva\SDK\Model\CreateAssetUploadJobResponse**](../Model/CreateAssetUploadJobResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAsset()`

```php
deleteAsset($asset_id)
```



You can delete an asset by specifying its `assetId`. This operation mirrors the behavior in the Canva UI. Deleting an item moves it to the trash. Deleting an asset doesn't remove it from designs that already use it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string | The ID of the asset.

try {
    $apiInstance->deleteAsset($asset_id);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->deleteAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_id** | **string**| The ID of the asset. | |

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

## `getAsset()`

```php
getAsset($asset_id): \Integrations\Canva\SDK\Model\GetAssetResponse
```



You can retrieve the metadata of an asset by specifying its `assetId`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string | The ID of the asset.

try {
    $result = $apiInstance->getAsset($asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_id** | **string**| The ID of the asset. | |

### Return type

[**\Integrations\Canva\SDK\Model\GetAssetResponse**](../Model/GetAssetResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetUploadJob()`

```php
getAssetUploadJob($job_id): \Integrations\Canva\SDK\Model\GetAssetUploadJobResponse
```



Get the result of an asset upload job that was created using the [Create asset upload job API](https://www.canva.dev/docs/connect/api-reference/assets/create-asset-upload-job/).  You might need to make multiple requests to this endpoint until you get a `success` or `failed` status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 'job_id_example'; // string | The asset upload job ID.

try {
    $result = $apiInstance->getAssetUploadJob($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getAssetUploadJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **string**| The asset upload job ID. | |

### Return type

[**\Integrations\Canva\SDK\Model\GetAssetUploadJobResponse**](../Model/GetAssetUploadJobResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAsset()`

```php
updateAsset($asset_id, $update_asset_request): \Integrations\Canva\SDK\Model\UpdateAssetResponse
```



You can update the name and tags of an asset by specifying its `assetId`. Updating the tags replaces all existing tags of the asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 'asset_id_example'; // string | The ID of the asset.
$update_asset_request = new \Integrations\Canva\SDK\Model\UpdateAssetRequest(); // \Integrations\Canva\SDK\Model\UpdateAssetRequest

try {
    $result = $apiInstance->updateAsset($asset_id, $update_asset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->updateAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset_id** | **string**| The ID of the asset. | |
| **update_asset_request** | [**\Integrations\Canva\SDK\Model\UpdateAssetRequest**](../Model/UpdateAssetRequest.md)|  | [optional] |

### Return type

[**\Integrations\Canva\SDK\Model\UpdateAssetResponse**](../Model/UpdateAssetResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
