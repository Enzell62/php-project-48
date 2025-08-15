<?php

require_once __DIR__ . "/vendor/autoload.php";

use Differ\Parser\Parser;
use Differ\Parser\JsonParser;
use Differ\Differ;
use Differ\Formatter\Formatter;

$path1 = 'input/file1.json';
$path2 = 'input/file2.json';
$path4 = 'input/file4_YAML.yaml';
$path5 = 'tests/fixtures/file1.json';
$path6 = 'tests/fixtures/file2.json';
$path7 = 'tests/fixtures/fixturesFormatter1.json';

$file1 = Parser::parse($path1);
$file2 = Parser::parse($path2);
$file7 = Parser::parse($path7);
$dif = Differ::compare($file1, $file2);
$formatted = Formatter::format($dif);
print_r($formatted);
