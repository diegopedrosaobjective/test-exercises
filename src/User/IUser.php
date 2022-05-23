<?php

namespace Exercises\User;

interface IUser
{
    public function __construct(string $name, string $cep);
    public function getName () : string;
    public function getCep () : string;
}