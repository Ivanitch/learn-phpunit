<?php

declare(strict_types=1);

namespace App\Calculator;

interface OperationInterface
{
    /**
     * @return int
     */
    public function calculate(): int;
}