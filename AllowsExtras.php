<?php

Interface AllowsExtras{

    public function setExtras(ElectronicItem $item);

    public function getExtras();

    public function totalPrice();
}