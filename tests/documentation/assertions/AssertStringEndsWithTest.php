<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertStringEndsWithTest extends TestCase
{
    public function testAssertStringEndsWith()
    {
        $this->assertStringEndsWith('suffix', 'foosuffix');
    }

    public function testAssertStringEndsNotWith()
    {
        $this->assertStringEndsNotWith('suffix', 'foo');
    }
}
