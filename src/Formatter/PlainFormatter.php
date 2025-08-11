<?php

namespace Differ\Formatter;

class PlainFormatter
{
    public static function format($array)
    {
        print_r($array);
        echo PHP_EOL;
        return "PLAIN FORMAT";
    }
}