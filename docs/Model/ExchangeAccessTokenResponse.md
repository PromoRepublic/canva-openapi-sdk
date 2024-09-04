# # ExchangeAccessTokenResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_token** | **string** | The bearer access token to use to authenticate to Canva Connect API endpoints. If requested using a &#x60;authorization_code&#x60; or &#x60;refresh_token&#x60;, this allows you to act on behalf of a user. |
**refresh_token** | **string** | The token that you can use to refresh the access token. |
**token_type** | **string** | The token type returned. This is always &#x60;Bearer&#x60;. |
**expires_in** | **int** | The expiry time (in seconds) for the token. |
**scope** | **string** | The [scopes](https://www.canva.dev/docs/connect/appendix/scopes/) that the token has been granted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
