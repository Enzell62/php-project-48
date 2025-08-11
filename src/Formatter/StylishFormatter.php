<?php

namespace Differ\Formatter;

class StylishFormatter
{
    public static function format($array)
    {
        $result = '{' . PHP_EOL;
        foreach ($array as $value) {
            if ($value['status'] == 'both') {
                $status = ' ';
            } elseif ($value['status'] == 'unique' && $value['source'] == 'file2') {
                $status = '+';
            } elseif ($value['status'] == 'unique' && $value['source'] == 'file1') {
                $status = '-';
            } elseif ($value['status'] == 'modified' && $value['source'] == 'file1') {
                $status = '-';
            } elseif ($value['status'] == 'modified' && $value['source'] == 'file2') {
                $status = '+';
            }
            $result = $result . '  ' . $status . ' ' . $value['key'] . ': ' . $value['value'] . PHP_EOL;
        }
        $result = $result . '}';
        return $result;
    }
}
