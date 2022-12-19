<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertIsBoolTest extends TestCase
{
    public function testAssertIsBool()
    {
        $this->assertIsBool(true);
    }

    public function testAssertIsNotBool()
    {
        $this->assertIsNotBool(null);
    }
}
