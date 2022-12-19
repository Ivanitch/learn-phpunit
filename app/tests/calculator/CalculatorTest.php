<?php

namespace Tests\calculator;

use App\Calculator\Addition;
use App\Calculator\Calculator;
use App\Calculator\Division;
use App\Calculator\Multiplication;
use App\Calculator\Subtraction;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCanSetSingleOperation()
    {
        $addition = new Addition();
        $addition->setOperands([5, 10]);

        $calculator = new Calculator();
        $calculator->setOperation($addition);

        $this->assertCount(1, $calculator->getOperations());
    }

    public function testCanSetMultipleOperation()
    {
        $addition1 = new Addition();
        $addition1->setOperands([5, 10]);

        $addition2 = new Addition();
        $addition2->setOperands([10, 10]);


        $calculator = new Calculator();
        $calculator->setOperations([$addition1, $addition2]);

        $this->assertCount(2, $calculator->getOperations());
    }

    public function testOperationsAreIgnoredIfNotInstanceOfOperationInterface()
    {
        $addition = new Addition();
        $addition->setOperands([5, 10]);

        $calculator = new Calculator();
        $calculator->setOperations([$addition, 'Faisal', 'Ibrahim']);

        $this->assertCount(1, $calculator->getOperations());
    }

    public function testCanCalculateResult()
    {
        $addition = new Addition();
        $addition->setOperands([10, 10]);

        $calculator = new Calculator();
        $calculator->setOperation($addition);

        $this->assertEquals(20, $calculator->calculate());
    }

    public function testCalculateMethodReturnsMultipleResults()
    {
        $addition = new Addition();
        $addition->setOperands([10, 10]); // 20

        $subtraction = new Subtraction();
        $subtraction->setOperands([10, 5]); // 5

        $division = new Division();
        $division->setOperands([100, 2]); // 50

        $multiplication = new Multiplication();
        $multiplication->setOperands([5, 5]); // 25

        $calculator = new Calculator();
        $calculator->setOperations([$addition, $subtraction, $division, $multiplication]);

        $this->assertIsArray($calculator->calculate());
        $this->assertEquals(20, $calculator->calculate()[0]);
        $this->assertEquals(5, $calculator->calculate()[1]);
        $this->assertEquals(50, $calculator->calculate()[2]);
        $this->assertEquals(25, $calculator->calculate()[3]);
    }
}