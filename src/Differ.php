<?php

namespace Differ;

/**
 * Ядро сравнения
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
    private static function createItem($key, $value, $source, $status)
    {
        return ['key' => $key, 'value' => $value, 'source' => $source, 'status' => $status];
    }

    public static function compare($file1, $file2)
    {
        $result = [];
        $uniquesFile1 = array_diff(array_keys($file1), array_keys($file2));
        foreach ($uniquesFile1 as $intersectKey) {
            if (is_array($file1[$intersectKey])) { // для рекурсии запускаем сравнение значения самим с собой, чтобы разметить
                $value = self::compare($file1[$intersectKey], $file1[$intersectKey]);
            } else {
                $value = $file1[$intersectKey];
            }
            $result[] = self::createItem($intersectKey, $value, 'file1', 'unique');
        }

        $uniquesFile2 = array_diff(array_keys($file2), array_keys($file1));
        foreach ($uniquesFile2 as $intersectKey) {
            if (is_array($file2[$intersectKey])) { // для рекурсии запускаем сравнение значения самим с собой, чтобы разметить
                $value = self::compare($file2[$intersectKey], $file2[$intersectKey]);
            } else {
                $value = $file2[$intersectKey];
            }
            $result[] = self::createItem($intersectKey, $value, 'file2', 'unique');
        }

        $bothFile = array_intersect(array_keys($file1), array_keys($file2));
        foreach ($bothFile as $intersectKey) {
            if (is_array($file1[$intersectKey]) && is_array($file2[$intersectKey])) { // рекурсия
                $value = self::compare($file1[$intersectKey], $file2[$intersectKey]);
                $result[] = self::createItem($intersectKey, $value, null, 'both');
            } elseif ($file1[$intersectKey] === $file2[$intersectKey]) { // поставить тут строгое сравнение ?
                $result[] = self::createItem($intersectKey, $file1[$intersectKey], null, 'both');
            } else {
                if (is_array($file1[$intersectKey])) { // если одно занчение массив, а другое нет
                    $value = self::compare($file1[$intersectKey], $file1[$intersectKey]);
                    $result[] = self::createItem($intersectKey, $value, 'file1', 'modified');
                    $result[] = self::createItem($intersectKey, $file2[$intersectKey], 'file2', 'modified');
                } elseif (is_array($file2[$intersectKey])) { // если одно занчение массив, а другое нет
                    $value = self::compare($file2[$intersectKey], $file2[$intersectKey]);
                    $result[] = self::createItem($intersectKey, $value, 'file2', 'modified');
                    $result[] = self::createItem($intersectKey, $file1[$intersectKey], 'file1', 'modified');
                } else {
                    $result[] = self::createItem($intersectKey, $file1[$intersectKey], 'file1', 'modified');
                    $result[] = self::createItem($intersectKey, $file2[$intersectKey], 'file2', 'modified');
                }
            }
        }

        return $result;
    }
}
