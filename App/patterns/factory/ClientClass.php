<?php

namespace App\patterns\factory;


use App\patterns\factory\Posters\SocialNetworkPoster;

class ClientClass
{
    private $client;

    public function __construct(SocialNetworkPoster $client)
    {
        $this->client = $client;
    }

    public function post(string $content): void
    {
        $this->client->post($content);
    }
}