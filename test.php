<?php

require_once __DIR__ . "/vendor/autoload.php";
use App\DiffFinder;

$ex1 = new DiffFinder('input/file1.json');

print_r($ex1);
