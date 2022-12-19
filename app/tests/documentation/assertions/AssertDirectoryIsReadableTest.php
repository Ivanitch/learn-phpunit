<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertDirectoryIsReadableTest extends TestCase
{
    public function testAssertDirectoryIsReadable()
    {
        $dir = dirname(__DIR__) . '/section9/';

        $this->assertDirectoryIsReadable($dir);
    }
}
