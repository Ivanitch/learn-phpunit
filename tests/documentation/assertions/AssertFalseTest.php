<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertFalseTest extends TestCase
{
    public function testAssertFalse()
    {
        $var = false;
        $this->assertFalse($var);
    }

    public function testAssertNotFalse()
    {
        $var = true;
        $this->assertNotFalse($var);
    }
}
