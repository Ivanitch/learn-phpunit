<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertContainsOnlyTest extends TestCase
{
    public function testAssertContainsOnly()
    {
        $this->assertContainsOnly('string', ['1', '2', 'string']);
    }

    public function testAssertNotContainsOnly()
    {
        $this->assertNotContainsOnly('string', ['1', '2', 3]);
    }
}
