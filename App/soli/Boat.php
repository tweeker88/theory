<?php

namespace App\soli;


use App\soli\Interfaces\boatInterface;

class Boat implements boatInterface
{
    public function transformToBoat()
    {
        echo 'Я умею трансформироваться в лодку!';
    }
}