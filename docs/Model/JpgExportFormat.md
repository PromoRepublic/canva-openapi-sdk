# # JpgExportFormat

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**export_quality** | [**\OpenAPI\Client\Model\ExportQuality**](ExportQuality.md) |  | [optional]
**quality** | **int** | For the &#x60;jpg&#x60; type, the &#x60;quality&#x60; of the exported JPEG determines how compressed the exported file should be. A _low_ &#x60;quality&#x60; value (minimum &#x60;1&#x60;) will create a file with a smaller file size, but the resulting file will have pixelated artifacts when compared to a file created with a _high_ &#x60;quality&#x60; value (maximum &#x60;100&#x60;). |
**height** | **int** | Specify the height in pixels of the exported image. If only one of height or width is specified, then the image will be scaled to match that dimension, respecting the design&#39;s aspect ratio. If no width or height is specified, the image will be exported using the dimensions of the design. | [optional]
**width** | **int** | Specify the width in pixels of the exported image. If only one of height or width is specified, then the image will be scaled to match that dimension, respecting the design&#39;s aspect ratio. If no width or height is specified, the image will be exported using the dimensions of the design. | [optional]
**pages** | **int[]** | To specify which pages to export in a multi-page design, provide the page numbers as an array. The first page in a design is page &#x60;1&#x60;. If &#x60;pages&#x60; isn&#39;t specified, all the pages are exported. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
