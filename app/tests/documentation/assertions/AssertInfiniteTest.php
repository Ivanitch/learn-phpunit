<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertInfiniteTest extends TestCase
{
    public function testAssertInfinite()
    {
        //$this->assertInfinite(1); // Failures

        $this->assertFinite(1);
    }
}
