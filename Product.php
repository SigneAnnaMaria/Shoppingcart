<?php

include 'index.php';

class Product
{

    // TODO Skriv en konstruktor som sätter alla properties
    private $id;
    private $title;
    private $price;
    private $inStock;

    public function __construct($id, $title, $price, $inStock)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->inStock = $inStock;
    }

    // TODO Skriv getters för alla properties 
    // (1 getter/property)
    public function getID()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getInStock()
    {
        return $this->inStock;
    }
}
