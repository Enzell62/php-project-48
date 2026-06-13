<?php

namespace Differ\Formatter\Stylish;

function format(array $diffTree): string
{
    $iter = function ($tree, $depth) use (&$iter) {
        $indent = str_repeat(' ', $depth * 4 - 2);
        $bracketIndent = str_repeat(' ', ($depth - 1) * 4);

        $lines = array_map(function ($node) use ($iter, $depth, $indent) {
            $key = $node['key'];
            $type = $node['type'];

            switch ($type) {
                case 'nested':
                    return "{$indent}  {$key}: " . $iter($node['children'], $depth + 1);
                case 'added':
                    $formattedValue = stringify($node['value'], $depth + 1);
                    return "{$indent}+ {$key}: {$formattedValue}";
                case 'removed':
                    $formattedValue = stringify($node['value'], $depth + 1);
                    return "{$indent}- {$key}: {$formattedValue}";
                case 'changed':
                    $formattedOld = stringify($node['oldValue'], $depth + 1);
                    $formattedNew = stringify($node['newValue'], $depth + 1);
                    return "{$indent}- {$key}: {$formattedOld}
{$indent}+ {$key}: {$formattedNew}";
                case 'unchanged':
                    $formattedValue = stringify($node['value'], $depth + 1);
                    return "{$indent}  {$key}: {$formattedValue}";
                default:
                    throw new \Exception("Unknown node type: {$type}");
            }
        }, $tree);

        return "{
" . implode("
", $lines) . "
{$bracketIndent}}";
    };

    return $iter($diffTree, 1);
}

function stringify($value, $depth): string
{
    if (is_null($value)) {
        return 'null';
    }

    if (is_bool($value)) {
        return $value ? 'true' : 'false';
    }

    if (!is_array($value)) {
        return (string) $value;
    }

    $indent = str_repeat(' ', $depth * 4);
    $bracketIndent = str_repeat(' ', ($depth - 1) * 4);

    $lines = array_map(function ($key, $val) use ($depth, $indent, &$iter) {
        $formattedValue = stringify($val, $depth + 1);
        return "{$indent}{$key}: {$formattedValue}";
    }, array_keys($value), $value);

    return "{
" . implode("
", $lines) . "
{$bracketIndent}}";
}
