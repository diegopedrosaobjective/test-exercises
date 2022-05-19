<?php

namespace Exercises;

use Exercises\Arithmetics\Arithmetics;

class ExerciseOne
{
    public function sumOfAllNumbersTillThousandDivisibleByThreeAndFive(): int
    {
        $i = 0;
        $numbersArray = [];

        for ($i; $i < 1000; $i++) {
            $divisibleBy = new Arithmetics($i);
            $numbersArray[] = $divisibleBy->isDivisibleByThreeAndFive() ? $i : 0 ;
        }

        return array_sum($numbersArray);
    }

    public function sumOfAllNumbersTillThousandDivisibleByThreeOrFive(): int
    {
        $i = 0;
        $numbersArray = [];

        for ($i; $i < 1000; $i++) {
            $divisibleBy = new Arithmetics($i);
            $numbersArray[] = $divisibleBy->isDivisibleByThreeOrFive() ? $i : 0 ;
        }

        return array_sum($numbersArray);
    }

    public function sumOfAllNumbersTillThousandDivisibleByThreeOrFiveAndSeven(): int
    {
        $i = 0;
        $numbersArray = [];

        for ($i; $i < 1000; $i++) {
            $divisibleBy = new Arithmetics($i);
            $numbersArray[] = $divisibleBy->isDivisibleByThreeOrFiveAndSeven() ? $i : 0 ;
        }

        return array_sum($numbersArray);
    }
}
