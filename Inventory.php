<?php

require_once dirname(__FILE__) . '/Instrument.php';
require_once dirname(__FILE__) . '/InstrumentSpec.php';

class Inventory
{
    private $instrumentList;

    public function __construct()
    {
        $this->instrumentList = [];
    }


    public function addInstrument($serialNumber, $price, InstrumentSpec $spec)
    {

        $instrument = new Instrument($serialNumber, $price, $spec);
        array_push($this->instrumentList, $instrument);
    }

    public function getInstrument($serialNumber)
    {

        foreach($this->instrumentList as $instrument)
        {
                if ($instrument->getSerialNumber() === $serialNumber) {
                    return $instrument;
                }
        }
        return null;
    }

    public function search(InstrumentSpec $searchSpec)
    {
        $matchingInstruments = [];
        foreach($this->instrumentList as $object)
        {
            //var_dump($object);
            $objectSpec = $object->getSpec();
            //var_dump($objectSpec);
            if($objectSpec->matches($searchSpec))
            {
                $matchingInstruments[] = $object;
                //var_dump($matchingGuitars);
            }
        }

        if($matchingInstruments) {
            return $matchingInstruments;
        }else{
            return null;
        }
    }

}