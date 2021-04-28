<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertEmptyTest extends TestCase
{
    public function testAssertEmpty()
    {
        $this->assertEmpty([]);
    }

    public function testAssertNotEmpty()
    {
        $this->assertNotEmpty(['foo']);
    }
}
