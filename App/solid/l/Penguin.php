<?php

namespace App\solid\l;

class Penguin extends Bird
{
    public function fly(): int
    {
        return 0;
    }

    public function sweam() :int
    {
        return 100;
    }
}