<?php

namespace Exercises\Arithmetics;

class ArithmeticsBase
{
    /**
     * @param int $number
     * @param int $divisible
     * @return bool
     */
    public function isDivisibleBy(int $number, int $divisible): bool
    {
        return $number % $divisible === 0;
    }

    /**
     * @param int $number
     * @return bool
     */
    public function isNatural(int $number): bool
    {
        return $number >= 0;
    }
}
