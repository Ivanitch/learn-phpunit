<?php

namespace Tests\documentation\assertions;

use Exception;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class AssertInstanceOfTest extends TestCase
{
    public function testAssertInstanceOf()
    {
        $this->assertInstanceOf(Exception::class, new RuntimeException());
    }

    public function testAssertNotInstanceOf()
    {
        $this->assertNotInstanceOf(RuntimeException::class, new Exception());
    }
}
