<?php
include __DIR__ . '/vendor/autoload.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// -------------The Single Responsibility Principle-------------

echo '<br>-------------The Single Responsibility Principle-------------<br>';
$logger = new \App\s\Logger();
$product = new \App\s\Product($logger);
$product->setPrice(10);


// -------------The Open Closed Principle-------------

echo '<br>-------------The Open Closed Principle-------------<br>';
$logger = new \App\so\LoggerDb();
$product = new \App\so\Product($logger);
$product->setPrice(10);


// -------------Liskov Substitution Principle-------------

echo '<br>-------------Liskov Substitution Principle-------------<br>';
$bird = new \App\sol\Bird();
//$bird = new \App\sol\Duck();
//$bird = new \App\sol\Penguin();
$product = new \App\sol\BirdRun($bird);
$product->run();


// -------------Interface segregation-------------

echo '<br>-------------Interface segregation-------------<br>';
$car = new \App\soli\Car();
$transformer = new \App\soli\Desepticon();
$transformer->transformToBoat();
$transformer->transformToCat();
$transformer->transformToHelicopter();

// -------------Dependency Invertion-------------

echo '<br>-------------Dependency Invertion-------------<br>';

$food = new \App\solid\Wife();
$male = new \App\solid\Male($food);
$male->eat();


