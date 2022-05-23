<?php

namespace Exercises\Cart;

use Exercises\Product\IProduct;
use Exercises\User\User;

interface ICart
{
    public function __construct(User $user);
    public function getUser(): User;
    public function addProduct(IProduct $product): bool ;
    public function removeProduct(IProduct $product): bool;
    public function updateProduct(IProduct $product): bool;
    /**
     * @return array<IProduct>
     */
    public function getProducts(): array;
    public function getTotalCartValue(): float ;
}
