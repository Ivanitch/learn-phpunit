<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertIsCallableTest extends TestCase
{
    public function testAssertIsNotCallable()
    {
        //$this->assertIsCallable(null);// Failures

        $this->assertIsNotCallable(null);
    }
}
