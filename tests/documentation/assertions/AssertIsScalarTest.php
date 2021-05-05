<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertIsScalarTest extends TestCase
{
    public function testAssertIsScalar()
    {
        $this->assertIsScalar(1);
    }

    public function testAssertIsNotScalar()
    {
        $this->assertIsNotScalar(null);
    }
}
