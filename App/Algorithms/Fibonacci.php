<?php

namespace App\Algorithms;


class Fibonacci
{
    private $array = [1, 1];

    public function searchArray($n)
    {
        if (isset($this->array[$n])) {
            return $this->array;
        }

        $last = array_key_last($this->array);

        $this->array[] = $this->array[$last] + $this->array[$last - 1];

        return $this->searchArray($n);
    }

    public function searchNumber($n){
        if ($n == 1 || $n == 2) {
            return 1;
        } else {
            return $this->searchNumber($n - 1) + $this->searchNumber($n - 2);
        }
    }
}