<?php

namespace Tests\documentation\assertions;

use App\Documentation\Assertions\User;
use PHPUnit\Framework\TestCase;

class AssertClassHasStaticAttributeTest extends TestCase
{
    public function testHasStaticAttribute()
    {
        $this->assertClassHasStaticAttribute('gender', User::class);
    }

    public function testNotHasStaticAttribute()
    {
        $this->assertClassNotHasStaticAttribute('address', User::class);
    }

}
