<?php

namespace App\Course;

use InvalidArgumentException;

/**
 * @property string $name
 * @property string $email
 * @property integer $age
 */

class User
{
    private string $name;
    private string $email;
    private int    $age;

    public function __construct(string $name, string $email, int $age)
    {
        $this->name = $name;
        $this->email = $this->setEmail($email);
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    public function setEmail(string $email): string
    {
        $_email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($_email, FILTER_VALIDATE_EMAIL))
            throw new InvalidArgumentException('Invalid Email', 10);
        return $_email;
    }
}
