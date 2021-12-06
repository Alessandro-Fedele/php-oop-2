<?php
class User
{
    protected $userName;
    protected $email;
    protected $password;
    protected $paymentMethod;
    protected $cart = [];

    function __construct($_userName, $_email, $_password, $_paymentMethod)
    {
        $this->userName = $_userName;
        $this->email = $_email;
        $this->password = $_password;
        $this->paymentMethod = $_paymentMethod;
    }

    // Getter methods
    public function getUserName()
    {
        return $this->userName;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
    public function getCart()
    {
        return $this->cart;
    }
    public function addProduct($product)
    {
        array_push($this->cart, $product);
    }
}

// $user = new User("Alex", "alex19@libero.it", "2ondnm5", "PayPal");
// var_dump($user);
