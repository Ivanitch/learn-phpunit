<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertJsonStringEqualsJsonStringTest extends TestCase
{
    public function testAssertJsonStringEqualsJsonString()
    {
        $this->assertJsonStringEqualsJsonString(
            json_encode(['Mascot' => 'Tux']),
            json_encode(['Mascot' => 'Tux'])
        );
    }
}
