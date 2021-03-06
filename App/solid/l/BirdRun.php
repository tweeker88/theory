<?php

namespace App\solid\l;

class BirdRun
{
    private $bird;

    public function __construct(Bird $bird)
    {
        $this->bird = $bird;
    }

    public function run()
    {
        echo 'У птицы скорость: ' . $this->bird->fly();
    }

}