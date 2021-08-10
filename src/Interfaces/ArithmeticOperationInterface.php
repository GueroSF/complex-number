<?php
declare(strict_types=1);

namespace App\Interfaces;

interface ArithmeticOperationInterface
{
    public function addition(NumberInterface $addendsA, NumberInterface $addendsB): NumberInterface;
    public function subtraction(NumberInterface $minuend, NumberInterface $subtrahend): NumberInterface;
}
