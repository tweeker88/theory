<?php

namespace App\so;

use App\so\Interfaces\LoggerInterface;

class LoggerDb implements LoggerInterface
{

    public function log(string $message)
    {
        $this->writeToDb($message);
    }

    public function write(string $message) :void
    {
        echo 'Идет запись в БД ' . $message;
    }
}