<?php

namespace Deliveries;
use Cars\Car;
use Cars\EconomCar;
class Econom extends Delivery
{
    public function factoryMethod(): Car
    {
        return new EconomCar();
    }
}
