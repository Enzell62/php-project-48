<?php

namespace Differ\Parser;

class JsonParser
{
    public static function parse(string $content): array
    {
        return json_decode($content, true);
    }
}
