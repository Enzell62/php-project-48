<?php

namespace Differ\GenDiff;

use Differ\Parser;
use Differ\Differ;
use function Differ\Formatter\format;

function genDiff(string $path1, string $path2, string $format = 'stylish'): string
{
    $data1 = Parser\parse(getData($path1));
    $data2 = Parser\parse(getData($path2));
    $diff = Differ\compare($data1, $data2);
    return format($diff, $format);
}

function getData(string $path): array
{
    if (!file_exists($path)) {
        throw new \Exception("File not found: {$path}");
    }
    $content = file_get_contents($path);
    if ($content === false) {
        throw new \Exception("Failed to read file: {$path}");
    }
    $extension = pathinfo($path, PATHINFO_EXTENSION);
    return [$content, $extension];
}
