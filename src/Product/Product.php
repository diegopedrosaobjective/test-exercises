<?php

namespace Exercises\Product;

class Product implements IProduct
{
    private string $name;
    private int $quantity;
    private float $value;

    public function __construct(string $name, int $quantity, float $value)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->value = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getValue(): float
    {
        return $this->value;
    }
}