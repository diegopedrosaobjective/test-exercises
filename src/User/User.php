<?php

namespace Exercises\User;

class User implements IUser
{
    private string $name;
    private string $cep;

    public function __construct(string $name, string $cep)
    {
        $this->name = $name;
        $this->cep = $cep;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCep(): string
    {
        return $this->cep;
    }
}
