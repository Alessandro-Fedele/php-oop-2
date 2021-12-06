<?php
class Product
{
    public $name;
    protected $brand;
    protected $price;

    function __construct($_name, $_brand, $_price)
    {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
    }

    // Getter methods
    public function getName()
    {
        return $this->name;
    }
    public function getBrand()
    {
        return $this->brand;
    }
    public function getPrice()
    {
        return $this->price;
    }
}

// $product = new Product("XMonitor", "Asus", "$ 320.00");
// var_dump($product);
