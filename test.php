<?php

require_once __DIR__ . "/vendor/autoload.php";

use Differ\Parser\Parser;
use Differ\Differ;
use Differ\Formatter\Formatter;
use Differ\Formatter\PlainFormatter;

$path1 = 'input/file1.json';
$path2 = 'input/file2.json';
$path4 = 'input/file4_YAML.yaml';
$path5 = 'input/file5.yml';
$path6 = 'input/file6.yaml';
$path7 = 'input/file7.json';
$path8 = 'tests/fixtures/file7.json'; //
$path9 = 'tests/fixtures/file8.json'; //
$path10 = 'tests/fixtures/formatterFile7-8.json';
$path11 = 'tests/fixtures/formatterFile9.json';
$path101 = 'tests/fixtures/fixturesFormatter1.json';


$file1 = Parser::parse($path8);
$file2 = Parser::parse($path9);
$dif = Differ::compare($file1, $file2);
// $formatted = Formatter::format(Parser::parse($path10));
$formatted = Formatter::format($dif, 'plain');
// file_put_contents('tests/fixtures/formatterFile7-8-sorted.json', (json_encode(Formatter::sort($dif))));
var_dump($formatted);
// var_dump($formatted);
