<?php

namespace Differ\Tests;

use PHPUnit\Framework\TestCase;
use Differ\Differ;

class DifferTest extends TestCase
{
    private $file1;
    private $file2;

    public function setUp(): void
    {
        $this->file1 = json_decode(file_get_contents(__DIR__ . '/fixtures/file1.json'), true);
        $this->file2 = json_decode(file_get_contents(__DIR__ . '/fixtures/file2.json'), true);
    }
    public function testDiffer(): void
    {
        $exepted =
        [
            [
            'key' => 'FirstStroke',
            'value' => 'FirstValue',
            'source' => null,
            'status' => 'both'
            ],
            [
            'key' => 'verbose',
            'value' => true,
            'source' => 'file1',
            'status' => 'modified'
            ],
            [
            'key' => 'verbose',
            'value' => false,
            'source' => 'file2',
            'status' => 'modified'
            ],
            [
            'key' => 'sugar',
            'value' => '342',
            'source' => 'file1',
            'status' => 'modified'
            ],
            [
            'key' => 'sugar',
            'value' => '45',
            'source' => 'file2',
            'status' => 'modified'
            ]
        ];
        $this->assertEquals($exepted, Differ::compare($this->file1, $this->file2));
    }
}
