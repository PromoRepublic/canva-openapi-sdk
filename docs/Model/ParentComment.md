# # ParentComment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** | The ID of the comment.  You can use this ID to create replies to the comment using the [Create reply API](https://www.canva.dev/docs/connect/api-reference/comments/create-reply/). |
**attached_to** | [**\Integrations\Canva\SDK\Model\CommentObject**](CommentObject.md) |  | [optional]
**message** | **string** | The comment message. This is the comment body shown in the Canva UI. User mentions are shown here in the format &#x60;[user_id:team_id]&#x60;. |
**author** | [**\Integrations\Canva\SDK\Model\User**](User.md) |  |
**created_at** | **int** | When the comment or reply was created, as a Unix timestamp (in seconds since the Unix Epoch). | [optional]
**updated_at** | **int** | When the comment or reply was last updated, as a Unix timestamp (in seconds since the Unix Epoch). | [optional]
**mentions** | [**array<string,\Integrations\Canva\SDK\Model\TeamUser>**](TeamUser.md) | The Canva users mentioned in the comment. |
**assignee** | [**\Integrations\Canva\SDK\Model\User**](User.md) |  | [optional]
**resolver** | [**\Integrations\Canva\SDK\Model\User**](User.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
