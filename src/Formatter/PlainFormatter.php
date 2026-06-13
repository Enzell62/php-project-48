<?php

namespace Differ\Formatter\Plain;

function getPlainFormattedValue(mixed $value): string
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
    return (string)$value;
}

function plain(array $diff, string $path = ''): string
{
    $result = array_map(function ($node) use ($path) {
        $currentPath = $path . $node['key'];
        switch ($node['type']) {
            case 'nested':
                return plain($node['children'], $currentPath . '.');
            case 'added':
                $formattedValue = getPlainFormattedValue($node['value']);
                return "Property '{$currentPath}' was added with value: {$formattedValue}";
            case 'removed':
                return "Property '{$currentPath}' was removed";
            case 'changed':
                $formattedOldValue = getPlainFormattedValue($node['oldValue']);
                $formattedNewValue = getPlainFormattedValue($node['newValue']);
                return "Property '{$currentPath}' was updated. From {$formattedOldValue} to {$formattedNewValue}";
            case 'unchanged':
                return null;
            default:
                throw new \Exception("Unknown node type: {$node['type']}");
        }
    }, $diff);
    return implode("\n", array_filter($result));
}
