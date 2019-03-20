<?php

namespace App\GrokkingAlgorithms;


class Graphs
{
    private function dd($array)
    {
        echo '<pre>';
        var_dump($array);
        echo '</pre>';
    }

    private $you = [
        'maggy', 'lorry', 'gerry', 'mike', 'denis', 'pasha', 'kostya', 'oleg', 'petya', 'sasha', 'alexandr'
    ];

    private $maggy = [
        'mike', 'kirill', 'yla', 'victor', 'vova'
    ];

    private $lorry = [
        'olya', 'anna', 'ilya', 'masha', 'marina', 'mangoMan', 'ira'
    ];

    public function searchSeller()
    {
        $checked = [];
        $seaching = [];

        $seaching = array_merge($seaching, $this->you);

        foreach ($seaching as &$name) {
            if (in_array($name, $checked)) {
                continue;

            }

            $checked[] = $name;

            if (isset($this->$name)) {
                $seaching = array_merge($seaching, $this->$name);
                array_splice($seaching, 0,1);
            }

            if ($name === 'mangoMan') {
                return 'Yeeeap ' . $name;
            }
        }
        return 'None';
    }
}