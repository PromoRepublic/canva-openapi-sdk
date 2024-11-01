<?php
/**
 * ExportPageSize
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
 * ExportPageSize Class Doc Comment
 *
 * @category Class
 * @description The paper size of the export PDF file. The &#x60;size&#x60; attribute is only supported for Documents (Canva Docs).
 * @package  Integrations\Canva\SDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExportPageSize
{
    /**
     * Possible values of this enum
     */
    public const A4 = 'a4';

    public const A3 = 'a3';

    public const LETTER = 'letter';

    public const LEGAL = 'legal';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::A4,
            self::A3,
            self::LETTER,
            self::LEGAL
        ];
    }
}


