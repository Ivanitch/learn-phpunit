<?php

namespace Tests\calculator;

use App\Calculator\Exceptions\NoOperandsException;
use App\Calculator\Multiplication;
use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{
    /**
     * @return Multiplication
     * @test
     */
    public function subtraction(): Multiplication
    {
        $multiplication = new Multiplication();
        $this->assertInstanceOf(Multiplication::class, $multiplication);
        return $multiplication;
    }

    /**
     * @throws NoOperandsException
     * @test
     * @depends subtraction
     */
    public function multiplicationInGivenOperands(Multiplication $multiplication)
    {

        $multiplication->setOperands([5, 5]);
        $this->assertEquals(25, $multiplication->calculate());

        $multiplication->setOperands([5, 5, 5]);
        $this->assertEquals(125, $multiplication->calculate());
    }

    /**
     * @expectException NoOperandsException
     * @test
     * @depends subtraction
     */
    public function noOperandsGivenThrowsExceptionWhenCalculation(Multiplication $multiplication)
    {
        $this->expectException(NoOperandsException::class);
        $multiplication->setOperands([]);
        $multiplication->calculate();
    }
}
