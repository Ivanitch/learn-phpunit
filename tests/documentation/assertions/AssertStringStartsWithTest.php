<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertStringStartsWithTest extends TestCase
{
    public function testAssertStringStartsWith()
    {
        $this->assertStringStartsWith('prefix', 'prefixfoo');
    }

    public function testAssertStringStartsNotWith()
    {
        $this->assertStringStartsNotWith('prefix', 'foo');
    }
}
