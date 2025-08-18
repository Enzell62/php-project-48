<?php

namespace Differ\Parser;

use Differ\Parser\JsonParser;
use Differ\Parser\YamlParser;
use Symfony\Component\Yaml\Exception\ParseException;

/**
 * Принимает путь к файлу, проверяет существует ли, выбирает какой парсер применить
 * @param string $path Путь к файлу
 * @return array Ассоциативный массив из содержимого файла
 * @throws InvalidArgumentException Если файлы не существуют
 * @throws InvalidArgumentException Если формат файла не поддерживается
 */
class Parser
{
    public static function parse(string $path)
    {
        if (file_exists($path)) {
            $content = file_get_contents($path);
        } else {
            throw new \InvalidArgumentException('Error: File "' . $path . '" does not exist.');
        }

        $map = [
            'json' => JsonParser::class,
            'yml' => YamlParser::class,
            'yaml' => YamlParser::class
        ];

        $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
        if (!key_exists($extension, $map)) {
            throw new \InvalidArgumentException('Error: File extension "' . $extension . '" not supported.');
        }
        $parserName = $map[$extension];
        try {
            return $parserName::parse($content);
        } catch (ParseException $e) {
            throw new \InvalidArgumentException('Unable to parse the YAML string: ' . $e->getMessage(), previous: $e);
        }
    }
}
