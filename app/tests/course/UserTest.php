<?php

namespace Tests\course;

use App\Course\User;
use InvalidArgumentException;
use PHPUnit\Framework\Error\Error;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private User $user;

    // Вызывается перед каждым тестом
    protected function setUp(): void
    {
        $this->user = new User('John', 'john@mail.com', 28);
    }

    // Вызывается после каждого теста
    protected function tearDown(): void
    {

    }


    public function testName()
    {
        $this->assertEquals('John', $this->user->getName());
    }

    public function testEmail()
    {
        $this->assertEquals('john@mail.com', $this->user->getEmail());
    }

    public function testAge()
    {
        // 28 == $this->user->getAge()
        $this->assertEquals(28, $this->user->getAge());

        // 28 === $this->user->getAge()
        $this->assertSame(28, $this->user->getAge());
    }

    /**
     * Тест на то, что в методе setEmail() при невалидном email будет исключение
     * @return void
     */
    public function testEmailException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionCode(10);
        $this->expectExceptionMessage('Invalid Email');
        $this->user->setEmail('john@___mail.com');
    }
}