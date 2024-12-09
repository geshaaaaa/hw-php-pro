<?php
namespace Cars;
class StandartCar implements Car
{
    public function getModel(): string
    {
        return "Standart Car";
    }
    public function getPrice(): string
    {
        return "250 UAH";
    }
}