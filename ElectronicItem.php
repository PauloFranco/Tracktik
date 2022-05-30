<?php
require __DIR__ . '/WiredElectronicItem.php';
require __DIR__ . '/AllowsExtras.php';

Interface ElectronicItem{

    public function __construct();

    public function maxExtras() :int|string;

    public function getPrice() :float;

    public function getType() :string;

    public function setPrice($price);

    public function setType($type);

 }