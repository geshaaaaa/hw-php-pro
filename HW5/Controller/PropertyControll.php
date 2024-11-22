<?php

namespace Controller;

class PropertyControll
{

    public function checkAge ($age) : string
    {
       return match ($age)
       {
           $age < 0 & $age > 110 => "Такого віку не існує",
           $age < 18 => "Користувачу не достатньо років",
           default => "Допустимий вік"
       };
    }
    public function checkPosition($pos) : string
    {
        if ($pos == "Admin")
        {
            return "Admin logged";
        }
        elseif ($pos == "User")
        {
            return "User logged";
        }
        return "Not defined";
    }



}