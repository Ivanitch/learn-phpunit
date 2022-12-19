<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertSameTest extends TestCase
{
    public function testAssertSame()
    {
        $this->assertSame(2204, 2204);
    }

    public function testAssertNotSame()
    {
        $this->assertNotSame('2204', 2204);
    }
}
