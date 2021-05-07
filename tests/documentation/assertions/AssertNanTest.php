<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertNanTest extends TestCase
{
    public function testAssertNan()
    {
        $nan = acos(8);

        $this->assertNan($nan);
    }
}
