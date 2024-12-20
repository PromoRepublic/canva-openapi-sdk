<?php
/**
 * FolderItemSortBy
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
 * FolderItemSortBy Class Doc Comment
 *
 * @category Class
 * @package  Integrations\Canva\SDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FolderItemSortBy
{
    /**
     * Possible values of this enum
     */
    public const CREATED_ASCENDING = 'created_ascending';

    public const CREATED_DESCENDING = 'created_descending';

    public const MODIFIED_ASCENDING = 'modified_ascending';

    public const MODIFIED_DESCENDING = 'modified_descending';

    public const TITLE_ASCENDING = 'title_ascending';

    public const TITLE_DESCENDING = 'title_descending';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED_ASCENDING,
            self::CREATED_DESCENDING,
            self::MODIFIED_ASCENDING,
            self::MODIFIED_DESCENDING,
            self::TITLE_ASCENDING,
            self::TITLE_DESCENDING
        ];
    }
}


