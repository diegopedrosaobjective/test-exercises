<?php

namespace Tests\Arithmetics;

use Exercises\Arithmetics\NumbersMod;
use PHPUnit\Framework\TestCase;

class NumbersModTest extends TestCase {
    public int $number;

    public function testIfTheNumberIsDivisibleByThreeAndFive () : void {
        $numberMod = new NumbersMod(15);
        $result = $numberMod->isDivisibleByThreeAndFive();
        $this->assertTrue($result);
    }

    public function testIfTheNumberIsNotDivisibleByThreeAndFive () : void {
        $numberMod = new NumbersMod(10);
        $result = $numberMod->isDivisibleByThreeAndFive();
        $this->assertFalse($result);
    }

    public function testIfTheNumberIsDivisibleByThreeOrFive () : void {
        $numberMod = new NumbersMod(5);
        $result = $numberMod->isDivisibleByThreeOrFive();
        $this->assertTrue($result);
    }

    public function testIfTheNumberIsNotDivisibleByThreeOrFive () : void {
        $numberMod = new NumbersMod(1);
        $result = $numberMod->isDivisibleByThreeOrFive();
        $this->assertFalse($result);
    }

    public function testIfTheNumberIsDivisibleByThreeOrFiveAndSeven () : void {
        $numberMod = new NumbersMod(70);
        $result = $numberMod->isDivisibleByThreeOrFiveAndSeven();
        $this->assertTrue($result);
    }

    public function testIfTheNumberIsNotDivisibleByThreeOrFiveAndSeven () : void {
        $numberMod = new NumbersMod(90);
        $result = $numberMod->isDivisibleByThreeOrFiveAndSeven();
        $this->assertFalse($result);
    }
}