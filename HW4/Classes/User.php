<?php

namespace Classes;


class  User
{
    private string $name;
    private int $age;
    private string $email = "";

    public function getAll() : array
    {
        return ["age" => $this->age,"name" => $this->name];
    }



    public function __call(string $methodName, array $arguments)
    {
        if (method_exists($this,$methodName))
        {
         call_user_func_array([$this, $methodName], $arguments);
        }
        else {
            $customException = new CustomException();
            $customException->customMethodException($methodName);
        }
    }


    /**
     * @param string $name
     */

    private function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param int $age
     */
    private function setAge(int $age): void
    {
        $this->age = $age;
    }


}