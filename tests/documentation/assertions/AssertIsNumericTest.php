<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertIsNumericTest extends TestCase
{
    public function testAssertIsNumeric()
    {
        $this->assertIsNumeric(1);
    }

    public function testAssertIsNotNumeric()
    {
        $this->assertIsNotNumeric([]);
    }
}
