<?php
namespace LoggerDelForm;

interface Format
{
    public function getFormat(string $string) : string;
}