<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertLessThanOrEqualTest extends TestCase
{
    public function testAssertLessThanOrEqual()
    {
        $this->assertLessThanOrEqual(1, 0);
    }
}
