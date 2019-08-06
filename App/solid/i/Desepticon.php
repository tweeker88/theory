<?php

namespace App\solid\i;


use App\solid\i\Interfaces\boatInterface;
use App\solid\i\Interfaces\CarInterface;
use App\solid\i\Interfaces\HelicopterInterface;


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