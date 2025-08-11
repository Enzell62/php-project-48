<?php

namespace Differ\Parser;

class JsonParser
{
    public static function parse(string $content)
    {
        return json_decode($content, true);
    }
}
