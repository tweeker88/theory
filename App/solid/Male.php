<?php

namespace App\solid;


class Male
{
    private $foodProvider;

    public function __construct(FoodProvider $foodProdifer)
    {
        $this->foodProvider = $foodProdifer;
    }

    public function eat()
    {
        $food = $this->foodProvider->getFood();

        echo $food;
    }
}