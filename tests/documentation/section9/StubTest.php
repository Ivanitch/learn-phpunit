<?php

namespace Tests\documentation\section9;

use App\Documentation\SomeClass;
use PHPUnit\Framework\TestCase;

class StubTest extends TestCase
{
    public function testStub()
    {
        // Создать заглушку для класса SomeClass.
        $stub = $this->createMock(SomeClass::class);

        // Настроить заглушку.
        $stub->method('doSomething')
            ->willReturn('foo');

        // Вызов $stub->doSomething() теперь вернёт 'foo'.
        $this->assertSame('foo', $stub->doSomething());
    }
}
