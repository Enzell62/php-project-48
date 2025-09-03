<?php

namespace Differ\Formatter;

class PlainFormatter
{
    public static function flatten(array $array, $parent = ''): array
    {
        return array_reduce($array, function ($acc, $item) use ($parent) {
            $domen = implode('.', array_filter([$parent, $item['key']], fn($item) => $item !== ''));
            if (is_Array($item['value']) && $item['status'] == 'both') {
                $acc = array_merge($acc, self::flatten($item['value'], $domen));
                return $acc;
            } elseif (is_array($item['value']) && ($item['status'] == 'unique' || $item['status'] == 'modified')) {
                $item['key'] = $domen;
                $item['value'] = '[complex value]';
                $acc[] = $item;
            } elseif ($item['status'] == 'both') {
                return $acc;
            } elseif ($item['status'] == 'unique' || $item['status'] == 'modified') {
                $item['key'] = $domen;
                $acc[] = $item;
            }
            return $acc;
        }, []);
    }

    public static function addQuotes(string $str): string
    {
        if (!(in_array($str, ['null', 'false', 'true','[complex value]']) || is_numeric($str))) {
                $str = "'" . $str . "'";
        }
        return $str;
    }

    private static function getPlainString(array $array): string
    {
        $coll = $array;
        return array_reduce($array, function ($acc, $item) use ($coll) {
            $key = $item['key'];
            $value = 'undifined';
            $status = 'unfifined';
            if ($item['status'] == 'unique' && $item['source'] == 'file1') {
                $status = 'removed';
                $value = '';
            } elseif ($item['status'] == 'unique' && $item['source'] == 'file2') {
                $status = 'added with value: ';
                $value = self::addQuotes($item['value']);
            } elseif ($item['status'] == 'modified' && $item['source'] == 'file1') {
                $status = 'update. From ';
                $subValue1 = self::addQuotes($item['value']);
                $subValue2 = array_reduce($coll, function ($acc, $item) use ($key) {
                    if ($item['key'] == $key && $item['source'] == 'file2') {
                        $acc = self::addQuotes($item['value']);
                        return $acc;
                    }
                    return $acc;
                }, "");
                $value = "{$subValue1} to {$subValue2}";
            } else {
                return $acc;
            }
            $acc = $acc . "Property '{$key}' was {$status}{$value}" . PHP_EOL;
            return $acc;
        }, '');
    }

    public static function format(array $array)
    {
        $flattenedArray = self::flatten($array);
        return self::getPlainString($flattenedArray);
    }
}
