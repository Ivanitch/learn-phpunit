<?php

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

abstract class OperationAbstract
{
    protected array $operands;

    /**
     * @param array $operands
     */
    public function setOperands(array $operands): void
    {
        $this->operands = $operands;
    }

    /**
     * @throws NoOperandsException
     */
    protected function checkOperands()
    {
        if (count($this->operands) === 0) {
            throw new NoOperandsException();
        }
    }
}
