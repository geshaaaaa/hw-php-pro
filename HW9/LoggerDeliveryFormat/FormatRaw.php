<?php
namespace LoggerDelForm;
class FormatRaw implements Format
{
    public function getFormat(string $string): string
    {
        return $string;
    }
}