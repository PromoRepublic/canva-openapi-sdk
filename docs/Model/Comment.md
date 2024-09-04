# # Comment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** | The ID of the comment. |
**attached_to** | [**\OpenAPI\Client\Model\CommentObject**](CommentObject.md) |  | [optional]
**message** | **string** | The comment message. This is the comment body shown in the Canva UI. User mentions are shown here in the format &#x60;[user_id:team_id]&#x60;. |
**author** | [**\OpenAPI\Client\Model\User**](User.md) |  |
**created_at** | **int** | When the comment or reply was created, as a Unix timestamp (in seconds since the Unix Epoch). | [optional]
**updated_at** | **int** | When the comment or reply was last updated, as a Unix timestamp (in seconds since the Unix Epoch). | [optional]
**mentions** | [**array<string,\OpenAPI\Client\Model\TeamUser>**](TeamUser.md) | The Canva users mentioned in the comment. |
**assignee** | [**\OpenAPI\Client\Model\User**](User.md) |  | [optional]
**resolver** | [**\OpenAPI\Client\Model\User**](User.md) |  | [optional]
**thread_id** | **string** | The ID of the comment thread this reply is in. This ID is the same as the &#x60;id&#x60; of the parent comment. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
