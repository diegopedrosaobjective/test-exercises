<?php

namespace Exercises;

use Exercises\ApiService\IShippingService;
use Exercises\Cart\ICart;

class ExerciseFour implements ExerciseFour\IExerciseFour
{
    const FREE_SHIPPING_LIMIT_VALUE = 100.00;
    private ICart $cart;
    private IShippingService $shippingService;

    public function __construct(ICart $cart, IShippingService $shippingService)
    {
        $this->cart = $cart;
        $this->shippingService = $shippingService;
    }

    public function isFreeShipping() : bool
    {
        $this->cart->getTotalCartValue() <= self::FREE_SHIPPING_LIMIT_VALUE;
    }

    public function getTotalValue() : float
    {
        if($this->isFreeShipping()) {
            return $this->cart->getTotalCartValue();
        }
        return $this->cart->getTotalCartValue() + $this->shippingService->getShippingCosts($this->cart->getUser()->getCep());
    }
}