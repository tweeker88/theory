<?php

namespace App\soli;


use App\soli\Interfaces\HelicopterInterface;

class Helicopter implements HelicopterInterface
{
    public function transformToHelicopter()
    {
        echo 'Я умею транформироваться в вертолет';
    }
}