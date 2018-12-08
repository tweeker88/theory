<?php

namespace App\soli;


use App\soli\interfaces\boatInterface;
use App\soli\interfaces\CarInterface;
use App\soli\interfaces\HelicopterInterface;


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