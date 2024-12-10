<?php

class Contact {
    private $name;
    private $surname;
    private $email;
    private $phone;
    private $address;



    public function name(string $name)
    {
       $this->name = $name;
       return $this;
    }
    public function surname(string $surname)
    {
        $this->surname = $surname;
        return $this;
    }
    public function email(string $email)
    {
        $this->email = $email;
        return $this;
    }

    public function phone($phone) {
        $this->phone = $phone;
        return $this;
    }

    public function address($address) {
        $this->address = $address;
        return $this;
    }

    public function build() {
       return $this;
    }
}