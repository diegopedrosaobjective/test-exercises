<?php

namespace Tests\Arithmetics;

use Exercises\Arithmetics\NumbersMod;
use PHPUnit\Framework\TestCase;

class ExerciseOneTest extends TestCase {

    public function testSumOfAllNumbersTillThousandDivisibleByThreeAndFive () {
        $i = 0;
        $numbersArray = [];

        for ($i; $i < 1000; $i++) {
            $divisibleBy = new NumbersMod($i);
            $numbersArray[] = $divisibleBy->isDivisibleByThreeAndFive() ? $i : 0 ;
        }

        $result = array_sum($numbersArray);
        $this->assertEquals(33165, $result);
    }

    public function testSumOfAllNumbersTillThousandDivisibleByThreeOrFive () {
        $i = 0;
        $numbersArray = [];

        for ($i; $i < 1000; $i++) {
            $divisibleBy = new NumbersMod($i);
            $numbersArray[] = $divisibleBy->isDivisibleByThreeOrFive() ? $i : 0 ;
        }

        $result = array_sum($numbersArray);
        $this->assertEquals(233168, $result);
    }

    public function testSumOfAllNumbersTillThousandDivisibleByThreeOrFiveAndSeven () {
        $i = 0;
        $numbersArray = [];

        for ($i; $i < 1000; $i++) {
            $divisibleBy = new NumbersMod($i);
            $numbersArray[] = $divisibleBy->isDivisibleByThreeOrFiveAndSeven() ? $i : 0 ;
        }

        $result = array_sum($numbersArray);
        $this->assertEquals(33173, $result);
    }
}