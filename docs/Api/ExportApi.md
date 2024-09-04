# Integrations\Canva\SDK\ExportApi

All URIs are relative to https://api.canva.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDesignExportJob()**](ExportApi.md#createDesignExportJob) | **POST** /v1/exports |  |
| [**getDesignExportJob()**](ExportApi.md#getDesignExportJob) | **GET** /v1/exports/{exportId} |  |


## `createDesignExportJob()`

```php
createDesignExportJob($create_design_export_job_request): \Integrations\Canva\SDK\Model\CreateDesignExportJobResponse
```



Starts a new job to export a file from Canva. Once the exported file is generated, you can download it using the link(s) provided.  The request requires the design ID and the exported file format.  Supported formats: pdf(`.pdf`), jpg(`.jpg`), png(`.png`), gif(`.gif`), pptx(`.pptx`), and mp4(`.mp4`).  You can check the status and get the results of export jobs created with this API using the [Get design export job API](https://www.canva.dev/docs/connect/api-reference/exports/get-design-export-job/).  NOTE: If you set `export_quality` to `pro`, the export might fail if the design contains [premium elements](https://www.canva.com/help/premium-elements/), and the calling user either hasn't purchased the elements or isn't on a Canva plan (such as Canva Pro) that has premium features.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_design_export_job_request = new \Integrations\Canva\SDK\Model\CreateDesignExportJobRequest(); // \Integrations\Canva\SDK\Model\CreateDesignExportJobRequest

try {
    $result = $apiInstance->createDesignExportJob($create_design_export_job_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->createDesignExportJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_design_export_job_request** | [**\Integrations\Canva\SDK\Model\CreateDesignExportJobRequest**](../Model/CreateDesignExportJobRequest.md)|  | [optional] |

### Return type

[**\Integrations\Canva\SDK\Model\CreateDesignExportJobResponse**](../Model/CreateDesignExportJobResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDesignExportJob()`

```php
getDesignExportJob($export_id): \Integrations\Canva\SDK\Model\GetDesignExportJobResponse
```



Gets the result of a design export job that was created using the [Create design export job API](https://www.canva.dev/docs/connect/api-reference/exports/create-design-export-job/).  If the job is complete, the response includes an array of download links for each page of the design.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_id = 'export_id_example'; // string | The export job ID.

try {
    $result = $apiInstance->getDesignExportJob($export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->getDesignExportJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **export_id** | **string**| The export job ID. | |

### Return type

[**\Integrations\Canva\SDK\Model\GetDesignExportJobResponse**](../Model/GetDesignExportJobResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
