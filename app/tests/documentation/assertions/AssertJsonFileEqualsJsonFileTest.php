<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertJsonFileEqualsJsonFileTest extends TestCase
{
    public function testAssertJsonFileEqualsJsonFile()
    {
        $file1 = dirname(__DIR__) . '/samples/file-1.json';
        $file2 = dirname(__DIR__) . '/samples/file-2.json';

        $this->assertJsonFileEqualsJsonFile($file1, $file2);
    }
}
