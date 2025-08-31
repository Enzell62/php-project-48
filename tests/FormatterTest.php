<?php

namespace Differ\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use Differ\Formatter\Formatter;
use Differ\Parser\Parser;

class FormatterTest extends TestCase
{
    public static function additionProvider()
    {
        $fixture1 = json_decode(file_get_contents(__DIR__ . '/fixtures/fixturesFormatter1.json'), true);
        $fixture2 = json_decode(file_get_contents(__DIR__ . '/fixtures/fixturesFormatter2.json'), true);
        $fixture3 = Parser::parse(__DIR__ . '/fixtures/formatterFile7-8.json');
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
        $excepted3 = '{
    common: {
      + follow: false
        setting1: Value 1
      - setting2: 200
      - setting3: true
      + setting3: null
      + setting4: blah blah
      + setting5: {
            key5: value5
        }
        setting6: {
            doge: {
              - wow: 
              + wow: so much
            }
            key: value
          + ops: vops
        }
    }
    group1: {
      - baz: bas
      + baz: bars
        foo: bar
      - nest: {
            key: value
        }
      + nest: str
    }
  - group2: {
        abc: 12345
        deep: {
            id: 45
        }
    }
  + group3: {
        deep: {
            id: {
                number: 45
            }
        }
        fee: 100500
    }
}';
        return [
            'case 1' => [$fixture1, $excepted1],
            'case 2' => [$fixture2, $excepted2],
            'case 3' => [$fixture3, $excepted3]
        ];
    }

    #[DataProvider('additionProvider')]
    public function testFormatter($fixture, $excepted)
    {
        $this->assertEquals($excepted, Formatter::format($fixture));
    }
}
