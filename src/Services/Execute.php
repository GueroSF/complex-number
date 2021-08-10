<?php
declare(strict_types=1);

namespace App\Services;

use App\Domain\Complex\Entity\ComplexNumber;
use App\Interfaces\NumberInterface;

class Execute
{

    public function __construct(private OperationsFactory $factory)
    {
    }

    public function execute(int $realNumber, int $imaginaryNumber, string $operator): void
    {
        $numberA = new ComplexNumber($realNumber, $imaginaryNumber);

        $operation = $this->factory->create($numberA);

        $operation->addition($numberA, $numberB);
    }
}
