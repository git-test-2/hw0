<?php

interface TariffInterface
{
    public function countPrice() :int;
    public function addService(ServiceInterface $service) :self;
    public function getMinutes() :int;
    public function getDistnce() :int;
}