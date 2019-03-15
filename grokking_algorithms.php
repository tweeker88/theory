<?php
include __DIR__ . '/vendor/autoload.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$binarySearch = new \App\GrokkingAlgorithms\BinarySearch();

echo 'Исходный массив: ';
echo '<pre>';
var_dump($binarySearch->getArray());
echo '</pre>';


// --------------Example------------------
echo $binarySearch->exampleSearch(3);

echo '<br>Задача 1: Имеется отсортированный список из 128 имен, и вы ищите в нем значение методом бинарного поиска. Какое максимальное кол-во проверок?<br>';
// ОТВЕТ: log128 = 7
echo '<br>Задача 2: Предположим, размер списка увеличился вдвоем. Как изменится максимальное кол-во проверок<br>';
// ОТВЕТ: log256 = 8
