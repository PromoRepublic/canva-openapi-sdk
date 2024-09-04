# OpenAPI\Client\AutofillApi

All URIs are relative to https://api.canva.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDesignAutofillJob()**](AutofillApi.md#createDesignAutofillJob) | **POST** /v1/autofills |  |
| [**getDesignAutofillJob()**](AutofillApi.md#getDesignAutofillJob) | **GET** /v1/autofills/{jobId} |  |


## `createDesignAutofillJob()`

```php
createDesignAutofillJob($create_design_autofill_job_request): \OpenAPI\Client\Model\CreateDesignAutofillJobResponse
```



<Warning>  Later this year, we'll be updating all brand template IDs. If your integration stores brand template IDs, you'll need to migrate to the new IDs. Once we implement this change, you'll have 6 months to update the IDs.  </Warning>  <Note>  To use this API, your integration must act on behalf of a user that's a member of a [Canva Enterprise](https://www.canva.com/enterprise/) organization.  </Note>  Starts a new job to autofill a Canva design using a brand template and input data.  To get a list of input data fields, use the [Get brand template dataset API](https://www.canva.dev/docs/connect/api-reference/brand-templates/get-brand-template-dataset/).  Brand templates contain references to image media. You can reference image media by providing the value of `type` with `image` within the `data` object. The number of references to image media within a brand template cannot currently exceed 300 references.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AutofillApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_design_autofill_job_request = new \OpenAPI\Client\Model\CreateDesignAutofillJobRequest(); // \OpenAPI\Client\Model\CreateDesignAutofillJobRequest

try {
    $result = $apiInstance->createDesignAutofillJob($create_design_autofill_job_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutofillApi->createDesignAutofillJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_design_autofill_job_request** | [**\OpenAPI\Client\Model\CreateDesignAutofillJobRequest**](../Model/CreateDesignAutofillJobRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateDesignAutofillJobResponse**](../Model/CreateDesignAutofillJobResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDesignAutofillJob()`

```php
getDesignAutofillJob($job_id): \OpenAPI\Client\Model\GetDesignAutofillJobResponse
```



<Note>  To use this API, your integration must act on behalf of a user that's a member of a [Canva Enterprise](https://www.canva.com/enterprise/) organization.  </Note>  Get the result of a design autofill job that was created using the [Create a design autofill job API](https://www.canva.dev/docs/connect/api-reference/autofills/create-design-autofill-job/).  You might need to make multiple requests to this endpoint until you get a `success` or `failed` status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AutofillApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 'job_id_example'; // string | The design autofill job ID.

try {
    $result = $apiInstance->getDesignAutofillJob($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutofillApi->getDesignAutofillJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **string**| The design autofill job ID. | |

### Return type

[**\OpenAPI\Client\Model\GetDesignAutofillJobResponse**](../Model/GetDesignAutofillJobResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
