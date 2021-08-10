<?php
declare(strict_types=1);

namespace App\Services;

use App\Exceptions\ArithmeticOperationException;
use App\Interfaces\ArithmeticOperationInterface;
use App\Interfaces\Complex\ComplexNumberInterface;
use App\Interfaces\NumberInterface;

class OperationsFactory
{
    public function create(NumberInterface $number): ArithmeticOperationInterface
    {
        if ($number instanceof ComplexNumberInterface) {
            return ;
        }

        throw new ArithmeticOperationException('Implements only complex arithmetic operations');
    }
}
