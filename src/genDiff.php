<?php

namespace Differ;

use Differ\Parser\Parser;
use Differ\Differ;
use Differ\Formatter\Formatter;

function genDiff(string $path1, string $path2, string $format = "stylish")
{
    $file1 = Parser::parse($path1);
    $file2 = Parser::parse($path2);

    $dif = Differ::compare($file1, $file2);
    return Formatter::format($dif, $format);
}
