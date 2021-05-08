<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;

class AssertStringMatchesFormatTest extends TestCase
{
    public function testAssertStringMatchesFormat()
    {
        $this->assertStringMatchesFormat('%s', 'foo');
    }

    public function testAssertStringNotMatchesFormat()
    {
        $this->assertStringNotMatchesFormat('%i', 'foo');
    }
}
