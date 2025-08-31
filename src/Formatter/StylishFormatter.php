<?php

namespace Differ\Formatter;

class StylishFormatter
{
    public static function format($array, $level = '')
    {
        // $result = '{' . PHP_EOL;
        // foreach ($array as $value) {
        //     if ($value['status'] == 'both') {
        //         $status = ' ';
        //     } elseif ($value['status'] == 'unique' && $value['source'] == 'file2') {
        //         $status = '+';
        //     } elseif ($value['status'] == 'unique' && $value['source'] == 'file1') {
        //         $status = '-';
        //     } elseif ($value['status'] == 'modified' && $value['source'] == 'file1') {
        //         $status = '-';
        //     } elseif ($value['status'] == 'modified' && $value['source'] == 'file2') {
        //         $status = '+';
        //     }
        //     $result = $result . '  ' . $status . ' ' . $value['key'] . ': ' . $value['value'] . PHP_EOL;
        // }
        // $result = $result . '}';
        // return $result;

        $result = array_reduce($array, function ($acc, $item) use ($level) {
            if ($item['status'] == 'both') {
                $status = ' ';
            } elseif ($item['status'] == 'unique' && $item['source'] == 'file2') {
                $status = '+';
            } elseif ($item['status'] == 'unique' && $item['source'] == 'file1') {
                $status = '-';
            } elseif ($item['status'] == 'modified' && $item['source'] == 'file1') {
                $status = '-';
            } elseif ($item['status'] == 'modified' && $item['source'] == 'file2') {
                $status = '+';
            }
            $value = (is_Array($item['value'])) ? self::format($item['value'], $level . '    ') : $item['value'];
            $acc = $acc . $level . '  ' . $status . ' ' . $item['key'] . ': ' . $value . PHP_EOL;
            return $acc;
        }, '{' . PHP_EOL);
        return $result . $level . '}';
    }
}
