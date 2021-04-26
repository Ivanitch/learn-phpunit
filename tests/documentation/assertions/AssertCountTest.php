<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertCountTest extends TestCase
{
    public function testAssertCount()
    {
        $this->assertCount(2, ['foo', 'bar']);
    }

    public function testAssertNotCount()
    {
        $this->assertNotCount(3, ['foo', 'bar']);
    }
}
