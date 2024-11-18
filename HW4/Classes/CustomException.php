<?php

namespace Classes;
class   CustomException extends \Exception
{
    public function customMethodException($methodName) : void
    {
        if (!method_exists($this, $methodName)) {

            throw new CustomException("Методу $methodName не існує" . PHP_EOL);
        }
    }
}
