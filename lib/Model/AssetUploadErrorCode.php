<?php
/**
 * AssetUploadErrorCode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Integrations\Canva\SDK
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

namespace Integrations\Canva\SDK\Model;
use \Integrations\Canva\SDK\ObjectSerializer;

/**
 * AssetUploadErrorCode Class Doc Comment
 *
 * @category Class
 * @description A short string indicating why the upload failed. This field can be used to handle errors programmatically.
 * @package  Integrations\Canva\SDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AssetUploadErrorCode
{
    /**
     * Possible values of this enum
     */
    public const FILE_TOO_BIG = 'file_too_big';

    public const IMPORT_FAILED = 'import_failed';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FILE_TOO_BIG,
            self::IMPORT_FAILED
        ];
    }
}


