# OpenAPIClient-php

API for building integrations with Canva via a REST api

For more information, please visit [https://community.canva.dev/](https://community.canva.dev/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = 'app_id_example'; // string | The app id

try {
    $result = $apiInstance->getAppJwks($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->getAppJwks: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.canva.com/rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AppApi* | [**getAppJwks**](docs/Api/AppApi.md#getappjwks) | **GET** /v1/apps/{appId}/jwks | 
*AssetApi* | [**createAssetUploadJob**](docs/Api/AssetApi.md#createassetuploadjob) | **POST** /v1/asset-uploads | 
*AssetApi* | [**deleteAsset**](docs/Api/AssetApi.md#deleteasset) | **DELETE** /v1/assets/{assetId} | 
*AssetApi* | [**getAsset**](docs/Api/AssetApi.md#getasset) | **GET** /v1/assets/{assetId} | 
*AssetApi* | [**getAssetUploadJob**](docs/Api/AssetApi.md#getassetuploadjob) | **GET** /v1/asset-uploads/{jobId} | 
*AssetApi* | [**updateAsset**](docs/Api/AssetApi.md#updateasset) | **PATCH** /v1/assets/{assetId} | 
*AutofillApi* | [**createDesignAutofillJob**](docs/Api/AutofillApi.md#createdesignautofilljob) | **POST** /v1/autofills | 
*AutofillApi* | [**getDesignAutofillJob**](docs/Api/AutofillApi.md#getdesignautofilljob) | **GET** /v1/autofills/{jobId} | 
*BrandTemplateApi* | [**getBrandTemplate**](docs/Api/BrandTemplateApi.md#getbrandtemplate) | **GET** /v1/brand-templates/{brandTemplateId} | 
*BrandTemplateApi* | [**getBrandTemplateDataset**](docs/Api/BrandTemplateApi.md#getbrandtemplatedataset) | **GET** /v1/brand-templates/{brandTemplateId}/dataset | 
*BrandTemplateApi* | [**listBrandTemplates**](docs/Api/BrandTemplateApi.md#listbrandtemplates) | **GET** /v1/brand-templates | 
*CommentApi* | [**createComment**](docs/Api/CommentApi.md#createcomment) | **POST** /v1/comments | 
*CommentApi* | [**createReply**](docs/Api/CommentApi.md#createreply) | **POST** /v1/comments/{commentId}/replies | 
*CommentApi* | [**getComment**](docs/Api/CommentApi.md#getcomment) | **GET** /v1/designs/{designId}/comments/{commentId} | 
*ConnectApi* | [**getSigningPublicKeys**](docs/Api/ConnectApi.md#getsigningpublickeys) | **GET** /v1/connect/keys | 
*DesignApi* | [**createDesign**](docs/Api/DesignApi.md#createdesign) | **POST** /v1/designs | 
*DesignApi* | [**getDesign**](docs/Api/DesignApi.md#getdesign) | **GET** /v1/designs/{designId} | 
*DesignApi* | [**listDesigns**](docs/Api/DesignApi.md#listdesigns) | **GET** /v1/designs | 
*DesignImportApi* | [**createDesignImportJob**](docs/Api/DesignImportApi.md#createdesignimportjob) | **POST** /v1/imports | 
*DesignImportApi* | [**getDesignImportJob**](docs/Api/DesignImportApi.md#getdesignimportjob) | **GET** /v1/imports/{jobId} | 
*ExportApi* | [**createDesignExportJob**](docs/Api/ExportApi.md#createdesignexportjob) | **POST** /v1/exports | 
*ExportApi* | [**getDesignExportJob**](docs/Api/ExportApi.md#getdesignexportjob) | **GET** /v1/exports/{exportId} | 
*FolderApi* | [**createFolder**](docs/Api/FolderApi.md#createfolder) | **POST** /v1/folders | 
*FolderApi* | [**deleteFolder**](docs/Api/FolderApi.md#deletefolder) | **DELETE** /v1/folders/{folderId} | 
*FolderApi* | [**getFolder**](docs/Api/FolderApi.md#getfolder) | **GET** /v1/folders/{folderId} | 
*FolderApi* | [**listFolderItems**](docs/Api/FolderApi.md#listfolderitems) | **GET** /v1/folders/{folderId}/items | 
*FolderApi* | [**moveFolderItem**](docs/Api/FolderApi.md#movefolderitem) | **POST** /v1/folders/move | 
*FolderApi* | [**updateFolder**](docs/Api/FolderApi.md#updatefolder) | **PATCH** /v1/folders/{folderId} | 
*OauthApi* | [**exchangeAccessToken**](docs/Api/OauthApi.md#exchangeaccesstoken) | **POST** /v1/oauth/token | 
*OauthApi* | [**introspectToken**](docs/Api/OauthApi.md#introspecttoken) | **POST** /v1/oauth/introspect | 
*OauthApi* | [**revokeTokens**](docs/Api/OauthApi.md#revoketokens) | **POST** /v1/oauth/revoke | 
*UserApi* | [**getUserProfile**](docs/Api/UserApi.md#getuserprofile) | **GET** /v1/users/me/profile | 
*UserApi* | [**usersMe**](docs/Api/UserApi.md#usersme) | **GET** /v1/users/me | 

## Models

- [ApprovalRequestAction](docs/Model/ApprovalRequestAction.md)
- [ApprovalResponseAction](docs/Model/ApprovalResponseAction.md)
- [Asset](docs/Model/Asset.md)
- [AssetItem](docs/Model/AssetItem.md)
- [AssetUploadError](docs/Model/AssetUploadError.md)
- [AssetUploadErrorCode](docs/Model/AssetUploadErrorCode.md)
- [AssetUploadJob](docs/Model/AssetUploadJob.md)
- [AssetUploadMetadata](docs/Model/AssetUploadMetadata.md)
- [AssetUploadStatus](docs/Model/AssetUploadStatus.md)
- [AutofillError](docs/Model/AutofillError.md)
- [AutofillErrorCode](docs/Model/AutofillErrorCode.md)
- [BrandTemplate](docs/Model/BrandTemplate.md)
- [Comment](docs/Model/Comment.md)
- [CommentEvent](docs/Model/CommentEvent.md)
- [CommentEventType](docs/Model/CommentEventType.md)
- [CommentNotificationContent](docs/Model/CommentNotificationContent.md)
- [CommentObject](docs/Model/CommentObject.md)
- [CommentObjectInput](docs/Model/CommentObjectInput.md)
- [CreateAssetUploadJobResponse](docs/Model/CreateAssetUploadJobResponse.md)
- [CreateCommentRequest](docs/Model/CreateCommentRequest.md)
- [CreateCommentResponse](docs/Model/CreateCommentResponse.md)
- [CreateDesignAutofillJobRequest](docs/Model/CreateDesignAutofillJobRequest.md)
- [CreateDesignAutofillJobResponse](docs/Model/CreateDesignAutofillJobResponse.md)
- [CreateDesignAutofillJobResult](docs/Model/CreateDesignAutofillJobResult.md)
- [CreateDesignExportJobRequest](docs/Model/CreateDesignExportJobRequest.md)
- [CreateDesignExportJobResponse](docs/Model/CreateDesignExportJobResponse.md)
- [CreateDesignImportJobResponse](docs/Model/CreateDesignImportJobResponse.md)
- [CreateDesignRequest](docs/Model/CreateDesignRequest.md)
- [CreateDesignResponse](docs/Model/CreateDesignResponse.md)
- [CreateFolderRequest](docs/Model/CreateFolderRequest.md)
- [CreateFolderResponse](docs/Model/CreateFolderResponse.md)
- [CreateReplyRequest](docs/Model/CreateReplyRequest.md)
- [CreateReplyResponse](docs/Model/CreateReplyResponse.md)
- [CustomDesignTypeInput](docs/Model/CustomDesignTypeInput.md)
- [DataField](docs/Model/DataField.md)
- [DatasetImageValue](docs/Model/DatasetImageValue.md)
- [DatasetTextValue](docs/Model/DatasetTextValue.md)
- [DatasetValue](docs/Model/DatasetValue.md)
- [Design](docs/Model/Design.md)
- [DesignAccessRequestedNotificationContent](docs/Model/DesignAccessRequestedNotificationContent.md)
- [DesignApprovalRequestedNotificationContent](docs/Model/DesignApprovalRequestedNotificationContent.md)
- [DesignApprovalResponseNotificationContent](docs/Model/DesignApprovalResponseNotificationContent.md)
- [DesignApprovalReviewerInvalidatedNotificationContent](docs/Model/DesignApprovalReviewerInvalidatedNotificationContent.md)
- [DesignAutofillJob](docs/Model/DesignAutofillJob.md)
- [DesignAutofillJobResult](docs/Model/DesignAutofillJobResult.md)
- [DesignAutofillStatus](docs/Model/DesignAutofillStatus.md)
- [DesignCommentObject](docs/Model/DesignCommentObject.md)
- [DesignCommentObjectInput](docs/Model/DesignCommentObjectInput.md)
- [DesignExportStatus](docs/Model/DesignExportStatus.md)
- [DesignImportError](docs/Model/DesignImportError.md)
- [DesignImportErrorCode](docs/Model/DesignImportErrorCode.md)
- [DesignImportMetadata](docs/Model/DesignImportMetadata.md)
- [DesignImportStatus](docs/Model/DesignImportStatus.md)
- [DesignImportStatusState](docs/Model/DesignImportStatusState.md)
- [DesignItem](docs/Model/DesignItem.md)
- [DesignLinks](docs/Model/DesignLinks.md)
- [DesignMentionNotificationContent](docs/Model/DesignMentionNotificationContent.md)
- [DesignSummary](docs/Model/DesignSummary.md)
- [DesignTypeInput](docs/Model/DesignTypeInput.md)
- [EdDsaJwk](docs/Model/EdDsaJwk.md)
- [Error](docs/Model/Error.md)
- [ErrorCode](docs/Model/ErrorCode.md)
- [ExchangeAccessTokenResponse](docs/Model/ExchangeAccessTokenResponse.md)
- [ExportError](docs/Model/ExportError.md)
- [ExportErrorCode](docs/Model/ExportErrorCode.md)
- [ExportFormat](docs/Model/ExportFormat.md)
- [ExportJob](docs/Model/ExportJob.md)
- [ExportPageSize](docs/Model/ExportPageSize.md)
- [ExportQuality](docs/Model/ExportQuality.md)
- [Folder](docs/Model/Folder.md)
- [FolderAccessRequestedNotificationContent](docs/Model/FolderAccessRequestedNotificationContent.md)
- [FolderItem](docs/Model/FolderItem.md)
- [FolderItemSortBy](docs/Model/FolderItemSortBy.md)
- [FolderItemSummary](docs/Model/FolderItemSummary.md)
- [FolderItemType](docs/Model/FolderItemType.md)
- [FolderSummary](docs/Model/FolderSummary.md)
- [GetAppJwksResponse](docs/Model/GetAppJwksResponse.md)
- [GetAssetResponse](docs/Model/GetAssetResponse.md)
- [GetAssetUploadJobResponse](docs/Model/GetAssetUploadJobResponse.md)
- [GetBrandTemplateDatasetResponse](docs/Model/GetBrandTemplateDatasetResponse.md)
- [GetBrandTemplateResponse](docs/Model/GetBrandTemplateResponse.md)
- [GetCommentResponse](docs/Model/GetCommentResponse.md)
- [GetDesignAutofillJobResponse](docs/Model/GetDesignAutofillJobResponse.md)
- [GetDesignExportJobResponse](docs/Model/GetDesignExportJobResponse.md)
- [GetDesignImportJobResponse](docs/Model/GetDesignImportJobResponse.md)
- [GetDesignResponse](docs/Model/GetDesignResponse.md)
- [GetFolderResponse](docs/Model/GetFolderResponse.md)
- [GetListDesignResponse](docs/Model/GetListDesignResponse.md)
- [GetSigningPublicKeysResponse](docs/Model/GetSigningPublicKeysResponse.md)
- [GifExportFormat](docs/Model/GifExportFormat.md)
- [Group](docs/Model/Group.md)
- [ImageDataField](docs/Model/ImageDataField.md)
- [ImportError](docs/Model/ImportError.md)
- [ImportErrorCode](docs/Model/ImportErrorCode.md)
- [ImportStatus](docs/Model/ImportStatus.md)
- [ImportStatusState](docs/Model/ImportStatusState.md)
- [IntrospectTokenResponse](docs/Model/IntrospectTokenResponse.md)
- [JpgExportFormat](docs/Model/JpgExportFormat.md)
- [JsonWebKey](docs/Model/JsonWebKey.md)
- [ListBrandTemplatesResponse](docs/Model/ListBrandTemplatesResponse.md)
- [ListFolderItemsResponse](docs/Model/ListFolderItemsResponse.md)
- [MoveFolderItemRequest](docs/Model/MoveFolderItemRequest.md)
- [Mp4ExportFormat](docs/Model/Mp4ExportFormat.md)
- [Mp4ExportQuality](docs/Model/Mp4ExportQuality.md)
- [Notification](docs/Model/Notification.md)
- [NotificationContent](docs/Model/NotificationContent.md)
- [OauthError](docs/Model/OauthError.md)
- [OwnershipType](docs/Model/OwnershipType.md)
- [ParentComment](docs/Model/ParentComment.md)
- [PdfExportFormat](docs/Model/PdfExportFormat.md)
- [PngExportFormat](docs/Model/PngExportFormat.md)
- [PptxExportFormat](docs/Model/PptxExportFormat.md)
- [PresetDesignTypeInput](docs/Model/PresetDesignTypeInput.md)
- [PresetDesignTypeName](docs/Model/PresetDesignTypeName.md)
- [ReplyComment](docs/Model/ReplyComment.md)
- [ShareAction](docs/Model/ShareAction.md)
- [ShareDesignNotificationContent](docs/Model/ShareDesignNotificationContent.md)
- [ShareFolderNotificationContent](docs/Model/ShareFolderNotificationContent.md)
- [SortByType](docs/Model/SortByType.md)
- [Team](docs/Model/Team.md)
- [TeamInviteNotificationContent](docs/Model/TeamInviteNotificationContent.md)
- [TeamUser](docs/Model/TeamUser.md)
- [TeamUserSummary](docs/Model/TeamUserSummary.md)
- [Template](docs/Model/Template.md)
- [TemplateItem](docs/Model/TemplateItem.md)
- [TextDataField](docs/Model/TextDataField.md)
- [Thumbnail](docs/Model/Thumbnail.md)
- [UpdateAssetRequest](docs/Model/UpdateAssetRequest.md)
- [UpdateAssetResponse](docs/Model/UpdateAssetResponse.md)
- [UpdateFolderRequest](docs/Model/UpdateFolderRequest.md)
- [UpdateFolderResponse](docs/Model/UpdateFolderResponse.md)
- [User](docs/Model/User.md)
- [UserProfile](docs/Model/UserProfile.md)
- [UserProfileResponse](docs/Model/UserProfileResponse.md)
- [UsersMeResponse](docs/Model/UsersMeResponse.md)

## Authorization

Authentication schemes defined for the API:
### basicAuth

- **Type**: HTTP basic authentication

### oauthAuthCode

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://www.canva.com/api/oauth/authorize`
- **Scopes**: 
    - **design:content:read**: View the contents of the user's designs.
    - **design:meta:read**: View the metadata of the user's designs.
    - **design:content:write**: Create designs on the user's behalf.
    - **folder:read**: View the metadata and contents of the user's folders, including their **Projects** folder.
    - **folder:write**: Add, move, or remove the user's folders. It also lets you edit folder metadata, such as the folder's name.
    - **asset:read**: View the metadata for the user's assets, such as uploaded images.
    - **asset:write**: Upload, update, or delete assets on the user's behalf.
    - **comment:read**: View the comments on the user's designs, and the associated metadata.
    - **comment:write**: Create comments and replies on the user's designs.
    - **collaboration:event**: Receive webhook notifications about events relevant to the user.
    - **brandtemplate:meta:read**: View the metadata of the brand templates associated with the user's brand.
    - **brandtemplate:content:read**: Read the content of the brand templates associated with the user's brand.
    - **profile:read**: Read a user's profile and account information.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `latest`
    - Generator version: `7.9.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
