<?php

namespace App\solid\d;

class Wife implements FoodProvider
{
    public function getFood() :string
    {
        return 'Жена приготовила еду';
    }
}