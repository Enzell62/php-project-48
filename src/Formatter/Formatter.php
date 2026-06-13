<?php

namespace Differ\Formatter;

use function Differ\Formatter\Stylish\stylish;
use function Differ\Formatter\Plain\plain;
use function Differ\Formatter\Json\json;

function format(array $diff, string $format): string
{
    switch ($format) {
        case 'stylish':
            return stylish($diff);
        case 'plain':
            return plain($diff);
        case 'json':
            return json($diff);
        default:
            throw new \Exception("Unknown format: {$format}");
    }
}
