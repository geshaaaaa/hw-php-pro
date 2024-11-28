<?php
require_once "vendor/autoload.php";
use LoggerDelForm\Logger;
use LoggerDelForm\FormatRaw;
use LoggerDelForm\DeliverySms;


$logger = new Logger(new FormatRaw, new DeliverySms);
$logger->log('Emergency error! Please fix me!');