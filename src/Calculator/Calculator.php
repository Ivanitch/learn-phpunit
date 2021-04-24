<?php

namespace App\Calculator;

class Calculator
{
    /**
     * @var OperationInterface
     */
    protected $operations = [];

    /**
     * @param OperationInterface $operation
     */
    public function setOperation(OperationInterface $operation): void
    {
        $this->operations[] = $operation;
    }

    /**
     * @param array $operations
     */
    public function setOperations(array $operations): void
    {
        $filteredOperations = array_filter($operations, function ($operation) {
            return $operation instanceof OperationInterface;
        });

        $this->operations = array_merge($this->operations, $filteredOperations);
    }

    /**
     * @return OperationInterface
     */
    public function getOperations()
    {
        return $this->operations;
    }


    public function calculate()
    {
        if (count($this->operations) > 1) {
            return array_map(function ($operation) {
                return $operation->calculate();
            }, $this->operations);
        }

        return $this->operations[0]->calculate();
    }
}