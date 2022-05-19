<?php

namespace Tests;

use Exercises\ExerciseTwo;
use PHPUnit\Framework\TestCase;

class ExerciseTwoTest extends TestCase
{
    private ExerciseTwo $exerciseTwo;

    public function setUp(): void
    {
        $this->exerciseTwo = new ExerciseTwo();
    }

    public function testIfNumberIsHappy () : void {
        $result = $this->exerciseTwo->isHappy(7);
        $this->assertTrue($result);
    }

    public function testIfNumberIsNotHappy () : void {
        $result = $this->exerciseTwo->isHappy(2);
        $this->assertFalse($result);
    }

    public function testNotNaturalNumber () : void {
        $this->expectExceptionMessage("Por favor informe um número natural.");
        $result = $this->exerciseTwo->isHappy(-2);
    }
}