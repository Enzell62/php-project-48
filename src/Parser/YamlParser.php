<?php

namespace Differ\Parser;

use Symfony\Component\Yaml\Yaml;

class YamlParser
{
    public static function parse(string $content): array
    {
        return Yaml::parse($content);
    }
}
