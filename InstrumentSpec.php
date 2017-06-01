<?php

class InstrumentSpec
{
    private $properties = [];

    public function __construct($properties)
    {
        if($properties == null) {
            $this->properties = [];
        }else{
            $this->properties = [$properties];
        }
    }

    public function getProperty($propertyName)
    {
        return $this->properties["$propertyName"];
    }

   public function getProperties()
   {
       return $this->properties;
   }

    public function matches(InstrumentSpec $otherSpec)
    {
        foreach($otherSpec as $otherKey => $otherValue)
        {
            foreach($this->properties as $key => $value){

            if($otherKey === $key){
                if($otherKey[$otherValue] != $key[$value]){
                    return false;
                }
            }
            }
        }
        return true;
    }
}