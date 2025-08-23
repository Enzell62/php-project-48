<?php

namespace Differ\Tests;

use PHPUnit\Framework\TestCase;
use Differ\Differ;

class DifferTest extends TestCase
{
    private $file1;
    private $file2;
    private $file3;
    private $file4;

    public function setUp(): void
    {
        $this->file1 = json_decode(file_get_contents(__DIR__ . '/fixtures/file1.json'), true);
        $this->file2 = json_decode(file_get_contents(__DIR__ . '/fixtures/file2.json'), true);
        $this->file3 = json_decode(file_get_contents(__DIR__ . '/fixtures/file7.json'), true);
        $this->file4 = json_decode(file_get_contents(__DIR__ . '/fixtures/file8.json'), true);
    }
    public function testDifferFlatten(): void
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

    public function testDifferReqursive(): void
    {
        $expected =
        [
            [
            'key' => 'group2',
            'value' =>
            [
                [
                    'key' => 'abc',
                    'value' => 12345,
                    'source' => null,
                    'status' => 'both'
                ],
                [
                    'key' => 'deep',
                    'value' =>
                    [
                        [
                            'key' => 'id',
                            'value' => 45,
                            'source' => null,
                            'status' => 'both'
                        ]
                    ],
                    'source' => null,
                    'status' => 'both'
                ]
            ],
            'source' => 'file1',
            'status' => 'unique'
            ],
            [
                'key' => 'group3',
                'value' =>
                [
                    [
                        'key' => 'deep',
                        'value' =>
                        [
                            [
                                'key' => 'id',
                                'value' =>
                                [
                                    [
                                    'key' => 'number',
                                    'value' => 45,
                                    'source' => null,
                                    'status' => 'both'
                                    ]
                                ],
                                'source' => null,
                                'status' => 'both'
                            ]
                        ],
                        'source' => null,
                        'status' => 'both'
                    ],
                    [
                        'key' => 'fee',
                        'value' => 100500,
                        'source' => null,
                        'status' => 'both'
                    ]
                ],
                'source' => 'file2',
                'status' => 'unique'
            ],
            [
                'key' => 'common',
                'value' =>
                [
                    [
                        'key' => 'setting2',
                        'value' => 200,
                        'source' => 'file1',
                        'status' => 'unique'
                    ],
                    [
                        'key' => 'follow',
                        'value' => false,
                        'source' => 'file2',
                        'status' => 'unique'
                    ],
                    [
                        'key' => 'setting4',
                        'value' => 'blah blah',
                        'source' => 'file2',
                        'status' => 'unique'
                    ],
                    [
                        'key' => 'setting5',
                        'value' =>
                        [
                            [
                                'key' => 'key5',
                                'value' => 'value5',
                                'source' => null,
                                'status' => 'both'
                            ]
                        ],
                        'source' => 'file2',
                        'status' => 'unique'
                    ],
                    [
                        'key' => 'setting1',
                        'value' => 'Value 1',
                        'source' => null,
                        'status' => 'both'
                    ],
                    [
                        'key' => 'setting3',
                        'value' => true,
                        'source' => 'file1',
                        'status' => 'modified'
                    ],
                    [
                        'key' => 'setting3',
                        'value' => null,
                        'source' => 'file2',
                        'status' => 'modified'
                    ],
                    [
                        'key' => 'setting6',
                        'value' =>
                        [
                            [
                                'key' => 'ops',
                                'value' => 'vops',
                                'source' => 'file2',
                                'status' => 'unique'
                            ],
                            [
                                'key' => 'key',
                                'value' => 'value',
                                'source' => null,
                                'status' => 'both'
                            ],
                            [
                                'key' => 'doge',
                                'value' =>
                                [
                                    [
                                        'key' => 'wow',
                                        'value' => '',
                                        'source' => 'file1',
                                        'status' => 'modified'
                                    ],
                                    [
                                        'key' => 'wow',
                                        'value' => 'so much',
                                        'source' => 'file2',
                                        'status' => 'modified'
                                    ]
                                ],
                                'source' => null,
                                'status' => 'both'
                            ]
                        ],
                        'source' => null,
                        'status' => 'both'
                    ]
                ],
                'source' => null,
                'status' => 'both'
            ],
            [
                'key' => 'group1',
                'value' =>
                [
                    [
                        'key' => 'baz',
                        'value' => 'bas',
                        'source' => 'file1',
                        'status' => 'modified'
                    ],
                    [
                        'key' => 'baz',
                        'value' => 'bars',
                        'source' => 'file2',
                        'status' => 'modified'
                    ],
                    [
                        'key' => 'foo',
                        'value' => 'bar',
                        'source' => null,
                        'status' => 'both'
                    ],
                    [
                        'key' => 'nest',
                        'value' =>
                        [
                            [
                                'key' => 'key',
                                'value' => 'value',
                                'source' => null,
                                'status' => 'both'
                            ]
                        ],
                        'source' => 'file1',
                        'status' => 'modified'
                    ],
                    [
                        'key' => 'nest',
                        'value' => 'str',
                        'source' => 'file2',
                        'status' => 'modified'
                    ]
                ],
                'source' => null,
                'status' => 'both'
            ]
        ];
        $this->assertEquals($expected, Differ::compare($this->file3, $this->file4));
    }
}
