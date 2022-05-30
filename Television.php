<?php

class Television implements ElectronicItem, AllowsExtras{

    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $type;

    /**
     * @var integer
     */
    public $max_extras;

      /**
     * @var array
     */
    public $extras = array();

    public function __construct(){
        $this->type = 'television';
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
        return 'Television does not have a limit on extras.';
    }

    public function setExtras(ElectronicItem $item){
        array_push($this->extras, $item);
    }

    public function getExtras() :array{
        return $this->extras;
    }

    public function totalPrice() :float{
        $total = 0.0;

        $total += $this->getPrice();

        if(count($this->extras)){
            foreach($this->getExtras() as $extra){
                $total += $extra->price;
            }
        }
        
        return $total;
    }
}