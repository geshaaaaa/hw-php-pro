<?php
namespace LoggerDelForm;


class DeliverySms implements Delivery
{
    public function getDelivery(string  $format) : void
    {
        echo "Вывод формата $format по смс";
    }

}