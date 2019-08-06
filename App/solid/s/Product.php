<?php


namespace App\solid\s;

class Product
{
    private $logger;

    public $price;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function setPrice(string $price) :void
    {
        try {
            $this->price = $price;

            echo 'Цена продукта: ' . $price;

        } catch (\Exception $e) {
            $this->logger->log(' Код ошибки: 103');
        }
    }
}