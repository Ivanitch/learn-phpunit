<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertIsObjectTest extends TestCase
{
    public function testAssertIsObject()
    {
        $this->assertIsObject(new \stdClass());
    }

    public function testAssertIsNotObject()
    {
        $this->assertIsNotObject(null);
    }
}
