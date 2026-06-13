<?php

namespace Differ\Differ;

use function Funct\Collection\union;
use function Funct\Collection\sortBy;
use function Differ\Parser\parse;
use function Differ\Formatter\format;

function genDiff(string $path1, string $path2, string $formatName = 'stylish'): string
{
    $data1 = file_get_contents($path1);
    $type1 = pathinfo($path1, PATHINFO_EXTENSION);
    $parsed1 = parse($data1, $type1);

    $data2 = file_get_contents($path2);
    $type2 = pathinfo($path2, PATHINFO_EXTENSION);
    $parsed2 = parse($data2, $type2);

    $diffTree = genDiffTree($parsed1, $parsed2);

    return format($diffTree, $formatName);
}

function genDiffTree(array $data1, array $data2): array
{
    $keys = union(array_keys($data1), array_keys($data2));
    $sortedKeys = sortBy($keys, fn ($key) => $key);

    return array_map(function ($key) use ($data1, $data2) {
        if (!array_key_exists($key, $data2)) {
            return [
                'key' => $key,
                'type' => 'removed',
                'value' => $data1[$key]
            ];
        }

        if (!array_key_exists($key, $data1)) {
            return [
                'key' => $key,
                'type' => 'added',
                'value' => $data2[$key]
            ];
        }

        if (is_array($data1[$key]) && is_array($data2[$key])) {
            return [
                'key' => $key,
                'type' => 'nested',
                'children' => genDiffTree($data1[$key], $data2[$key])
            ];
        }

        if ($data1[$key] !== $data2[$key]) {
            return [
                'key' => $key,
                'type' => 'changed',
                'oldValue' => $data1[$key],
                'newValue' => $data2[$key]
            ];
        }

        return [
            'key' => $key,
            'type' => 'unchanged',
            'value' => $data1[$key]
        ];
    }, $sortedKeys);
}
