<?php

require __DIR__ . '/ElectronicItem.php';

class ElectronicItems
 {

    private $items = array();

    public function __construct(array $items){

        $this->items = $items;
    }

    /**
     * Returns the items depending on the sorting type requested
     *
     * @return array
     */
    public function getSortedItems() :array{

        $sorted = array();
        foreach ($this->items as $item){
           
            $sorted[($item->price * 100)] = $item;
        }

        ksort($sorted, SORT_NUMERIC);

        return $sorted;
    }

 }