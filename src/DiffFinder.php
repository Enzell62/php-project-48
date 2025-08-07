<?php

namespace App;

use ArrayAccess;
use function Funct\Collection\findWhere;

/**
 * Принимает путь к файлу json, парсит, возвращает объект - ассоциативный массив
 * @param string $file1 Путь к файлу
 * @return array
 * @throws FileNotFoundException Если файлы не существуют
 * @throws InvalidFormatException Если формат файла не поддерживается
 */
class DiffFinder
{
    public $array;

    public function __construct($path)
    {
        $content = file_get_contents($path);
        $this->array = json_decode($content, true);
    }

    public function getDiff($file2, $format)
    {
        $dif = $this->diff($file2);
        $formated = $this->format($dif, $format);
        return $formated;
    }

    /**
     * Принимает объект DiffFinder, сравнивает с текущим, отдает отчет о различиях
     * @param DiffFinder Объект для сравнения
     * @return array массив, каждый объект - ассоциативный массив:
     *      [
     *          'key' => [
     *              'key' => (string) ключ,
     *              'value1' => (mixed) значение,
     *              'value2' => (mixed) значение,
     *              'source1' => (string) источник 'file1' | 'file2',
     *              'source2' => (string) источник 'file1' | 'file2',
     *              'status' => (string) статус 'unique' | 'both' | 'modified'
     *          ]
     *      ]
     */
    public function diff(DiffFinder $file2)
    {
        $file1 = $this->array;
        $file2 = $file2->array;
        
        $result = [];
        foreach ($file1 as $key => $value) {
            if (array_intersect_assoc([$key => $value], $file2) == [$key => $value]) {
                $result[$key] = ['key' => $key, 'value' => $value, 'source' => null, 'status' => 'both'];
            } elseif (array_key_exists($key, $file2)) {
                $result[$key] = ['key' => $key, 'value1' => $value, 'value2' => $file2[$key], 'source1' => 'file1', 'source2' => 'file2', 'status' => 'modified'];
            } elseif (!array_key_exists($key, $file2)) {
                $unique = array_diff_key($file1, $file2) + array_diff_key($file2, $file1);
                foreach ($unique as $key => $value) {
                    $result[$key] = ['key' => $key, 'value' => $value, 'source' => null, 'status' => 'unique'];
                }
            }
        }
        return $result;
    }

    /**
     * Принимает ассоциативный массив после метода diff, форматирует вывод согласно $format
     * @param array
     * @return string
     */
    public function format(array $array, string $format = "first")
    {
        $nameFormatMethod = 'format' . ucfirst($format);
        if (method_exists($this, $nameFormatMethod)) {
            return $this->$nameFormatMethod($array);
        }
        throw new \InvalidArgumentException("Unsupported format: $format");
    }

    public function formatFirst($array)
    {
        echo 'first';
        return $array;
    }

    public function formatStylish($array) 
    {

    }
}
