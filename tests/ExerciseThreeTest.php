<?php

namespace Tests;

use Exercises\Arithmetics\Arithmetics;
use Exercises\Arithmetics\ArithmeticsBase;
use Exercises\ExerciseThree;
use Exercises\ExerciseTwo;
use PHPUnit\Framework\TestCase;

class ExerciseThreeTest extends TestCase
{
    private ExerciseTwo $exercise2;
    private ExerciseThree $exercise3;

    public function setUp(): void
    {
        $this->exercise2 = new ExerciseTwo();
        $this->exercise3 = new ExerciseThree();
    }

    public function testIfTheSumOfTheWordIsCorrect () : void {
        $result = $this->exercise3->wordSum("Amor");
        $this->assertEquals(73, $result);
    }

    public function testIfTheSumOfTheWordIsHappy () : void {
        $wordSum = $this->exercise3->wordSum("g");
        $result = $this->exercise2->isHappy($wordSum);
        $this->assertTrue($result);
    }

    public function testIfTheSumOfTheWordIsNatural () : void {
        $wordSum = $this->exercise3->wordSum("Exercise");
        $result = $this->exercise2->isNatural($wordSum);
        $this->assertTrue($result);
    }

    public function testIfTheSumOfTheWordIsAPrimeNumber () : void {
        $wordSum = $this->exercise3->wordSum("g");
        $arithmetics = new ArithmeticsBase();
        $result = $arithmetics->isPrimeNumber($wordSum);
        $this->assertTrue($result);
    }

    public function testIfTheSumOfTheWordIsDivisibleByThreeOrFive () : void {
        $wordSum = $this->exercise3->wordSum("Exercise");
        $arithmetics = new Arithmetics($wordSum);
        $result = $arithmetics->isDivisibleByThreeOrFive();
        $this->assertTrue($result);
    }
}