<?php
include __DIR__ . '/vendor/autoload.php';

// -------------The Single Responsibility Principle-------------

echo '<br>-------------The Single Responsibility Principle-------------<br>';
$logger = new \App\solid\s\Logger();
$product = new \App\solid\s\Product($logger);
$product->setPrice('10');


// -------------The Open Closed Principle-------------

echo '<br>-------------The Open Closed Principle-------------<br>';
$logger = new \App\solid\o\LoggerDb();
$product = new \App\solid\o\Product($logger);
$product->setPrice('10');


// -------------Liskov Substitution Principle-------------

echo '<br>-------------Liskov Substitution Principle-------------<br>';
$bird = new \App\solid\l\Bird();
//$bird = new \App\solid\l\Duck();
//$bird = new \App\solid\l\Penguin();
$product = new \App\solid\l\BirdRun($bird);
$product->run();


// -------------Interface segregation-------------

echo '<br>-------------Interface segregation-------------<br>';
$transformer = new \App\solid\i\Desepticon();
$transformer->transformToBoat();
$transformer->transformToCat();
$transformer->transformToHelicopter();

// -------------Dependency Invertion-------------

echo '<br>-------------Dependency Invertion-------------<br>';

$food = new \App\solid\d\Wife();
$male = new \App\solid\d\Male($food);
$male->eat();