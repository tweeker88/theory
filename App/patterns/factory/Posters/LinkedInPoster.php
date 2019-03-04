<?php

namespace App\patterns\factory\Posters;

use App\patterns\factory\Connectors\LinkedInConnector;
use App\patterns\factory\Connectors\SocialNetworkConnector;

/**
 * Этот Конкретный Создатель поддерживает LinkedIn. Помните, что этот класс
 * также наследует метод post от родительского класса. Конкретные Создатели —
 * это классы, которые фактически использует Клиент.
 */
class LinkedInPoster extends SocialNetworkPoster
{
    private $login;
    private $password;

    public function __construct(string $login, int $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->login, $this->password);
    }
}