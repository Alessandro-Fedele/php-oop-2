<?php
require_once __DIR__ . "/User.php";

class User_Prime extends User
{
    protected $primeNumber;
    protected $shippingCosts = 0;

    function __construct($_firstName, $_lastName, $_email, $_address, $_accountType, $_paymentMethod, $_primeNumber)
    {
        parent::__construct($_firstName, $_lastName, $_email, $_address, $_accountType, $_paymentMethod);
        $this->setPrimeNumber($_primeNumber);
    }

    public function setPrimeNumber($value)
    {
        $this->primeNumber = $value;
    }
}
