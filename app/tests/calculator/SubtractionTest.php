<?php

namespace Tests\calculator;

use App\Calculator\Exceptions\NoOperandsException;
use App\Calculator\Subtraction;
use PHPUnit\Framework\TestCase;

class SubtractionTest extends TestCase
{
    /**
     * @return Subtraction
     * @test
     */
    public function subtraction(): Subtraction
    {
        $subtraction = new Subtraction();
        $this->assertInstanceOf(Subtraction::class, $subtraction);
        return $subtraction;
    }

    /**
     * @throws NoOperandsException
     * @test
     * @depends subtraction
     */
    public function subtractionInGivenOperands(Subtraction $subtraction)
    {
        $subtraction->setOperands([10, 5]);
        $this->assertEquals(5, $subtraction->calculate());

        $subtraction->setOperands([10, 20]);
        $this->assertEquals(-10, $subtraction->calculate());

        $subtraction->setOperands([50, 6, 8, 9]);
        $this->assertEquals(27, $subtraction->calculate());
    }

    /**
     * @expectException NoOperandsException
     * @test
     * @depends subtraction
     */
    public function noOperandsGivenThrowsExceptionWhenCalculation(Subtraction $subtraction)
    {
        $this->expectException(NoOperandsException::class);
        $subtraction->setOperands([]);
        $subtraction->calculate();
    }
}
