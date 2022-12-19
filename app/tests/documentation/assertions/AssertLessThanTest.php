<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertLessThanTest extends TestCase
{
    public function testAssertLessThan()
    {
        $this->assertLessThan(2, 1);
    }
}
