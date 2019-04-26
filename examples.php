<?php
include __DIR__ . '/vendor/autoload.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$fibonacci = new \App\Algorithms\Fibonacci();

//var_dump($fibonacci->searchNumber(10));

var_dump($fibonacci->test(11));