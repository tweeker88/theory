<?php
include __DIR__ . '/vendor/autoload.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);



echo '<h2>-----Бинарный поиск-----</h2><br>';
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


echo '<h2>-----Сортировка выбором-----</h2><br>';

$selectionSort = new \App\GrokkingAlgorithms\SelectionSort();

echo 'Исходный массив: ';
echo '<pre>';
var_dump($selectionSort->getArray());
echo '</pre>';

$array = $selectionSort->sort($selectionSort->getArray());

echo 'Отсортированный массив: ';
echo '<pre>';
var_dump($array);
echo '</pre>';


//echo '<h2>-----Рекурсия-----</h2><br>';
//
//$recursion = new \App\GrokkingAlgorithms\Recursion();
//
//
//$pile = [
//    'box0',
//    'box' => ['box', 'box'],
//    'box1'=>['box', 'box'],
//    'box2'=>['box', 'box', 'key'],
//    'box3'=>['box', 'box'],
//
//];
//
//$recursion->searchKey($pile);


echo '<h2>-----Сумма массива рекурсия-----</h2><br>';

$fastSotringObject = new \App\GrokkingAlgorithms\QuickSort();


$array = [1,2,3,14,5,12];

$summ = $fastSotringObject->sum($array);

echo $summ;

echo '<h2>-----Число элементов массива рекурсия-----</h2><br>';

$count = $fastSotringObject->count($array);

echo $count;

echo '<h2>-----Поиск макс. значения массива рекурсия-----</h2><br>';

$max = $fastSotringObject->searchMax($array);

echo $max;

echo '<h2>-----Быстрая сортировка-----</h2><br>';

$quickArray = $fastSotringObject->sort($array);

echo "<pre>";
var_dump($quickArray);
echo "</pre>";