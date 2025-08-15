<?php

namespace Differ\Formatter;

use Differ\Formatter\PlainFormatter;
use Differ\Formatter\StylishFormatter;

use function Funct\Collection\sortBy;

class Formatter
{
    public static function format(array $array, string $format = "stylish")
    {
        $sorted = sortBy($array, function ($item) {
            return $item['key'];
        });
        $arrayBoolToString = array_map(function ($item) {
            $string = is_Bool($item['value']) ? ($item['value'] ? 'true' : 'false') : $item['value'];
            $item['value'] = $string;
            return $item;
        }, $sorted);
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
