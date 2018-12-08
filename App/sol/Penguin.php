<?php
/**
 * Created by PhpStorm.
 * User: mason
 * Date: 08.12.18
 * Time: 13:59
 */

namespace App\sol;


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