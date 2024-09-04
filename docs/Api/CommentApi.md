# Integrations\Canva\SDK\CommentApi

All URIs are relative to https://api.canva.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createComment()**](CommentApi.md#createComment) | **POST** /v1/comments |  |
| [**createReply()**](CommentApi.md#createReply) | **POST** /v1/comments/{commentId}/replies |  |
| [**getComment()**](CommentApi.md#getComment) | **GET** /v1/designs/{designId}/comments/{commentId} |  |


## `createComment()`

```php
createComment($create_comment_request): \Integrations\Canva\SDK\Model\CreateCommentResponse
```



<Warning>  This API is currently provided as a preview. Be aware of the following:  - There might be unannounced breaking changes. - Any breaking changes to preview APIs won't produce a new [API version](https://www.canva.dev/docs/connect/versions/). - Public integrations that use preview APIs will not pass the review process, and can't be made available to all Canva users.  </Warning>  Create a new top-level comment on a design. For information on comments and how they're used in the Canva UI, see the [Canva Help Center](https://www.canva.com/help/comments/). A design can have a maximum of 1000 comments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_comment_request = new \Integrations\Canva\SDK\Model\CreateCommentRequest(); // \Integrations\Canva\SDK\Model\CreateCommentRequest

try {
    $result = $apiInstance->createComment($create_comment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->createComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_comment_request** | [**\Integrations\Canva\SDK\Model\CreateCommentRequest**](../Model/CreateCommentRequest.md)|  | |

### Return type

[**\Integrations\Canva\SDK\Model\CreateCommentResponse**](../Model/CreateCommentResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createReply()`

```php
createReply($comment_id, $create_reply_request): \Integrations\Canva\SDK\Model\CreateReplyResponse
```



<Warning>  This API is currently provided as a preview. Be aware of the following:  - There might be unannounced breaking changes. - Any breaking changes to preview APIs won't produce a new [API version](https://www.canva.dev/docs/connect/versions/). - Public integrations that use preview APIs will not pass the review process, and can't be made available to all Canva users.  </Warning>  Creates a reply to a comment in a design. To reply to an existing thread of comments, you can use either the `id` of the parent (original) comment, or the `thread_id` of a comment in the thread. Each comment can have a maximum of 100 replies created for it.  For information on comments and how they're used in the Canva UI, see the [Canva Help Center](https://www.canva.com/help/comments/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = KeAZEAjijEb; // string | The `id` of the comment.
$create_reply_request = new \Integrations\Canva\SDK\Model\CreateReplyRequest(); // \Integrations\Canva\SDK\Model\CreateReplyRequest

try {
    $result = $apiInstance->createReply($comment_id, $create_reply_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->createReply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**| The &#x60;id&#x60; of the comment. | |
| **create_reply_request** | [**\Integrations\Canva\SDK\Model\CreateReplyRequest**](../Model/CreateReplyRequest.md)|  | |

### Return type

[**\Integrations\Canva\SDK\Model\CreateReplyResponse**](../Model/CreateReplyResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getComment()`

```php
getComment($design_id, $comment_id): \Integrations\Canva\SDK\Model\GetCommentResponse
```



<Warning>  This API is currently provided as a preview. Be aware of the following:  - There might be unannounced breaking changes. - Any breaking changes to preview APIs won't produce a new [API version](https://www.canva.dev/docs/connect/versions/). - Public integrations that use preview APIs will not pass the review process, and can't be made available to all Canva users.  </Warning>  Gets a comment. For information on comments and how they're used in the Canva UI, see the [Canva Help Center](https://www.canva.com/help/comments/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$design_id = 'design_id_example'; // string | The design ID.
$comment_id = KeAZEAjijEb; // string | The `id` of the comment.

try {
    $result = $apiInstance->getComment($design_id, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->getComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **design_id** | **string**| The design ID. | |
| **comment_id** | **string**| The &#x60;id&#x60; of the comment. | |

### Return type

[**\Integrations\Canva\SDK\Model\GetCommentResponse**](../Model/GetCommentResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
