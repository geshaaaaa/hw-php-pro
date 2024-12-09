<?php

class Toyota implements Car
{
    public function getModel(): string
    {
        return "Toyora Camry";
    }
    public function getPrice(): string
    {
        return "250 UAH";
    }
}