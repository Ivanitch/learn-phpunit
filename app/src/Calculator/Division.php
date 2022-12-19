<?php

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Division extends OperationAbstract implements OperationInterface
{
    /**
     * @return int
     * @throws NoOperandsException
     */
    public function calculate(): int
    {
        $this->checkOperands();

        return array_reduce(array_filter($this->operands), function ($a, $b) {
            if ($a !== null && $b !== null) {
                return $a / $b;
            }

            return $b;
        }, null);
    }
}
