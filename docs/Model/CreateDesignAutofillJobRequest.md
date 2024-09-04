# # CreateDesignAutofillJobRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**brand_template_id** | **string** | ID of the input brand template. |
**title** | **string** | Title to use for the autofilled design. Must be less than 256 characters.  If no design title is provided, the autofilled design will have the same title as the brand template. | [optional]
**data** | [**array<string,\Integrations\Canva\SDK\Model\DatasetValue>**](DatasetValue.md) | Data object containing the data fields and values to autofill. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
