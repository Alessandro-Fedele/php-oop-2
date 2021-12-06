<?php
require_once __DIR__ . "/Product.php";

class Tech extends Product
{
    protected $model;
    protected $type;

    function __construct($_name, $_brand, $_price, $_model, $_type)
    {
        parent::__construct($_name, $_brand, $_price);
        $this->model = $_model;
        $this->type = $_type;
    }

    // Getter methods
    public function getBrand()
    {
        return $this->brand;
    }
    public function getType()
    {
        return $this->type;
    }
}

// $tech = new Tech("XMonitor", "Asus", "$ 320.00", "XSJ65R3", "Monitor");
// var_dump($tech);
