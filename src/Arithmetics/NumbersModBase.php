<?php

namespace Exercises\Arithmetics;

class NumbersModBase
{
    /**
     * @param int $number
     * @param int $divisible
     * @return bool
     */
    public function isDivisibleBy (int $number, int $divisible): bool {
        return $number % $divisible === 0;
    }
}