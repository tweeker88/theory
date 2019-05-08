<?php

namespace App\patterns\facade\Api;


class FFMpeg
{
    public static function create(): FFMpeg
    {
        return new static;
    }

    public function open(string $video): void
    {
        echo 'I open file in ' . $video;
    }
}