# Integrations\Canva\SDK\DesignImportApi

All URIs are relative to https://api.canva.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDesignImportJob()**](DesignImportApi.md#createDesignImportJob) | **POST** /v1/imports |  |
| [**getDesignImportJob()**](DesignImportApi.md#getDesignImportJob) | **GET** /v1/imports/{jobId} |  |


## `createDesignImportJob()`

```php
createDesignImportJob($import_metadata, $body): \Integrations\Canva\SDK\Model\CreateDesignImportJobResponse
```



<Warning>  This API is currently provided as a preview. Be aware of the following:  - There might be unannounced breaking changes. - Any breaking changes to preview APIs won't produce a new [API version](https://www.canva.dev/docs/connect/versions/). - Public integrations that use preview APIs will not pass the review process, and can't be made available to all Canva users.  </Warning>  Starts a new job to import an external file as a new design in Canva. The request format for this endpoint has an `application/octet-stream` body of bytes, and the information about the import is attached using an `Import-Metadata` header.  Supported formats: PDFs(`.pdf`), Adobe Illustrator(`.ai`), Adobe Photoshop(`.psd`), Microsoft Word(`.docx`), Microsoft Powerpoint(`.pptx`), Microsoft Excel(`.xls`, `.xlsx`), OpenOffice Draw(`.odg`), OpenOffice Presentation(`.odp`), OpenOffice Sheets(`.ods`), OpenOffice Text(`.odt`).  You can check the status and get the results of import jobs created with this API using the [Get design import job API](https://www.canva.dev/docs/connect/api-reference/design-imports/get-design-import-job/).  For upload formats and requirements, see [Canva Help — Upload formats and requirements](https://www.canva.com/help/upload-formats-requirements/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\DesignImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$import_metadata = new \Integrations\Canva\SDK\Model\DesignImportMetadata(); // DesignImportMetadata
$body = "/path/to/file.txt"; // \SplFileObject | Binary of the file to import.

try {
    $result = $apiInstance->createDesignImportJob($import_metadata, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignImportApi->createDesignImportJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import_metadata** | [**DesignImportMetadata**](../Model/.md)|  | |
| **body** | **\SplFileObject****\SplFileObject**| Binary of the file to import. | |

### Return type

[**\Integrations\Canva\SDK\Model\CreateDesignImportJobResponse**](../Model/CreateDesignImportJobResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDesignImportJob()`

```php
getDesignImportJob($job_id): \Integrations\Canva\SDK\Model\GetDesignImportJobResponse
```



<Warning>  This API is currently provided as a preview. Be aware of the following:  - There might be unannounced breaking changes. - Any breaking changes to preview APIs won't produce a new [API version](https://www.canva.dev/docs/connect/versions/). - Public integrations that use preview APIs will not pass the review process, and can't be made available to all Canva users.  </Warning>  Gets the status and results of design import jobs created using the [Create design import job API](https://www.canva.dev/docs/connect/api-reference/design-imports/create-design-import-job/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\DesignImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = f81b26fd-a33d-4c2d-9e8c-4a7aca798b17; // string | The design import job ID.

try {
    $result = $apiInstance->getDesignImportJob($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignImportApi->getDesignImportJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **string**| The design import job ID. | |

### Return type

[**\Integrations\Canva\SDK\Model\GetDesignImportJobResponse**](../Model/GetDesignImportJobResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
