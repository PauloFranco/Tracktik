<?php

class Controller implements ElectronicItem, WiredElectronicItem{

    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $type;

    /**
     * @var boolean
     */
    public $wired;

    public function __construct(){
        $this->type = 'controller';
    }

    public function getPrice() :float{
        return $this->price;
    }

    public function getType() :string{
        return $this->type;
    }

    public function getWired() :bool{
        return $this->wired;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function setWired($wired){
        $this->wired = $wired;
    }

    public function maxExtras() :string{
        return 'Controller cannot have any extras.';  
    }
}