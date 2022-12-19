<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertArrayHasKeyTest extends TestCase
{
    /**
     * В массиве есть ключ "name"
     */
    public function testKeyPresence()
    {
        $array = [
            'name' => 'John',
            'age' => 28
        ];

        $this->assertArrayHasKey('name', $array);
    }

    /**
     * В массиве нет ключа "address"
     */
    public function testKeyMissing()
    {
        $array = [
            'name' => 'John',
            'age' => 28
        ];

        $this->assertArrayNotHasKey('address', $array);
    }
}
