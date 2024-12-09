<?php


namespace Deliveries;
use Cars\Car;

abstract class Delivery
{
    abstract function factoryMethod(): Car;

    public function orderTaxi(): string
    {
        $car = $this->factoryMethod();
        $result = "Taxi will be arrive soon, your car is: {$car->getModel()}, price is: {$car->getPrice()}";
        return $result;
    }
}