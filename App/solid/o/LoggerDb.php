<?php

namespace App\solid\o;

use App\solid\o\Interfaces\LoggerInterface;

class LoggerDb implements LoggerInterface
{

    public function log(string $message)
    {
        $this->writeToDb($message);
    }

    public function writeToDb(string $message) :void
    {
        echo 'Идет запись в БД ' . $message;
    }
}