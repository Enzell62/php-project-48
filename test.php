<?php

require_once __DIR__ . "/vendor/autoload.php";

use Differ\Parser\Parser;
use Differ\Differ;
use Differ\Formatter\Formatter;

$path1 = 'input/file1.json';
$path2 = 'input/file2.json';
$path4 = 'input/file4_YAML.yaml';
$path5 = 'input/file5.yml';
$path6 = 'input/file6.yaml';
$path7 = 'input/file7.json';
$path8 = 'input/file8.json';
$path9 = 'tests/fixtures/fixturesFormatter1.json';


$file1 = Parser::parse($path7);
$file2 = Parser::parse($path8);

$dif = Differ::compare($file1, $file2);
$formatted = Formatter::format($dif);
print_r($dif);
