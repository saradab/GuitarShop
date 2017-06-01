<?php

class Instrument
{
    private $serialNumber, $price;
    protected $instrumentSpec = null;

    public function __construct($serialNumber, $price, InstrumentSpec $spec)
    {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->spec = $spec;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($newPrice)
    {
        $this->price = $newPrice;
    }

    public function getSpec()
    {
        return $this->spec;
    }

}