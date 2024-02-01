<?php

require_once __DIR__ . '/Animals.php';

class Item
{
    public $manufacturingCompany;
    public $itemName;
    public $prezzo;
    public $img;
    public $animals;


    public function __construct($_manufacturingCompany, $_itemName, $_prezzo, $_img, Animals, $animals)
    {
        $this->manufacturingCompany = $_manufacturingCompany;
        $this->itemName = $_itemName;
        $this->prezzo = $_prezzo;
        $this->img = $_img;
        $this->animals = $_animals;
    }
}