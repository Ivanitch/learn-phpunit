<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertIsIntTest extends TestCase
{
    public function testAssertIsInt()
    {
        $this->assertIsInt(1);
    }

    public function testAssertIsNotInt()
    {
        $this->assertIsNotInt(1.4);
    }
}
