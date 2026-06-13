<?php

namespace Differ\Formatter\Stylish;

function getStylishFormattedValue(mixed $value, int $depth): string
{
    if (is_null($value)) {
        return 'null';
    }
    if (is_bool($value)) {
        return $value ? 'true' : 'false';
    }
    if (!is_array($value)) {
        return trim($value, "'");
    }
    $indent = str_repeat(' ', ($depth) * 4);
    $keys = array_keys($value);
    $result = array_map(function ($key) use ($value, $depth, $indent) {
        $formattedValue = getStylishFormattedValue($value[$key], $depth + 1);
        return "{$indent}    {$key}: {$formattedValue}";
    }, $keys);
    $bracketIndent = str_repeat(' ', $depth * 4);
    return "{\n" . implode("\n", $result) . "\n" . $bracketIndent . "}";
}

function stylish(array $diff, int $depth = 1): string
{
    $indent = str_repeat(' ', $depth * 4 - 2);
    $bracketIndent = str_repeat(' ', $depth * 4 - 4);
    $result = array_map(function ($node) use ($depth, $indent) {
        switch ($node['type']) {
            case 'nested':
                return "{$indent}  {$node['key']}: " . stylish($node['children'], $depth + 1);
            case 'added':
                $formattedValue = getStylishFormattedValue($node['value'], $depth);
                return "{$indent}+ {$node['key']}: {$formattedValue}";
            case 'removed':
                $formattedValue = getStylishFormattedValue($node['value'], $depth);
                return "{$indent}- {$node['key']}: {$formattedValue}";
            case 'changed':
                $formattedOldValue = getStylishFormattedValue($node['oldValue'], $depth);
                $formattedNewValue = getStylishFormattedValue($node['newValue'], $depth);
                return "{$indent}- {$node['key']}: {$formattedOldValue}\n{$indent}+ {$node['key']}: {$formattedNewValue}";
            case 'unchanged':
                $formattedValue = getStylishFormattedValue($node['value'], $depth);
                return "{$indent}  {$node['key']}: {$formattedValue}";
            default:
                throw new \Exception("Unknown node type: {$node['type']}");
        }
    }, $diff);
    return "{\n" . implode("\n", $result) . "\n{$bracketIndent}}";
}
