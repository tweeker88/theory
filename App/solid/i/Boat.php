<?php

namespace App\solid\i;


use App\solid\i\Interfaces\boatInterface;

class Boat implements boatInterface
{
    public function transformToBoat()
    {
        echo 'Я умею трансформироваться в лодку!';
    }
}