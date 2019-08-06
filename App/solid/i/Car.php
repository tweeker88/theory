<?php

namespace App\solid\i;

use App\solid\i\Interfaces\CarInterface;

class Car implements CarInterface
{
    public function transformToCat()
    {
        echo 'Я умею превращаться в машину';
    }
}