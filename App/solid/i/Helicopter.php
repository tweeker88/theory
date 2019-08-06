<?php

namespace App\solid\i;


use App\solid\i\Interfaces\HelicopterInterface;

class Helicopter implements HelicopterInterface
{
    public function transformToHelicopter()
    {
        echo 'Я умею транформироваться в вертолет';
    }
}