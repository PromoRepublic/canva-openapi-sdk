# # ReplyComment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** | The ID of the comment. |
**attached_to** | [**\Integrations\Canva\SDK\Model\CommentObject**](CommentObject.md) |  | [optional]
**message** | **string** | The comment message. This is the comment body shown in the Canva UI. User mentions are shown here in the format &#x60;[user_id:team_id]&#x60;. |
**author** | [**\Integrations\Canva\SDK\Model\User**](User.md) |  |
**created_at** | **int** | When the comment or reply was created, as a Unix timestamp (in seconds since the Unix Epoch). | [optional]
**updated_at** | **int** | When the comment or reply was last updated, as a Unix timestamp (in seconds since the Unix Epoch). | [optional]
**mentions** | [**array<string,\Integrations\Canva\SDK\Model\TeamUser>**](TeamUser.md) | The Canva users mentioned in the comment. |
**thread_id** | **string** | The ID of the comment thread this reply is in. This ID is the same as the &#x60;id&#x60; of the parent comment. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
