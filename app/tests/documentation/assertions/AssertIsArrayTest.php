<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertIsArrayTest extends TestCase
{
    public function testAssertIsArray()
    {
        $data = [1 => '1'];

        $this->assertIsArray($data);
    }

    public function testAssertIsNotArray()
    {
        $data = 'Hello, world!';

        $this->assertIsNotArray($data);
    }
}
