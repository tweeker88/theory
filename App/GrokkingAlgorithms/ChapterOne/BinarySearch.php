<?php

namespace App\GrokkingAlgorithms\ChapterOne;

/**
 * Class BinarySearch
 * @package App\GrokkingAlgorithms\ChapterOne
 * Бинарный поиск - при поиске кажрый раз исключается половина чисел
 */
class BinarySearch
{
    private $array = [1, 3, 5, 7, 9];

    public function exampleSearch(int $item): string
    {
        $low = 0;
        $high = count($this->array);

        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);

            if ($this->array[$mid] === $item) {
                return 'Элемент находится на позиции ' . $mid;
            }

            if ($this->array[$mid] > $item) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        }

        return 'Элемент не найден';
    }

    public function getArray(): array
    {
        return $this->array;
    }
}