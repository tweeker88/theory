<?php

namespace App\soli;


use App\soli\interfaces\HelicopterInterface;

class Helicopter implements HelicopterInterface
{
    public function transformToHelicopter()
    {
        echo 'Я умею транформироваться в вертолет';
    }
}