<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class NothingTest extends TestCase
{
    /** @test */
    public function onTrue()
    {
        $this->assertTrue(true);
    }

    public function testNothingTest()
    {
        $this->assertSame('test', \App\Nothing::test());
    }
}
