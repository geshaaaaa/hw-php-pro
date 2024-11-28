<?php
namespace LoggerDelForm;

class DeliveryEmail implements Delivery
{
    public function getDelivery(string  $format) : void
    {
        echo "Вывод формата $format по имейл";
    }

}