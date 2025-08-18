<?php

namespace Differ\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use Differ\Parser\Parser;

class ParserTest extends TestCase
{
    public static function additionProvider()
    {
        $fixture1 = __DIR__ . '/fixtures/file_1.json';
        $fixture2 = __DIR__ . '/fixtures/file_2.json';
        $fixture3 = __DIR__ . '/fixtures/file5.yml';
        $fixture4 = __DIR__ . '/fixtures/file6.yaml';
        $excepted1 = [
            'host' => 'hexlet.io',
            'timeout' => 50,
            'proxy' => '123.234.53.22',
            'follow' => false
        ];
        $excepted2 = [
            'timeout' => 20,
            'verbose' => true,
            'host' => 'hexlet.io'
        ];

        return [
            'case 1' => [$fixture1, $excepted1],
            'case 2' => [$fixture2, $excepted2],
            'case 3' => [$fixture3, $excepted1],
            'case 4' => [$fixture4, $excepted2]
        ];
    }

    #[DataProvider('additionProvider')]
    public function testParser($fixture, $excepted)
    {
        $this->assertEquals($excepted, Parser::parse($fixture));
    }
}
