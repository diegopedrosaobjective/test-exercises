<?php

namespace Tests\Arithmetics;

use Exercises\Arithmetics\Arithmetics;
use PHPUnit\Framework\TestCase;

class NumbersModTest extends TestCase {
    public int $number;

    public function testIfTheNumberIsDivisibleByThreeAndFive () : void {
        $numberMod = new Arithmetics(15);
        $result = $numberMod->isDivisibleByThreeAndFive();
        $this->assertTrue($result);
    }

    public function testIfTheNumberIsNotDivisibleByThreeAndFive () : void {
        $numberMod = new Arithmetics(10);
        $result = $numberMod->isDivisibleByThreeAndFive();
        $this->assertFalse($result);
    }

    public function testIfTheNumberIsDivisibleByThreeOrFive () : void {
        $numberMod = new Arithmetics(5);
        $result = $numberMod->isDivisibleByThreeOrFive();
        $this->assertTrue($result);
    }

    public function testIfTheNumberIsNotDivisibleByThreeOrFive () : void {
        $numberMod = new Arithmetics(1);
        $result = $numberMod->isDivisibleByThreeOrFive();
        $this->assertFalse($result);
    }

    public function testIfTheNumberIsDivisibleByThreeOrFiveAndSeven () : void {
        $numberMod = new Arithmetics(70);
        $result = $numberMod->isDivisibleByThreeOrFiveAndSeven();
        $this->assertTrue($result);
    }

    public function testIfTheNumberIsNotDivisibleByThreeOrFiveAndSeven () : void {
        $numberMod = new Arithmetics(90);
        $result = $numberMod->isDivisibleByThreeOrFiveAndSeven();
        $this->assertFalse($result);
    }
}