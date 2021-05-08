<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertStringMatchesFormatFileTest extends TestCase
{
    public function testAssertStringMatchesFormatFile()
    {
        $file = dirname(__DIR__) . '/samples/matches-format.txt';

        $this->assertStringMatchesFormatFile($file, 'Hello, World!');
    }
}
