<?php

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Subtraction extends OperationAbstract implements OperationInterface
{
    /**
     * @return int
     * @throws NoOperandsException
     */
    public function calculate(): int
    {
        $this->checkOperands();

        $result = 0;
        foreach ($this->operands as $index => $operand) {
            if ($index === 0) {
                $result = $operand;
                continue;
            }

            $result -= $operand;
        }

        return $result;
    }
}