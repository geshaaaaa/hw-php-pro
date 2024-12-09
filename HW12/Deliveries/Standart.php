<?php
namespace Deliveries;
use Cars\Car;
class Standart extends Delivery
{
    public function factoryMethod(): Car
    {
        return new StandartCar();
    }
}