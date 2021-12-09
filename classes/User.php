<?php
require_once __DIR__ . "./Cart.php";
class User
{
    protected $firstName = "";
    protected $lastName = "";
    protected $email = "";
    protected $address = "";
    protected $accountType = "";
    protected $paymentMethod = "";
    public $cart;

    function __construct($_firstName, $_lastName, $_email, $_address, $_accountType, $_paymentMethod)
    {
        $this->setFirstName($_firstName);
        $this->setLastName($_lastName);
        $this->setEmail($_email);
        $this->setAddress($_address);
        $this->setAccountType($_accountType);
        $this->setPaymentMethod($_paymentMethod);
        // Istanza di Cart
        $this->cart = new Cart();
    }

    // Setter Methods
    public function setFirstName($value)
    {
        $this->firstName = $value;
    }

    public function setLastName($value)
    {
        $this->lastName = $value;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function setAddress($value)
    {
        $this->address = $value;
    }

    public function setAccountType($value)
    {
        $this->accountType = $value;
    }

    public function setPaymentMethod($value)
    {
        $this->paymentMethod = $value;
    }

    // Getter methods
    public function getFirtName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getAccountType()
    {
        return $this->accountType;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
}
