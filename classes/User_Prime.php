<?php
require_once __DIR__ . "/User.php";

class Prime extends User
{
    protected $primeNumber;
    protected $discount = "20%";

    function __construct($_userName, $_email, $_password, $_payMethod, $_primeNumber, $_discount)
    {
        parent::__construct($_userName, $_email, $_password, $_payMethod);
        $this->primeNumber = $_primeNumber;
        $this->discount = $_discount;
    }
}
