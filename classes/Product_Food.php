<?php
require_once __DIR__ . "/Product.php";

class Food extends Product
{
    protected $expiry_date;
    protected $weight;

    function __construct($_name, $_brand, $_price, $_expiry_date, $_weight)
    {
        parent::__construct($_name, $_brand, $_price);
        $this->expiry_date = $_expiry_date;
        $this->weight = $_weight;
    }

    // Getter methods
    public function getExpiryDate()
    {
        return $this->expiry_date;
    }
    public function getWeight()
    {
        return $this->weight;
    }
}

// $food = new FOOD("Spaghetti", "Barilla", "$ 2.50", "2030", "500g");
// var_dump($food);
