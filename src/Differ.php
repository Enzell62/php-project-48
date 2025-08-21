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
        $uniquesFile1 = array_diff_key($file1, $file2);
        foreach ($uniquesFile1 as $key => $value) { // с рекурсией ломается, потому что array_diff_key сравнивает не только ключи но и значения
            if (is_array($value)) { // для рекурсии запускаем сравнение значения самим с собой, чтобы разметить
                $value = self::compare($value, $value);
            } else {
                $result[] = self::createItem($key, $value, 'file1', 'unique');
            }
        }
        $uniquesFile2 = array_diff_key($file2, $file1);
        foreach ($uniquesFile2 as $key => $value) {
            if (is_array($value)) { // рекурсия (запускаем сравнение значения самим с собой, чтобы разметить)
                $value = self::compare($value, $value);
            } else {
                $result[] = self::createItem($key, $value, 'file2', 'unique');
            }
        }
        $bothFile = array_intersect(array_keys($file1), array_keys($file2));
        foreach ($bothFile as $intersectKey) {
            if (is_array($file1[$intersectKey]) && is_array($file2[$intersectKey])) { // рекурсия
                $result[] = self::compare($file1[$intersectKey], $file2[$intersectKey]);
            } // дописать рекурсию для вариантов, когда одно значение массив, а другое нет
            if ($file1[$intersectKey] == $file2[$intersectKey]) { // поставить тут строгое сравнение ?
                $result[] = self::createItem($intersectKey, $file1[$intersectKey], null, 'both');
            } else {
                $result[] = self::createItem($intersectKey, $file1[$intersectKey], 'file1', 'modified');
                $result[] = self::createItem($intersectKey, $file2[$intersectKey], 'file2', 'modified');
            }
        }

        return $result;
    }
}
