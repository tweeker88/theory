<?php

namespace App\soli;


use App\soli\Interfaces\boatInterface;
use App\soli\Interfaces\CarInterface;
use App\soli\Interfaces\HelicopterInterface;


class Desepticon implements HelicopterInterface, CarInterface, boatInterface
{
    public function transformToHelicopter()
    {
        echo 'Я ВЕРТОЛЕТ!';
    }

    public function transformToBoat()
    {
        echo 'И ЛОДКА!';
    }

    public function transformToCat()
    {
        echo 'И МАШИНА!';
    }
}