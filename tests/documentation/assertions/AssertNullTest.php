<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertNullTest extends TestCase
{
    public function testAssertNull()
    {
        $this->assertNull(null);
    }

    public function testAssertNotNull()
    {
        $this->assertNotNull('foo');
    }
}
