<?php

namespace Tests\documentation\assertions;

use App\Documentation\Assertions\User;
use PHPUnit\Framework\TestCase;

class AssertClassHasAttributeTest extends TestCase
{
    public function testAttributePresence()
    {
        $this->assertClassHasAttribute('name', User::class);
    }

    public function testAttributeMissing()
    {
        $this->assertClassNotHasAttribute('address', User::class);
    }
}
