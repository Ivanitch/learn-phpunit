<?php

declare(strict_types=1);

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Addition extends OperationAbstract implements OperationInterface
{
    /**
     * @return int
     * @throws NoOperandsException
     */
    public function calculate(): int
    {
        $this->checkOperands();

        return array_sum($this->operands);
    }
}