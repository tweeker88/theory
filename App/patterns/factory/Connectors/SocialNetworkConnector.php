<?php

namespace App\patterns\factory\Connectors;

/**
 * Интерфейс Продукта объявляет поведения различных типов продуктов.
 */

interface SocialNetworkConnector
{
    public function login(): void;

    public function createPost($content): void;

    public function logout(): void;
}