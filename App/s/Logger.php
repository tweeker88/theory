<?php

namespace App\s;

class Logger
{
    public $message;

    public function setLog(string $message): bool
    {
        $this->message = $message;

        return true;
    }
}