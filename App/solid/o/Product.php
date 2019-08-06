<?php


namespace App\solid\o;

use App\solid\o\Interfaces\LoggerInterface;

class Product
{
    private $logger;

    public $price;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function setPrice(string $price) :void
    {
        try {
            $this->price = $price;

            echo 'Цена продукта: ' . $price;

        } catch (\Exception $e) {
            $this->logger->log($e->getMessage());
        }
    }
}