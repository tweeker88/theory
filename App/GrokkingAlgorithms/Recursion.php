<?php

namespace App\GrokkingAlgorithms;


class Recursion
{
    /**
     * ПОИСК КЛЮЧА В КОРОБКА
     * 1. Посмотреть содержимое в коробке
     * 2. Если вы найдете коробку, вернуться к шагу 1
     * 3. Если вы найдете ключ, поиск закончен.
     * @param array $array
     */

    public function searchKey(array $array)
    {
        foreach ($array as $key => $value){
            if($value !== 'key' && is_array($value)){
                    $this->searchKey($value);
            }
            if($value === 'key'){
                die('Я нашел коробку! Она лежит в ' . $key .' ' . $value);
            }
        }
    }
}