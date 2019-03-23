<?php

namespace App\GrokkingAlgorithms;

class Dijkstras
{
    private $graph = [
        'start' => [
            'a' => 6,
            'b' => 2
        ],
        'a' => [
            'finish' => 1
        ],
        'b' => [
            'a' => 3,
            'finish' => 5
        ],
        'finish' => []
    ];

    private $costs = ['a' => 6, 'b' => 2, 'finish' => PHP_INT_MAX];

    private $parents = [
        'a' => 'start',
        'b' => 'start',
        'finish' => null
    ];

    private $processed = [];

    // Находим до какой точки ближе всего
    private function findLowestCodeNode(array $costs)
    {
        $lowestCost = PHP_INT_MAX;
        $lowestCostNode = null;

        foreach ($costs as $node => $cost) {
            if ($cost < $lowestCost && !array_key_exists($node, $this->processed)) {
                $lowestCost = $cost;
                $lowestCostNode = $node;
            }
        }

        return $lowestCostNode;
    }

    public function searchWay()
    {
        $node = $this->findLowestCodeNode($this->costs);

        while($node){
            $cost = $this->costs[$node];
            $neighbors = $this->graph[$node];
            foreach ($neighbors as $dote => $value){
                $newCost = $cost + $value;
                if($this->costs[$dote] > $newCost){
                    $this->costs[$dote] = $newCost;
                    $this->parents[$dote] = $node;
                }
            }

            $this->processed[$node] = true;
            $node = $this->findLowestCodeNode($this->costs);
        }

        return $this->costs['finish'];
    }
}