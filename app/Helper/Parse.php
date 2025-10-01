<?php 

namespace App\Helper;

class Parse {

    public static function jsonToObject(?string $json, bool $throwOnError = false)
    {
        if ($json === null || trim($json) === '') return null;

        $decoded = json_decode($json, false, 512, JSON_BIGINT_AS_STRING);
        if (json_last_error() !== JSON_ERROR_NONE) {
            if ($throwOnError) {
                throw new \InvalidArgumentException('JSON tidak valid: '.json_last_error_msg());
            }
            return null;
        }
        return $decoded; // stdClass | array
    }

    /**
     * Parse JSON -> array asosiatif
     */
    public static function jsonToArray(?string $json, bool $throwOnError = false): ?array
    {
        if ($json === null || trim($json) === '') return null;

        $decoded = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
        if (json_last_error() !== JSON_ERROR_NONE) {
            if ($throwOnError) {
                throw new \InvalidArgumentException('JSON tidak valid: '.json_last_error_msg());
            }
            return null;
        }
        return $decoded; // array|null
    }

    /**
     * Cek validitas JSON string
     */
    public static function isValidJson(?string $json): bool
    {
        if ($json === null) return false;
        json_decode($json);
        return json_last_error() === JSON_ERROR_NONE;
    }

    /**
     * Ambil nilai dari JSON string pakai dot-path (events.event.0.title)
     */
    public static function getJsonValue(?string $json, string $dotPath, $default = null)
    {
        $arr = self::jsonToArray($json);
        if ($arr === null) return $default;

        // data_get bisa ke array/object campur
        return data_get($arr, $dotPath, $default);
    }

}