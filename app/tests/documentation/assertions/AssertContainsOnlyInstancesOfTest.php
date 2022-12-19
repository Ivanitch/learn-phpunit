<?php

namespace Tests\documentation\assertions;

use App\Documentation\Assertions\User;
use PHPUnit\Framework\TestCase;

class AssertContainsOnlyInstancesOfTest extends TestCase
{
    public function testFailure()
    {
        $this->assertContainsOnlyInstancesOf(
            User::class,
            [new User]
        );
    }
}
