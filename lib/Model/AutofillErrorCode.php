<?php
/**
 * AutofillErrorCode
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
 * AutofillErrorCode Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AutofillErrorCode
{
    /**
     * Possible values of this enum
     */
    public const AUTOFILL_ERROR = 'autofill_error';

    public const THUMBNAIL_GENERATION_ERROR = 'thumbnail_generation_error';

    public const CREATE_DESIGN_ERROR = 'create_design_error';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUTOFILL_ERROR,
            self::THUMBNAIL_GENERATION_ERROR,
            self::CREATE_DESIGN_ERROR
        ];
    }
}


