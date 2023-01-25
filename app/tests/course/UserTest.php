<?php

namespace Tests\course;

use App\Course\User;
use InvalidArgumentException;
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

    /**
     * Вывод на экран точного вхождение строки
     * @return void
     */
    public function testEchoName(): void
    {
        $this->expectOutputString('John');
        echo $this->user->getName();
    }

    /**
     * Вывод на экран строки удовлетворяющей регулярному выражению
     * @return void
     */
    public function testEchoString(): void
    {
        $this->expectOutputRegex('/[\w\-]+/');
        echo $this->user->getName();
    }

    /**
     * Можно предварительно обработать ожидаемое значение
     * @return void
     */
    public function testEchoStringByCallback(): void
    {
        $this->expectOutputString('John');
        $this->setOutputCallback(function ($string) {
            return trim($string);
        });
        echo $this->user->getName();
    }
}
