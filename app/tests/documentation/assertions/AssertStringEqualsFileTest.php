<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertStringEqualsFileTest extends TestCase
{
    public function testAssertStringEqualsFile()
    {
        $file = dirname(__DIR__) . '/samples/file.txt';

        $this->assertStringEqualsFile($file, 'Hello, World!');
    }

    public function testAssertStringNotEqualsFile()
    {
        $file = dirname(__DIR__) . '/samples/file.txt';

        $this->assertStringNotEqualsFile($file, 'Hello, World');
    }
}
