<?php

namespace Differ\Formatter;

use Differ\Formatter\PlainFormatter;
use Differ\Formatter\StylishFormatter;

use function Funct\Collection\sortBy;

class Formatter
{
    // private static function sort(array $array)
    // {
    //     foreach ($array as &$item) {
    //         if (is_Array($item['value'])) {
    //             $item['value'] = self::sort($item['value']);
    //         }
    //     }
    //     unset($item);
    //     return sortBy($array, function ($item) {
    //         return $item['key'];
    //     });
    // }

    private static function sort(array $array)
    {
        $newArray = sortBy($array, function ($item) {
            return $item['key'];
        });
        return array_map(function ($item) {
            if (is_Array($item['value'])) {
                return [
                    'key' => $item['key'],
                    'value' => self::sort($item['value']),
                    'source' => $item['source'],
                    'status' => $item['status']
                ];
            }
            return $item;
        }, $newArray);
    }

    private static function arrayBoolToString(array $array): array
    {
        return array_map(function ($item) {
            $value = is_Bool($item['value']) ? ($item['value'] ? 'true' : 'false') : $item['value'];
            $item['value'] = $value;
            $value = $item['value'] ?? 'null';
            $item['value'] = $value;
            if (is_Array($item['value'])) {
                $item['value'] = self::arrayBoolToString($item['value']);
            }
            return $item;
        }, $array);
    }

    public static function format(array $array, string $format = "stylish")
    {
        $sorted = self::sort($array);
        $arrayBoolToString = self::arrayBoolToString($sorted);
        $map = [
            'stylish' => StylishFormatter::class,
            'plain' => PlainFormatter::class
        ];
        if (!array_key_exists($format, $map)) {
            throw new \InvalidArgumentException('Error: Unsupported format: "' . $format . '"');
        } else {
            return $map[$format]::format($arrayBoolToString);
        }
    }
}
