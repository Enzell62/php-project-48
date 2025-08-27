<?php

namespace Differ;

/**
 * Comparison core
 * @param array $file1 first assoc array file
 * @param array $file1 second assoc array file
 * @return array special marked assoc array
 *      [
 *          [
 *              'key' => (string),
 *              'value' => (mixed),
 *              'source' => (string) 'file1' | 'file2' | null,
 *              'status' => (string) 'unique' | 'both' | 'modified'
 *          ]
 *      ]
 */
class Differ
{
    /**
     * Make finaly item
     */
    private static function createItem($key, $value, $source, $status)
    {
        return ['key' => $key, 'value' => $value, 'source' => $source, 'status' => $status];
    }

    /**
     * Engine
     */
    public static function compare($file1, $file2)
    {
        $keys = array_keys(array_merge($file1, $file2));
        $result = array_reduce($keys, function ($acc, $item) use ($file1, $file2) {
            // Property for rules
            $inArrFile1 = array_key_exists($item, $file1);
            $inArrFile2 = array_key_exists($item, $file2);
            $isArrFile1 = array_key_exists($item, $file1) ? is_array($file1[$item]) : null;
            $isArrFile2 = array_key_exists($item, $file2) ? is_array($file2[$item]) : null;
            $isEqual = ($inArrFile1 && $inArrFile2) ? $file1[$item] === $file2[$item] : null;
            // Rules
            $rules =
            [
                [($inArrFile1 && !$inArrFile2 && !$isArrFile1),
                function ($item) use ($file1, &$acc) {
                    $acc[] = self::createItem($item, $file1[$item], 'file1', 'unique');
                }],
                [(!$inArrFile1 && $inArrFile2 && !$isArrFile2),
                function ($item) use ($file2, &$acc) {
                    $acc[] = self::createItem($item, $file2[$item], 'file2', 'unique');
                }],
                [($inArrFile1 && $inArrFile2 && $isEqual && !$isArrFile1 && !$isArrFile2),
                function ($item) use ($file1, &$acc) {
                    $acc[] = self::createItem($item, $file1[$item], null, 'both');
                }],
                [($inArrFile1 && $inArrFile2 && !$isEqual && !$isArrFile1 && !$isArrFile2),
                function ($item) use ($file1, $file2, &$acc) {
                    $acc[] = self::createItem($item, $file1[$item], 'file1', 'modified');
                    $acc[] = self::createItem($item, $file2[$item], 'file2', 'modified');
                }],
                [($inArrFile1 && !$inArrFile2 && $isArrFile1),
                function ($item) use ($file1, &$acc) {
                    $acc[] = self::createItem($item, self::compare($file1[$item], $file1[$item]), 'file1', 'unique');
                }],
                [(!$inArrFile1 && $inArrFile2 && $isArrFile2),
                function ($item) use ($file2, &$acc) {
                    $acc[] = self::createItem($item, self::compare($file2[$item], $file2[$item]), 'file2', 'unique');
                }],
                [($isArrFile1 && $isArrFile2 && $isArrFile1 && $isArrFile2),
                function ($item) use ($file1, $file2, &$acc) {
                    $acc[] = self::createItem($item, self::compare($file1[$item], $file2[$item]), null, 'both');
                }],
                [($inArrFile1 && $inArrFile2 && $isArrFile1 && !$isArrFile2),
                function ($item) use ($file1, $file2, &$acc) {
                    $acc[] = self::createItem($item, self::compare($file1[$item], $file1[$item]), 'file1', 'modified');
                    $acc[] = self::createItem($item, $file2[$item], 'file2', 'modified');
                }],
                [($inArrFile1 && $inArrFile2 && !$isArrFile1 && $isArrFile2),
                function ($item) use ($file1, $file2, &$acc) {
                    $acc[] = self::createItem($item, $file1[$item], 'file1', 'modified');
                    $acc[] = self::createItem($item, self::compare($file2[$item], $file2[$item]), 'file2', 'modified');
                }]
            ];
            // Engine
            foreach ($rules as [$condition, $funct]) {
                if ($condition) {
                    $funct($item, $acc);
                }
            }
            return $acc;
        }, []);

        return $result;
    }
}
