<?php

require_once __DIR__ . '/vendor/autoload.php';


interface DeliveryApi
{
    public function createDelivery() : void;
}

class UkrPostApi implements DeliveryApi
{
    public function createDelivery(): void
    {
        // TODO: Implement createDelivery() method.
    }
}

class NovaPostApi implements DeliveryApi
{

    public function createDelivery(): void
    {
        // TODO: Implement createDelivery() method.
    }
}

class MistApi implements DeliveryApi
{

    public function createDelivery(): void
    {
        // TODO: Implement createDelivery() method.
    }
}



function createOrder(DeliveryApi $order)
{
    $order->createDelivery();
}

$postService = $_GET('postService');

$postApi = match ($postService)
{
    'nova' => new NovaPostApi(),
    'mist' => new MistApi(),
    default => new UkrPostApi()
};