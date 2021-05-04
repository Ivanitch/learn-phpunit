<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertIsFloatTest extends TestCase
{
    public function testAssertIsFloat()
    {
        $this->assertIsFloat(1.4);
    }

    public function testAssertIsNotFloat()
    {
        $this->assertIsNotFloat(1);
    }
}
