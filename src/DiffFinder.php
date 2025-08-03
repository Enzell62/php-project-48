<?php

namespace App;

use ArrayAccess;

/**
 * Принимает путь к файлу json, парсит, возвращает объект - ассоциативный массив
 * @param string $file1 Путь к файлу
 * @return object App\Parser<string, mixed>&\Traversable<string, mixed>&\Countable&\ArrayAccess<string, mixed>
 * @throws FileNotFoundException Если файлы не существуют
 * @throws InvalidFormatException Если формат файла не поддерживается
 */

class DiffFinder implements ArrayAccess
{
    public $array;

    public function __construct($path)
    {
        $content = file_get_contents($path);
        $this->array = json_decode($content, true);
    }

    public function offsetExists(mixed $offset): bool
    {
        return isset($this->array->$offset);
    }

    public function offsetGet(mixed $offset): mixed
    {
        return isset($this->array->$offset) ? $this->array->$offset : null;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->$offset = $value;
        } else {
            $this->array->$offset = $value;
        }
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->array->$offset);
    }
}
