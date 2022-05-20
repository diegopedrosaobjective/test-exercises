<?php

namespace Tests;

use Exercises\ExerciseOne;
use PHPUnit\Framework\TestCase;

class ExerciseOneTest extends TestCase {

    private ExerciseOne $exerciseOne;

    function setUp(): void
    {
        $this->exerciseOne = new ExerciseOne();
    }

    public function testSumOfAllNumbersTillThousandDivisibleByThreeAndFive () : void {

        $this->assertEquals(33165, $this->exerciseOne->sumOfAllNumbersTillThousandDivisibleByThreeAndFive());

    }

    public function testSumOfAllNumbersTillThousandDivisibleByThreeOrFive () : void {

        $this->assertEquals(233168, $this->exerciseOne->sumOfAllNumbersTillThousandDivisibleByThreeOrFive());

    }

    public function testSumOfAllNumbersTillThousandDivisibleByThreeOrFiveAndSeven () : void {

        $this->assertEquals(33173, $this->exerciseOne->sumOfAllNumbersTillThousandDivisibleByThreeOrFiveAndSeven());

    }
}