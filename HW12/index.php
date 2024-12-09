<?php
require_once __DIR__ .  "/vendor/autoload.php";

use Deliveries\Delivery;
use Deliveries\Econom;
use Deliveries\Luxury;


function clientCode(Delivery $delivery)
{
   echo $delivery->orderTaxi();
}

$econom = new Econom();
clientCode($econom);
$luxury = new Luxury();
clientCode($luxury);