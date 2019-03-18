<?php

namespace App\GrokkingAlgorithms;


class QuickSort
{
    public function sum(array $array)
    {
        if(count($array) === 0){
            return 0;
        }

        return $array[0] + $this->sum(array_splice($array,1));
    }

    public function count(array $array)
    {

        if(count($array) === 0){
            return 0;
        }

        return 1 + $this->count(array_splice($array, 1));
    }

    public function searchMax(array $array)
    {
        if(count($array) === 2){
            return $array[0] > $array[1] ? $array[0] : $array[1];
        }

        $subMax = $this->searchMax(array_splice($array,1 ));

        return $array[0] > $subMax ? $array[0] : $subMax;
    }

    public function sort(array $array)
    {
        if (count($array) < 2) {
            return $array;
        } else {
            $pivot = $array[0];

            $less = array_filter(array_slice($array, 1), function($el) use ($pivot) { return $el <= $pivot; });
            $greater = array_filter(array_slice($array, 1), function($el) use ($pivot) { return $el > $pivot; });

            return array_merge($this->sort($less), [$pivot], $this->sort($greater));
        }
    }
}