<?php
/**
 * Created by PhpStorm.
 * User: mason
 * Date: 08.12.18
 * Time: 13:59
 */

namespace App\sol;


class Duck extends Bird
{
    public function fly(): int
    {
        return 20;
    }

    public function sweam() :int
    {
        return 40;
    }
}