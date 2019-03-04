<?php

namespace App\patterns\factory\Connectors;

/**
 * Этот Конкретный Продукт реализует API Facebook.
 */

class FacebookConnector implements SocialNetworkConnector
{

    private $login;
    private $password;


    public function __construct(string $login, int $password)
    {

        $this->login = $login;
        $this->password = $password;
    }

    public function login(): void
    {
        echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password <br>";
    }

    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post in Facebook timeline.<br>";
    }

    public function logout(): void
    {
        echo "Send HTTP API request to log out user $this->login <br>";
    }
}