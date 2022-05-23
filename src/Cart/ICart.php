<?php

namespace Exercises\Cart;

use Exercises\Product\Product;
use Exercises\User\User;

interface ICart
{
    public function __construct(User $user);
    public function getUser() : User;
    public function addProduct(Product $product) : bool ;
    public function removeProduct(Product $product) : bool;
    public function updateProduct(Product $product) : bool;
    /**
     * return @var array <Product>
     */
    public function getProducts() : array;
    public function getTotalCartValue() : float ;
}