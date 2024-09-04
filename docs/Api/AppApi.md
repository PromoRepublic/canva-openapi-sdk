# OpenAPI\Client\AppApi

All URIs are relative to https://api.canva.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAppJwks()**](AppApi.md#getAppJwks) | **GET** /v1/apps/{appId}/jwks |  |


## `getAppJwks()`

```php
getAppJwks($app_id): \OpenAPI\Client\Model\GetAppJwksResponse
```



Returns the Json Web Key Set (public keys) of an app. These keys are used to verify JWTs sent to app backends.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = 'app_id_example'; // string | The app id

try {
    $result = $apiInstance->getAppJwks($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->getAppJwks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app id | |

### Return type

[**\OpenAPI\Client\Model\GetAppJwksResponse**](../Model/GetAppJwksResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
