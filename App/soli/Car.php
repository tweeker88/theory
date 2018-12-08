<?php

namespace App\soli;

use App\soli\Interfaces\CarInterface;

class Car implements CarInterface
{
    public function transformToCat()
    {
        echo 'Я умею превращаться в машину';
    }
}