<?php

namespace Tests\Arithmetics;

use Exercises\Arithmetics\ExerciseOne;
use Exercises\Arithmetics\NumbersMod;
use PHPUnit\Framework\TestCase;

class ExerciseOneTest extends TestCase {

    private ExerciseOne $exerciseOne;

    function setUp(): void
    {
        $this->exerciseOne = new ExerciseOne();
    }

    public function testSumOfAllNumbersTillThousandDivisibleByThreeAndFive () {

        $this->assertEquals(33165, $this->exerciseOne->sumOfAllNumbersTillThousandDivisibleByThreeAndFive());

    }

    public function testSumOfAllNumbersTillThousandDivisibleByThreeOrFive () {

        $this->assertEquals(233168, $this->exerciseOne->sumOfAllNumbersTillThousandDivisibleByThreeOrFive());

    }

    public function testSumOfAllNumbersTillThousandDivisibleByThreeOrFiveAndSeven () {

        $this->assertEquals(33173, $this->exerciseOne->sumOfAllNumbersTillThousandDivisibleByThreeOrFiveAndSeven());

    }
}