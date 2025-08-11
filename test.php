<?php

require_once __DIR__ . "/vendor/autoload.php";

use Differ\Parser\Parser;
use Differ\Parser\JsonParser;
use Differ\Differ;
use Differ\Formatter\Formatter;

$path1 = 'input/file1.json';
$path2 = 'input/file2.json';
$path4 = 'input/file4_YAML.yaml';

$file1 = Parser::parse($path1);
$file2 = Parser::parse($path2);
$dif = Differ::compare($file1, $file2);
$formatted = Formatter::format($dif,);
print_r($formatted);
