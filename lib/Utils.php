<?php

namespace Integrations\Canva\SDK;

final class Utils
{
    public static function jsonEncode($data)
    {
        $data = self::objectToArray($data);

        return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    public static function objectToArray($obj) {
        if (is_object($obj)) {
            $obj = (array) $obj;
        }
        if (is_array($obj)) {
            return array_map('self::objectToArray', $obj);
        } else {
            return $obj;
        }
    }
}
