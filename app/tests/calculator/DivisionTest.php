<?php

namespace Tests\calculator;

use App\Calculator\Division;
use App\Calculator\Exceptions\NoOperandsException;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    /**
     * @test
     * @return Division
     */
    public function division(): Division
    {
        $division = new Division();
        $this->assertInstanceOf(Division::class, $division);
        return $division;
    }

    /**
     * @param Division $division
     * @throws NoOperandsException
     * @test
     * @depends division
     */
    public function dividesGivenOperands(Division $division)
    {
        $division->setOperands([50, 10]);
        $this->assertEquals(5, $division->calculate());
    }

    /**
     * @param Division $division
     * @throws NoOperandsException
     * @depends division
     * @test
     */
    public function removeDivisionByZeroOperands(Division $division)
    {
        $division->setOperands([50, 0, 0, 10]);
        $this->assertEquals(5, $division->calculate());
    }

    /**
     * @param Division $division
     * @expectException NoOperandsException
     * @depends division
     * @test
     */
    public function noOperandsGivenThrowsExceptionWhenCalculation(Division $division)
    {
        $this->expectException(NoOperandsException::class);
        $division->setOperands([]);
        $division->calculate();
    }
}
