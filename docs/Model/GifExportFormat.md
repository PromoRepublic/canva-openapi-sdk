# # GifExportFormat

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**export_quality** | [**\Integrations\Canva\SDK\Model\ExportQuality**](ExportQuality.md) |  | [optional]
**height** | **int** | Specify the height in pixels of the exported image. If only one of height or width is specified, then the image will be scaled to match that dimension, respecting the design&#39;s aspect ratio. If no width or height is specified, the image will be exported using the dimensions of the design. | [optional]
**width** | **int** | Specify the width in pixels of the exported image. If only one of height or width is specified, then the image will be scaled to match that dimension, respecting the design&#39;s aspect ratio. If no width or height is specified, the image will be exported using the dimensions of the design. | [optional]
**pages** | **int[]** | To specify which pages to export in a multi-page design, provide the page numbers as an array. The first page in a design is page &#x60;1&#x60;. If &#x60;pages&#x60; isn&#39;t specified, all the pages are exported. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
