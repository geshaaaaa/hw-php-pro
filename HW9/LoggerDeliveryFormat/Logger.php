<?php

namespace LoggerDelForm;

class Logger
{

    private Format $format;
    private Delivery $delivery;

    public function __construct(Format $format,Delivery $delivery)
    {
        $this->format   = $format;
        $this->delivery = $delivery;
    }

    public function log($string) : void
    {
        $this->delivery->getDelivery($this->format->getFormat($string));
    }

}


