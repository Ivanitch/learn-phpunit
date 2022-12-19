<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertIsStringTest extends TestCase
{
    public function testAssertIsString()
    {
        $this->assertIsString('Hello, World!');
    }

    public function testAssertIsNotString()
    {
        $this->assertIsNotString(1);
    }
}
