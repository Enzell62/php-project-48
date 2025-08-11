<?php

namespace Differ\Formatter;

use Differ\Formatter\PlainFormatter;
use Differ\Formatter\StylishFormatter;

use function Funct\Collection\sortBy;

class Formatter
{
    public static function format(array $array, string $format = "stylish")
    {
        $array = sortBy($array, function ($item) {
            return $item['key'];
        });
        $map = [
            'stylish' => StylishFormatter::class,
            'plain' => PlainFormatter::class
        ];
        if (!array_key_exists($format, $map)) {
            throw new \InvalidArgumentException('Error: Unsupported format: "' . $format . '"');
        } else {
            return $map[$format]::format($array);
        }
    }
}
