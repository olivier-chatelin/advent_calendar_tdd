<?php

namespace App;

class Data
{
    private $data =
        "";
    public function toArray()
    {
        return explode(PHP_EOL,$this->data);
    }
}