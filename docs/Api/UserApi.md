# Integrations\Canva\SDK\UserApi

All URIs are relative to https://api.canva.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserProfile()**](UserApi.md#getUserProfile) | **GET** /v1/users/me/profile |  |
| [**usersMe()**](UserApi.md#usersMe) | **GET** /v1/users/me |  |


## `getUserProfile()`

```php
getUserProfile(): \Integrations\Canva\SDK\Model\UserProfileResponse
```



Currently, this returns the display name of the user account associated with the provided access token. More user information is expected to be included in the future.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Integrations\Canva\SDK\Model\UserProfileResponse**](../Model/UserProfileResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersMe()`

```php
usersMe(): \Integrations\Canva\SDK\Model\UsersMeResponse
```



Returns the User ID, Team ID, and display name of the user account associated with the provided access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->usersMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Integrations\Canva\SDK\Model\UsersMeResponse**](../Model/UsersMeResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
