<?php

namespace Exercises\Cart;

use Exercises\Product\Product;
use Exercises\User\User;

class Cart implements ICart
{
    /**
     * @var array <Product>
     */
    private array $products;
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param Product $product
     * @return bool
     */
    public function addProduct(Product $product): bool
    {
        $this->products[] = $product;
    }

    /**
     * @param Product $product
     * @return bool
     */
    public function removeProduct(Product $product): bool
    {
        $productIndex = array_search($product, $this->products);
        if ($productIndex !== false) {
            array_splice($this->products, $productIndex);
        }
        return true;
    }

    /**
     * @param Product $product
     * @return bool
     */
    public function updateProduct(Product $product): bool
    {
        if ($product->getQuantity() === 0) {
            return $this->removeProduct($product);
        }

        $index = array_search($product, $this->products);
        if ($index !== false) {
            $this->products[$index] = $product;
            return true;
        }

        return $this->addProduct($product);
    }

    /**
     * @inheritDoc
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @return float
     */
    public function getTotalCartValue(): float
    {
        $cartTotal = 0;
        foreach ($this->products as $product) {
            $cartTotal += ($product->getValue() * $product->getQuantity());
        }

        return $cartTotal;
    }
}