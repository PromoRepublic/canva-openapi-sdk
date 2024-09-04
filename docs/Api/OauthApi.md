# Integrations\Canva\SDK\OauthApi

All URIs are relative to https://api.canva.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exchangeAccessToken()**](OauthApi.md#exchangeAccessToken) | **POST** /v1/oauth/token |  |
| [**introspectToken()**](OauthApi.md#introspectToken) | **POST** /v1/oauth/introspect |  |
| [**revokeTokens()**](OauthApi.md#revokeTokens) | **POST** /v1/oauth/revoke |  |


## `exchangeAccessToken()`

```php
exchangeAccessToken($grant_type, $code_verifier, $code, $client_id, $client_secret, $redirect_uri, $refresh_token, $scope): \Integrations\Canva\SDK\Model\ExchangeAccessTokenResponse
```



This endpoint implements the OAuth 2.0 `token` endpoint, as part of the Authorization Code flow with Proof Key for Code Exchange (PKCE). For more information, see [Authentication](https://www.canva.dev/docs/connect/authentication/).  To generate an access token, you must provide one of the following:  - An authorization code - A refresh token  Generating a token using either an authorization code or a refresh token allows your integration to act on behalf of a user. You must first [obtain user authorization and get an authorization code](https://www.canva.dev/docs/connect/authentication/#obtain-user-authorization).  Access tokens may be up to 4 KB in size, and are only valid for a specified period of time. The expiry time (currently 4 hours) is shown in the endpoint response and is subject to change.  **Endpoint authentication**  Requests to this endpoint require authentication with your client ID and client secret, using _one_ of the following methods:  - **Basic access authentication** (Recommended): For [basic access authentication](https://en.wikipedia.org/wiki/Basic_access_authentication), the `{credentials}` string must be a Base64 encoded value of `{client id}:{client secret}`. - **Body parameters**: Provide your integration's credentials using the `client_id` and `client_secret` body parameters.  **Generate an access token using an authorization code**  To generate an access token with an authorization code, you must:  - Set `grant_type` to `authorization_code`. - Provide the `code_verifier` value that you generated when creating the user authorization URL. - Provide the authorization code you received after the user authorized the integration.  **Generate an access token using a refresh token**  Using the `refresh_token` value from a previous user token request, you can get a new access token with the same or smaller scope as the previous one, but with a refreshed expiry time. You will also receive a new refresh token that you can use to refresh the access token again.  To refresh an existing access token, you must:  - Set `grant_type` to `refresh_token`. - Provide the `refresh_token` from a previous token request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Integrations\Canva\SDK\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grant_type = 'grant_type_example'; // string | For generating an access token using a refresh token.
$code_verifier = 'code_verifier_example'; // string | The `code_verifier` value that you generated when creating the user authorization URL.
$code = 'code_example'; // string | The authorization code you received after the user authorized the integration.
$client_id = 'client_id_example'; // string | Your integration's unique ID, for authenticating the request.  NOTE: We recommend that you use basic access authentication instead of specifying `client_id` and `client_secret` as body parameters.
$client_secret = 'client_secret_example'; // string | Your integration's client secret, for authenticating the request. Begins with `cnvca`.  NOTE: We recommend that you use basic access authentication instead of specifying `client_id` and `client_secret` as body parameters.
$redirect_uri = 'redirect_uri_example'; // string | Only required if a redirect URL was supplied when you [created the user authorization URL](https://www.canva.dev/docs/connect/authentication/#create-the-authorization-url).  Must be one of those already specified by the client. If not supplied, the first redirect_uri defined for the client will be used by default.
$refresh_token = 'refresh_token_example'; // string | The refresh token to be exchanged. You can copy this value from the successful response received when generating an access token.
$scope = 'scope_example'; // string | Optional scope value when refreshing an access token. Separate multiple [scopes](https://www.canva.dev/docs/connect/appendix/scopes/) with a single space between each scope.  The requested scope cannot include any permissions not already granted, so this parameter allows you to limit the scope when refreshing a token. If omitted, the scope for the token remains unchanged.

try {
    $result = $apiInstance->exchangeAccessToken($grant_type, $code_verifier, $code, $client_id, $client_secret, $redirect_uri, $refresh_token, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->exchangeAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grant_type** | **string**| For generating an access token using a refresh token. | [optional] |
| **code_verifier** | **string**| The &#x60;code_verifier&#x60; value that you generated when creating the user authorization URL. | [optional] |
| **code** | **string**| The authorization code you received after the user authorized the integration. | [optional] |
| **client_id** | **string**| Your integration&#39;s unique ID, for authenticating the request.  NOTE: We recommend that you use basic access authentication instead of specifying &#x60;client_id&#x60; and &#x60;client_secret&#x60; as body parameters. | [optional] |
| **client_secret** | **string**| Your integration&#39;s client secret, for authenticating the request. Begins with &#x60;cnvca&#x60;.  NOTE: We recommend that you use basic access authentication instead of specifying &#x60;client_id&#x60; and &#x60;client_secret&#x60; as body parameters. | [optional] |
| **redirect_uri** | **string**| Only required if a redirect URL was supplied when you [created the user authorization URL](https://www.canva.dev/docs/connect/authentication/#create-the-authorization-url).  Must be one of those already specified by the client. If not supplied, the first redirect_uri defined for the client will be used by default. | [optional] |
| **refresh_token** | **string**| The refresh token to be exchanged. You can copy this value from the successful response received when generating an access token. | [optional] |
| **scope** | **string**| Optional scope value when refreshing an access token. Separate multiple [scopes](https://www.canva.dev/docs/connect/appendix/scopes/) with a single space between each scope.  The requested scope cannot include any permissions not already granted, so this parameter allows you to limit the scope when refreshing a token. If omitted, the scope for the token remains unchanged. | [optional] |

### Return type

[**\Integrations\Canva\SDK\Model\ExchangeAccessTokenResponse**](../Model/ExchangeAccessTokenResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `introspectToken()`

```php
introspectToken($token, $client_id, $client_secret): \Integrations\Canva\SDK\Model\IntrospectTokenResponse
```



Introspect an access token to see whether it is valid and active. You can also verify some token properties, such as its claims, scopes, and validity times.  Requests to this endpoint require authentication with your client ID and client secret, using _one_ of the following methods:  - **Basic access authentication** (Recommended): For [basic access authentication](https://en.wikipedia.org/wiki/Basic_access_authentication), the `{credentials}` string must be a Base64 encoded value of `{client id}:{client secret}`. - **Body parameters**: Provide your integration's credentials using the `client_id` and `client_secret` body parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Integrations\Canva\SDK\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The token to introspect.
$client_id = 'client_id_example'; // string | Your integration's unique ID, for authenticating the request.  NOTE: We recommend that you use basic access authentication instead of specifying `client_id` and `client_secret` as body parameters.
$client_secret = 'client_secret_example'; // string | Your integration's client secret, for authenticating the request. Begins with `cnvca`.  NOTE: We recommend that you use basic access authentication instead of specifying `client_id` and `client_secret` as body parameters.

try {
    $result = $apiInstance->introspectToken($token, $client_id, $client_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->introspectToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| The token to introspect. | |
| **client_id** | **string**| Your integration&#39;s unique ID, for authenticating the request.  NOTE: We recommend that you use basic access authentication instead of specifying &#x60;client_id&#x60; and &#x60;client_secret&#x60; as body parameters. | [optional] |
| **client_secret** | **string**| Your integration&#39;s client secret, for authenticating the request. Begins with &#x60;cnvca&#x60;.  NOTE: We recommend that you use basic access authentication instead of specifying &#x60;client_id&#x60; and &#x60;client_secret&#x60; as body parameters. | [optional] |

### Return type

[**\Integrations\Canva\SDK\Model\IntrospectTokenResponse**](../Model/IntrospectTokenResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeTokens()`

```php
revokeTokens($token, $client_id, $client_secret): object
```



Revoke an access token or a refresh token.  If you revoke a _refresh token_, be aware that:  - The refresh token's lineage is also revoked. This means that access tokens created from that refresh token are also revoked. - The user's consent for your integration is also revoked. This means that the user must go through the OAuth process again to use your integration.  Requests to this endpoint require authentication with your client ID and client secret, using _one_ of the following methods:  - **Basic access authentication** (Recommended): For [basic access authentication](https://en.wikipedia.org/wiki/Basic_access_authentication), the `{credentials}` string must be a Base64 encoded value of `{client id}:{client secret}`. - **Body parameters**: Provide your integration's credentials using the `client_id` and `client_secret` body parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Integrations\Canva\SDK\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The token to revoke.
$client_id = 'client_id_example'; // string | Your integration's unique ID, for authenticating the request.  NOTE: We recommend that you use basic access authentication instead of specifying `client_id` and `client_secret` as body parameters.
$client_secret = 'client_secret_example'; // string | Your integration's client secret, for authenticating the request. Begins with `cnvca`.  NOTE: We recommend that you use basic access authentication instead of specifying `client_id` and `client_secret` as body parameters.

try {
    $result = $apiInstance->revokeTokens($token, $client_id, $client_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->revokeTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| The token to revoke. | |
| **client_id** | **string**| Your integration&#39;s unique ID, for authenticating the request.  NOTE: We recommend that you use basic access authentication instead of specifying &#x60;client_id&#x60; and &#x60;client_secret&#x60; as body parameters. | [optional] |
| **client_secret** | **string**| Your integration&#39;s client secret, for authenticating the request. Begins with &#x60;cnvca&#x60;.  NOTE: We recommend that you use basic access authentication instead of specifying &#x60;client_id&#x60; and &#x60;client_secret&#x60; as body parameters. | [optional] |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
