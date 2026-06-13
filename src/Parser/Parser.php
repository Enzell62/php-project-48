<?php

namespace Differ\Parser;

use Symfony\Component\Yaml\Yaml;

function parse(array $data): array
{
    [$content, $extension] = $data;
    switch ($extension) {
        case 'json':
            return json_decode($content, true, 512, JSON_THROW_ON_ERROR);
        case 'yaml':
        case 'yml':
            return Yaml::parse($content);
        default:
            throw new \Exception("Unknown extension: {$extension}");
    }
}
