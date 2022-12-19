<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertDirectoryExistsTest extends TestCase
{
    public function testAssertDirectoryExist()
    {
        $dir = dirname(__DIR__) . '/section9/';

        $this->assertDirectoryExists($dir);
    }
}
