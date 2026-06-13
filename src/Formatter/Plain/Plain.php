<?php

namespace Differ\Formatter\Plain;

function format(array $diffTree): string
{
    $iter = function ($tree, $path) use (&$iter) {
        $lines = array_map(function ($node) use ($iter, $path) {
            $key = $node['key'];
            $type = $node['type'];
            $newPath = $path === '' ? $key : "{$path}.{$key}";

            switch ($type) {
                case 'nested':
                    return $iter($node['children'], $newPath);
                case 'added':
                    $formattedValue = stringify($node['value']);
                    return "Property '{$newPath}' was added with value: {$formattedValue}";
                case 'removed':
                    return "Property '{$newPath}' was removed";
                case 'changed':
                    $formattedOld = stringify($node['oldValue']);
                    $formattedNew = stringify($node['newValue']);
                    return "Property '{$newPath}' was updated. From {$formattedOld} to {$formattedNew}";
                case 'unchanged':
                    return null;
                default:
                    throw new \Exception("Unknown node type: {$type}");
            }
        }, $tree);

        return implode("
", array_filter($lines));
    };

    return $iter($diffTree, '');
}

function stringify($value): string
{
    if (is_null($value)) {
        return 'null';
    }

    if (is_bool($value)) {
        return $value ? 'true' : 'false';
    }

    if (is_array($value)) {
        return '[complex value]';
    }

    if (is_string($value)) {
        return "'{$value}'";
    }

    return (string) $value;
}
