<?php

namespace Differ\Parser;

class YamlParser
{
    public static function parse($file)
    {
        echo "YAML PARSER" . PHP_EOL;
        print_r(self::class);
        print_r($file);
    }
}
