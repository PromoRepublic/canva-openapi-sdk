<?php
/**
 * ExportErrorCode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Canva Connect API
 *
 * API for building integrations with Canva via a REST api
 *
 * The version of the OpenAPI document: latest
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ExportErrorCode Class Doc Comment
 *
 * @category Class
 * @description If the export failed, this specifies the reason why it failed. This can be one of the following:  - &#x60;license_required&#x60;: The design contains [premium elements](https://www.canva.com/help/premium-elements/) that haven&#39;t been purchased. You can either buy the elements or upgrade to a Canva plan (such as Canva Pro) that has premium features, then try again. Alternatively, you can set &#x60;export_quality&#x60; to &#x60;regular&#x60; to export your document in regular quality. - &#x60;internal_failure&#x60;: The service encountered an error when exporting your design.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExportErrorCode
{
    /**
     * Possible values of this enum
     */
    public const LICENSE_REQUIRED = 'license_required';

    public const INTERNAL_FAILURE = 'internal_failure';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LICENSE_REQUIRED,
            self::INTERNAL_FAILURE
        ];
    }
}


