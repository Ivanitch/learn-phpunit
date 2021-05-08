<?php

namespace Tests\documentation\assertions;

use App\Documentation\Assertions\User;
use PHPUnit\Framework\TestCase;

class AssertObjectHasAttributeTest extends TestCase
{
    public function testAssertObjectHasAttribute()
    {
        $this->assertObjectHasAttribute('name', new User());
    }

    public function testAssertObjectNotHasAttribute()
    {
        $this->assertObjectNotHasAttribute('address', new User());
    }
}
