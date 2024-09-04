# # PngExportFormat

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**export_quality** | [**\OpenAPI\Client\Model\ExportQuality**](ExportQuality.md) |  | [optional]
**height** | **int** | Specify the height in pixels of the exported image. If only one of height or width is specified, then the image will be scaled to match that dimension, respecting the design&#39;s aspect ratio. If no width or height is specified, the image will be exported using the dimensions of the design. | [optional]
**width** | **int** | Specify the width in pixels of the exported image. If only one of height or width is specified, then the image will be scaled to match that dimension, respecting the design&#39;s aspect ratio. If no width or height is specified, the image will be exported using the dimensions of the design. | [optional]
**lossless** | **bool** | When &#x60;true&#x60;, the PNG is compressed with a lossless compression algorithm (&#x60;false&#x60; by default). | [optional] [default to false]
**as_single_image** | **bool** | When &#x60;true&#x60;, multi-page designs are merged into a single image. When &#x60;false&#x60; (default), each page is exported as a separate image. | [optional] [default to false]
**pages** | **int[]** | To specify which pages to export in a multi-page design, provide the page numbers as an array. The first page in a design is page &#x60;1&#x60;. If &#x60;pages&#x60; isn&#39;t specified, all the pages are exported. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
