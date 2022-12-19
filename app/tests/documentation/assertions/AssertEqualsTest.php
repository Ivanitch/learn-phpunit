<?php

namespace Tests\documentation\assertions;

use PHPUnit\Framework\TestCase;
use stdClass;

class AssertEqualsTest extends TestCase
{
    public function testAssertEquals()
    {
        $this->assertEquals(0, 0);
    }

    public function testAssertEquals2()
    {
        $this->assertEquals('foo', 'foo');
    }

    public function testAssertNotEquals()
    {
        $this->assertNotEquals(0, 1);
    }

    public function testAssertNotEquals2()
    {
        $this->assertNotEquals('foo', 'bar');
    }

    public function testObject()
    {
        $expected = new stdClass;
        $expected->foo = 'foo';
        $expected->bar = 'bar';

        $actual = new stdClass;
        $actual->foo = 'foo';
        $actual->bar = 'bar';

        $this->assertEquals($expected, $actual);
    }

    public function testArray()
    {
        $array1 = ['a', 'b', 'c'];
        $array2 = ['a', 'c', 'd'];

        $this->assertNotEquals($array1, $array2);
    }
}
