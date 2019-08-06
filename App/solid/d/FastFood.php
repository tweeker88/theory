<?php

namespace App\solid\d;

class FastFood implements FoodProvider
{
    public function getFood() :string
    {
        return 'Я поел в Макдоналдсе';
    }
}