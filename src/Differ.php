<?php

namespace Differ;

use function Funct\Collection\union;
use function Funct\Collection\sortBy;

class Differ
{
    public static function compare(array $file1, array $file2): array
    {
        $keys = union(array_keys($file1), array_keys($file2));
        $sortedKeys = sortBy($keys, fn($key) => $key);
        return array_map(function ($key) use ($file1, $file2) {
            if (!array_key_exists($key, $file1)) {
                return self::createNode($key, 'added', $file2[$key]);
            }
            if (!array_key_exists($key, $file2)) {
                return self::createNode($key, 'removed', $file1[$key]);
            }
            if (is_array($file1[$key]) && is_array($file2[$key])) {
                return self::createNode($key, 'nested', self::compare($file1[$key], $file2[$key]));
            }
            if ($file1[$key] !== $file2[$key]) {
                return self::createNode($key, 'changed', $file2[$key], $file1[$key]);
            }
            return self::createNode($key, 'unchanged', $file1[$key]);
        }, $sortedKeys);
    }

    private static function createNode(string $key, string $type, $newValue, $oldValue = null): array
    {
        $node = [
            'key' => $key,
            'type' => $type,
        ];
        if ($type === 'changed') {
            $node['oldValue'] = $oldValue;
            $node['newValue'] = $newValue;
        } elseif ($type === 'nested') {
            $node['children'] = $newValue;
        } else {
            $node['value'] = $newValue;
        }
        return $node;
    }
}
