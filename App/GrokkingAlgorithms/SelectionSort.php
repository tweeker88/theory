<?php

namespace App\GrokkingAlgorithms;

/**
 * Class SelectionSort
 * @package App\GrokkingAlgorithms
 * Сортировка выбором
 */
class SelectionSort
{
    private $array = [1, 9, 12, 3, 4];


    function findSmall(array $arr)
    {
        $smallest = $arr[0];
        $smallestIndex = 0;
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] < $smallest) {
                $smallest = $arr[$i];
                $smallestIndex = $i;
            }
        }
        return $smallestIndex;
    }
    function sort(array $arr)
    {
        $newArr = [];
        for ($i = 0, $length = count($arr); $i < $length; $i++) {
            $smallest = $this->findSmall($arr);
            array_push($newArr, array_splice($arr, $smallest, 1)[0]);
        }
        return $newArr;
    }

    public function getArray(): array
    {
        return $this->array;
    }
}