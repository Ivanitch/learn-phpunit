<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertIsIterableTest extends TestCase
{
    public function testAssertIsIterable()
    {
        $data = [];

        $this->assertIsIterable($data);
    }

    public function testAssertIsNotIterable()
    {
        $data = 1;

        $this->assertIsNotIterable($data);
    }
}
