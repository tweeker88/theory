<?php

namespace App\soli;

use App\soli\interfaces\CarInterface;

class Car implements CarInterface
{
    public function transformToCat()
    {
        echo 'Я умею превращаться в машину';
    }
}