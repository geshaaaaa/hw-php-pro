<?php
namespace LoggerDelForm;

interface Delivery
{
    public function getDelivery(string  $format) : void;
}