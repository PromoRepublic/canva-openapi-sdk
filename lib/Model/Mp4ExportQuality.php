<?php
/**
 * Mp4ExportQuality
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
 * Mp4ExportQuality Class Doc Comment
 *
 * @category Class
 * @description The orientation and resolution of the exported video. Orientation is either &#x60;horizontal&#x60; or &#x60;vertical&#x60;, and resolution is one of &#x60;480p&#x60;, &#x60;720p&#x60;, &#x60;1080p&#x60; or &#x60;4k&#x60;.
 * @package  Integrations\Canva\SDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Mp4ExportQuality
{
    /**
     * Possible values of this enum
     */
    public const HORIZONTAL_480P = 'horizontal_480p';

    public const HORIZONTAL_720P = 'horizontal_720p';

    public const HORIZONTAL_1080P = 'horizontal_1080p';

    public const HORIZONTAL_4K = 'horizontal_4k';

    public const VERTICAL_480P = 'vertical_480p';

    public const VERTICAL_720P = 'vertical_720p';

    public const VERTICAL_1080P = 'vertical_1080p';

    public const VERTICAL_4K = 'vertical_4k';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HORIZONTAL_480P,
            self::HORIZONTAL_720P,
            self::HORIZONTAL_1080P,
            self::HORIZONTAL_4K,
            self::VERTICAL_480P,
            self::VERTICAL_720P,
            self::VERTICAL_1080P,
            self::VERTICAL_4K
        ];
    }
}


