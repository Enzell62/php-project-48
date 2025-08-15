<?php

namespace Differ\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use Differ\Formatter\Formatter;

class FormatterTest extends TestCase
{
    public static function additionProvider()
    {
        $fixture1 = json_decode(file_get_contents(__DIR__ . '/fixtures/fixturesFormatter1.json'), true);
        $fixture2 = json_decode(file_get_contents(__DIR__ . '/fixtures/fixturesFormatter2.json'), true);
        $excepted1 = '{
    FirstStroke: FirstValue
  - sugar: 342
  + sugar: 45
  - verbose: true
  + verbose: false
}';

        $excepted2 = '{
  - follow: false
    host: hexlet.io
  - proxy: 123.234.53.22
  - timeout: 50
  + timeout: 20
  + verbose: true
}';
        return [
            'case 1' => [$fixture1, $excepted1],
            'case 2' => [$fixture2, $excepted2]
        ];
    }

    #[DataProvider('additionProvider')]
    public function testFormatter($fixture, $excepted)
    {
        $this->assertEquals($excepted, Formatter::format($fixture));
    }
}
