<?php

namespace Exercises\ApiService;

interface IShippingService
{
    /**
     * @param string $cep
     * @return mixed
     */
    public function getShippingCosts(string $cep);
}
