<?php

namespace Differ\Formatter;

use function Differ\Formatter\Stylish\format as formatStylish;
use function Differ\Formatter\Plain\format as formatPlain;
use function Differ\Formatter\Json\format as formatJson;

function format(array $diffTree, string $formatName): string
{
    switch ($formatName) {
        case 'stylish':
            return formatStylish($diffTree);
        case 'plain':
            return formatPlain($diffTree);
        case 'json':
            return formatJson($diffTree);
        default:
            throw new \Exception("Unsupported format: {$formatName}");
    }
}
