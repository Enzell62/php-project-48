<?php

namespace Differ\GenDiff;

use function Differ\Parser\parse;
use function Differ\Differ\genDiffTree;
use function Differ\Formatter\format;

function genDiff(string $path1, string $path2, string $formatName = 'stylish'): string
{
    $data1 = file_get_contents($path1);
    $type1 = pathinfo($path1, PATHINFO_EXTENSION);
    $parsed1 = parse($data1, $type1);

    $data2 = file_get_contents($path2);
    $type2 = pathinfo($path2, PATHINFO_EXTENSION);
    $parsed2 = parse($data2, $type2);

    $diffTree = genDiffTree($parsed1, $parsed2);

    return format($diffTree, $formatName);
}
