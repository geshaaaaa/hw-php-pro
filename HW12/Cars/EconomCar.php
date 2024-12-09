<?php
namespace Cars;
class EconomCar implements Car
{
    public function getModel(): string
    {
        return "Econom Car";
    }
    public function getPrice(): string
    {
        return "200 UAH";
    }
}