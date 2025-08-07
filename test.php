<?php

require_once __DIR__ . "/vendor/autoload.php";
use App\DiffFinder;
use function Funct\Collection\sortBy;

$path1 = 'input/file1.json';
$path2 = 'input/file2.json';

$file1 = new DiffFinder($path1);
$file2 = new DiffFinder($path2);

$diff = $file1->diff($file2);

try {
    $result = $file1->format($diff, "first");
} catch (InvalidArgumentException $e) {
    echo 'ERROR: ' . $e->getMessage();
    exit(1);
}

print_r($result);
