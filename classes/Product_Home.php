<?php
require_once __DIR__ . "/Product.php";

class Home extends Product
{
    protected $material;
    protected $category;

    function __construct($_name, $_brand, $_price, $_material, $_category)
    {
        parent::__construct($_name, $_brand, $_price);
        $this->material = $_material;
        $this->category = $_category;
    }

    // Getter methods
    public function getMaterial()
    {
        return $this->material;
    }
    public function getCategory()
    {
        return $this->category;
    }
}

// $home = new Home("Mia", "Casati", "$ 40.99", "Cercamica", "Lampada");
// var_dump($home);
