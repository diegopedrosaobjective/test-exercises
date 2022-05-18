<?php

namespace Exercises\Arithmetics;

class NumbersMod extends NumbersModBase
{
    private int $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    function isDivisibleByThreeAndFive(): bool {
        $divisibleByThree = $this->isDivisibleBy($this->number, 3);
        $divisibleByFive= $this->isDivisibleBy($this->number, 5);
        return $divisibleByThree && $divisibleByFive;
    }

    function isDivisibleByThreeOrFive(): bool {
        $divisibleByThree = $this->isDivisibleBy($this->number, 3);
        $divisibleByFive= $this->isDivisibleBy($this->number, 5);
        return $divisibleByThree || $divisibleByFive;
    }

    function isDivisibleByThreeOrFiveAndSeven () {
        $divisibleByThree = $this->isDivisibleBy($this->number, 3);
        $divisibleByFive= $this->isDivisibleBy($this->number, 5);
        $divisibleBySeven = $this->isDivisibleBy($this->number, 7);

        return ($divisibleByThree || $divisibleByFive) && $divisibleBySeven;
    }

}