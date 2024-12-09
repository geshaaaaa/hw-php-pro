<?php
namespace Deliveries;
use Cars\Car;
use Cars\LuxuryCar;
class Luxury extends Delivery
{
    public function factoryMethod(): Car
    {
        return new LuxuryCar();
    }
}