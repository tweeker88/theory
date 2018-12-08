<?php

namespace App\solid;

class FastFood implements FoodProvider
{
    public function getFood() :string
    {
        return 'Я поел в Макдоналдсе';
    }
}