<?php

namespace Exercises\Product;

interface IProduct
{
    public function __construct(string $name, int $quantity, float $value);
    public function getName(): string;
    public function getQuantity(): int;
    public function getValue(): float;
}
