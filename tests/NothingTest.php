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
        $this->assertEquals('test', \App\Nothing::test());
    }
}
