<?php

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Multiplication extends OperationAbstract implements OperationInterface
{
    /**
     * @return int
     * @throws NoOperandsException
     */
    public function calculate(): int
    {
        $this->checkOperands();

        return array_product($this->operands);
    }
}