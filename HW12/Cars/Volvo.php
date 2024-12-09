<?php

class Volvo implements Car
{
    public function getModel(): string
    {
        return "Volvo XC60";
    }
    public function getPrice(): string
    {
        return "200 UAH";
    }
}