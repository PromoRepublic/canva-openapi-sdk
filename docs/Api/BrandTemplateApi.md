# Integrations\Canva\SDK\BrandTemplateApi

All URIs are relative to https://api.canva.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBrandTemplate()**](BrandTemplateApi.md#getBrandTemplate) | **GET** /v1/brand-templates/{brandTemplateId} |  |
| [**getBrandTemplateDataset()**](BrandTemplateApi.md#getBrandTemplateDataset) | **GET** /v1/brand-templates/{brandTemplateId}/dataset |  |
| [**listBrandTemplates()**](BrandTemplateApi.md#listBrandTemplates) | **GET** /v1/brand-templates |  |


## `getBrandTemplate()`

```php
getBrandTemplate($brand_template_id): \Integrations\Canva\SDK\Model\GetBrandTemplateResponse
```



<Warning>  Later this year, we'll be updating all brand template IDs. If your integration stores brand template IDs, you'll need to migrate to the new IDs. Once we implement this change, you'll have 6 months to update the IDs.  </Warning>  <Note>  To use this API, your integration must act on behalf of a user that's a member of a [Canva Enterprise](https://www.canva.com/enterprise/) organization.  </Note>  Retrieves the metadata for a brand template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\BrandTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand_template_id = 'brand_template_id_example'; // string | The brand template ID.

try {
    $result = $apiInstance->getBrandTemplate($brand_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandTemplateApi->getBrandTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand_template_id** | **string**| The brand template ID. | |

### Return type

[**\Integrations\Canva\SDK\Model\GetBrandTemplateResponse**](../Model/GetBrandTemplateResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBrandTemplateDataset()`

```php
getBrandTemplateDataset($brand_template_id): \Integrations\Canva\SDK\Model\GetBrandTemplateDatasetResponse
```



<Warning>  Later this year, we'll be updating all brand template IDs. If your integration stores brand template IDs, you'll need to migrate to the new IDs. Once we implement this change, you'll have 6 months to update the IDs.  </Warning>  <Note>  To use this API, your integration must act on behalf of a user that's a member of a [Canva Enterprise](https://www.canva.com/enterprise/) organization.  </Note>  Gets the dataset definition of a brand template. If the brand template contains autofill data fields, this API returns an object with the data field names and the type of data they accept.  You can autofill a brand template using the [Create a design autofill job API](https://www.canva.dev/docs/connect/api-reference/autofills/create-design-autofill-job/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\BrandTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand_template_id = 'brand_template_id_example'; // string | The brand template ID.

try {
    $result = $apiInstance->getBrandTemplateDataset($brand_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandTemplateApi->getBrandTemplateDataset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand_template_id** | **string**| The brand template ID. | |

### Return type

[**\Integrations\Canva\SDK\Model\GetBrandTemplateDatasetResponse**](../Model/GetBrandTemplateDatasetResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBrandTemplates()`

```php
listBrandTemplates($query, $continuation, $ownership, $sort_by): \Integrations\Canva\SDK\Model\ListBrandTemplatesResponse
```



<Warning>  Later this year, we'll be updating all brand template IDs. If your integration stores brand template IDs, you'll need to migrate to the new IDs. Once we implement this change, you'll have 6 months to update the IDs.  </Warning>  <Note>  To use this API, your integration must act on behalf of a user that's a member of a [Canva Enterprise](https://www.canva.com/enterprise/) organization.  </Note>  Get a list of the [brand templates](https://www.canva.com/help/publish-team-template/) the user has access to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauthAuthCode
$config = Integrations\Canva\SDK\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Integrations\Canva\SDK\Api\BrandTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | Lets you search the brand templates available to the user using a search term or terms.
$continuation = 'continuation_example'; // string | If the success response contains a continuation token, the user has access to more brand templates you can list. You can use this token as a query parameter and retrieve more templates from the list, for example `/v1/brand-templates?continuation={continuation}`. To retrieve all the brand templates available to the user, you might need to make multiple requests.
$ownership = new \Integrations\Canva\SDK\Model\OwnershipType(); // OwnershipType | Filter the list of brand templates based on the user's ownership of the brand templates. This can be one of the following:  - `any`: (Default) Brand templates owned by and shared with the user. - `owned`: Brand templates owned by the user. - `shared`: Brand templates shared with the user.
$sort_by = new \Integrations\Canva\SDK\Model\SortByType(); // SortByType | Sort the list of brand templates. This can be one of the following:  - `relevance`: (Default) Sort results using a relevance algorithm. - `modified_descending`: Sort results by the date last modified in descending order. - `modified_ascending`: Sort results by the date last modified in ascending order. - `title_descending`: Sort results by title in descending order. - `title_ascending`: Sort results by title in ascending order.

try {
    $result = $apiInstance->listBrandTemplates($query, $continuation, $ownership, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandTemplateApi->listBrandTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| Lets you search the brand templates available to the user using a search term or terms. | [optional] |
| **continuation** | **string**| If the success response contains a continuation token, the user has access to more brand templates you can list. You can use this token as a query parameter and retrieve more templates from the list, for example &#x60;/v1/brand-templates?continuation&#x3D;{continuation}&#x60;. To retrieve all the brand templates available to the user, you might need to make multiple requests. | [optional] |
| **ownership** | [**OwnershipType**](../Model/.md)| Filter the list of brand templates based on the user&#39;s ownership of the brand templates. This can be one of the following:  - &#x60;any&#x60;: (Default) Brand templates owned by and shared with the user. - &#x60;owned&#x60;: Brand templates owned by the user. - &#x60;shared&#x60;: Brand templates shared with the user. | [optional] |
| **sort_by** | [**SortByType**](../Model/.md)| Sort the list of brand templates. This can be one of the following:  - &#x60;relevance&#x60;: (Default) Sort results using a relevance algorithm. - &#x60;modified_descending&#x60;: Sort results by the date last modified in descending order. - &#x60;modified_ascending&#x60;: Sort results by the date last modified in ascending order. - &#x60;title_descending&#x60;: Sort results by title in descending order. - &#x60;title_ascending&#x60;: Sort results by title in ascending order. | [optional] |

### Return type

[**\Integrations\Canva\SDK\Model\ListBrandTemplatesResponse**](../Model/ListBrandTemplatesResponse.md)

### Authorization

[oauthAuthCode](../../README.md#oauthAuthCode)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
