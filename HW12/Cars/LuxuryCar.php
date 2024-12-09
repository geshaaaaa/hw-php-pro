<?php
namespace Cars;
class LuxuryCar implements Car
{
    public function getPrice(): string
    {
        return "450 UAH";
    }
    public function getModel(): string
    {
        return "LuxuryCar";
    }

}