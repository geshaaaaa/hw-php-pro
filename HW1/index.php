<?php

class Contact

{
    protected string $name;

    public function __set(string $name, $value): void
    {
        $this->name = $value;
    }

    protected function hiHello ($Yo)
    {
        echo "$Yo hello";
    }

    /*public function __call(string $name, array $arguments)
    {
        // TODO: Implement __call() method.
    }*/
}

    $obj = new Contact();

$obj->hiHello("Hena");

