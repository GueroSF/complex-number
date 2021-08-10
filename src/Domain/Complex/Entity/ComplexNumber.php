<?php
declare(strict_types=1);

namespace App\Domain\Complex\Entity;

use App\Interfaces\Complex\ComplexNumberInterface;

class ComplexNumber implements ComplexNumberInterface
{

    public function __construct(private int $realNumber, private int $imaginaryNumber)
    {
    }

    public function getRealNumber(): int
    {
        return $this->realNumber;
    }

    public function getImaginaryNumber(): int
    {
        return $this->imaginaryNumber;
    }

}
