<?php

namespace App\solid;

class Wife implements FoodProvider
{
    public function getFood() :string
    {
        return 'Жена приготовила еду';
    }
}