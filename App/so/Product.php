<?php


namespace App\so;

use App\so\Interfaces\LoggerInterface;

class Product
{
    private $logger;

    public $price;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function setPrice(int $price) :void
    {
        try {
            $this->price = $price;

            echo 'Цена продукта: ' . $price;

        } catch (\Exception $e) {
            $this->logger->setLog($e->getMessage());
        }
    }
}