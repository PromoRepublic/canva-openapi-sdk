# Integrations\Canva\SDK\ConnectApi

All URIs are relative to https://api.canva.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSigningPublicKeys()**](ConnectApi.md#getSigningPublicKeys) | **GET** /v1/connect/keys |  |


## `getSigningPublicKeys()`

```php
getSigningPublicKeys(): \Integrations\Canva\SDK\Model\GetSigningPublicKeysResponse
```



<Warning>  This API is currently provided as a preview. Be aware of the following:  - There might be unannounced breaking changes. - Any breaking changes to preview APIs won't produce a new [API version](https://www.canva.dev/docs/connect/versions/). - Public integrations that use preview APIs will not pass the review process, and can't be made available to all Canva users.  </Warning>  The Keys API (`connect/keys`) is a security measure you can use to verify the authenticity of webhooks you receive from Canva Connect. The Keys API returns a [JSON Web Key (JWK)](https://www.rfc-editor.org/rfc/rfc7517#section-2), which you can use to decrypt the webhook signature and verify it came from Canva and not a potentially malicious actor. This helps to protect your systems from [Replay attacks](https://owasp.org/Top10/A08_2021-Software_and_Data_Integrity_Failures/).  The keys returned by the Keys API can rotate. We recommend you cache the keys you receive from this API where possible, and only access this API when you receive a webhook signed with an unrecognized key. This allows you to verify webhooks quicker than accessing this API every time you receive a webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Integrations\Canva\SDK\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSigningPublicKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getSigningPublicKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Integrations\Canva\SDK\Model\GetSigningPublicKeysResponse**](../Model/GetSigningPublicKeysResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
