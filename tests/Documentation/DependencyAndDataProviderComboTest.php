<?php

namespace Tests\Documentation;

use PHPUnit\Framework\TestCase;

class DependencyAndDataProviderComboTest extends TestCase
{
    public function provider(): array
    {
        return [['provider']];
    }

    public function testProducerFirst(): string
    {
        $this->assertTrue(true);
        return 'first';
    }

    public function testProducerSecond(): string
    {
        $this->assertTrue(true);
        return 'second';
    }

    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     * @dataProvider provider
     */
    public function testConsumer()
    {
        $this->assertSame(
            ['provider', 'first', 'second'],
            func_get_args()
        );
    }
}
