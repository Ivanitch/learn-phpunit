<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertContainsTest extends TestCase
{
    public function testAssertContains()
    {
        $this->assertContains(4, [1, 2, 3, 4]);
    }

    public function testAssertNotContains()
    {
        $this->assertNotContains(4, [1, 2, 3]);
    }
}
