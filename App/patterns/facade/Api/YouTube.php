<?php

namespace App\patterns\facade\Api;


class YouTube
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function fetchVideo(): string
    {
        return 'I fetch this video';
    }

    public function saveAs(string $path): void
    {
        echo 'I save this video in ' . $path;
    }
}