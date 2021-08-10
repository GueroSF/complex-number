<?php
declare(strict_types=1);

namespace App\Interfaces\Complex;

use App\Interfaces\NumberInterface;

interface ComplexNumberInterface extends NumberInterface
{
    public function getRealNumber(): int;
    public function getImaginaryNumber(): int;
}
