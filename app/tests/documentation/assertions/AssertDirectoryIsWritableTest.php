<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertDirectoryIsWritableTest extends TestCase
{
    public function testAssertDirectoryIsWritable()
    {
        $dir = dirname(__DIR__) . '/section9/';

        $this->assertDirectoryIsWritable($dir);
    }
}
