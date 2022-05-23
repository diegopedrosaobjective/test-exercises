<?php

namespace Exercises\ApiService;

class Correios implements IShippingService
{
    /**
     * @param string $cep
     * @return float
     */
    public function getShippingCosts(string $cep): float
    {
        // Tax Calcs implementation
        return 25.00;
    }
}
