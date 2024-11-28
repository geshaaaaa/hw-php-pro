<?php
namespace LoggerDelForm;


class DeliveryConsole implements Delivery
{
    public function getDelivery(string  $format) : void
    {
       echo "Вывод формата $format по консоле";
    }
}