<?php

namespace App\Services;

use Wompi\Api\Wompi;

class WompiService
{
    protected $wompi;

    public function __construct()
    {
        $this->wompi = new Wompi(
            env('WOMPI_PUBLIC_KEY'),
            env('WOMPI_SECRET_KEY')
        );
    }

    public function createTransaction(array $data)
    {
        return $this->wompi->createTransaction($data);
    }

    public function getTransaction($transactionId)
    {
        return $this->wompi->getTransaction($transactionId);
    }
}
