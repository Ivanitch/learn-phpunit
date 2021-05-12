<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertTrueTest extends TestCase
{
    public function testAssertTrue()
    {
        $this->assertTrue(true);
    }

    public function testAssertNotTrue()
    {
        $this->assertNotTrue(false);
    }
}
