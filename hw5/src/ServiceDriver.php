<?php

class ServiceDriver implements ServiceInterface
{
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function apply(TariffInterface $tariff, &$price)
    {

        $price += $this->price;

    }
}