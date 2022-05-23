<?php

namespace Exercises\ExerciseFour;

use Exercises\ApiService\IShippingService;
use Exercises\Cart\ICart;

interface IExerciseFour
{
    public function __construct(ICart $cart, IShippingService $shippingService);
    public function isFreeShipping();
    public function getTotalValue();
}