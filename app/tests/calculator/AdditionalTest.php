<?php

declare(strict_types=1);

namespace Tests\calculator;

use App\Calculator\Addition;
use App\Calculator\Exceptions\NoOperandsException;
use PHPUnit\Framework\TestCase;

class AdditionalTest extends TestCase
{
    /**
     * @test
     * @return Addition
     */
    public function addition(): Addition
    {
        $addition = new Addition();
        $this->assertInstanceOf(Addition::class, $addition);
        return $addition;
    }

    /**
     * @param Addition $addition
     * @throws NoOperandsException
     * @test
     * @depends addition
     */
    public function addUpGivenOperands(Addition $addition)
    {
        $addition->setOperands([5, 10]);
        $this->assertEquals(15, $addition->calculate());
    }

    /**
     * @param Addition $addition
     * @test
     * @depends addition
     * @expectException NoOperandsException
     */
    public function noOperandsGivenThrowsExceptionWhenCalculation(Addition $addition)
    {
        $this->expectException(NoOperandsException::class);
        $addition->setOperands([]);
        $addition->calculate();
    }
}
