<?php

class Microwave implements ElectronicItem{

    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $type;

    public function __construct(){
        $this->type = 'microwave';
    }

    public function getPrice() :float{
        return $this->price;
    }

    public function getType() :string{
        return $this->type;
    }


    public function setPrice($price){
        $this->price = $price;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function maxExtras() :string{
        return 'Controller cannot have any extras.';  
    }

}