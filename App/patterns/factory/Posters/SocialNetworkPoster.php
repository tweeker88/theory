<?php

namespace App\patterns\factory\Posters;


use App\patterns\factory\Connectors\SocialNetworkConnector;

abstract class SocialNetworkPoster
{
    /**
     * Фактический фабричный метод. Обратите внимание, что он возвращает
     * абстрактный коннектор. Это позволяет подклассам возвращать любые
     * конкретные коннекторы без нарушения контракта суперкласса.
     */

    abstract public function getSocialNetwork(): SocialNetworkConnector;

    public function post($content): void
    {
        // Вызываем фабричный метод для создания объекта Продукта...
        $network = $this->getSocialNetwork();
        // ...а затем используем его по своему усмотрению.
        $network->login();
        $network->createPost($content);
        $network->logout();

    }
}