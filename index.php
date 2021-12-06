<?php
require_once __DIR__ . "/classes/Product_Tech.php";
require_once __DIR__ . "/classes/Product_Food.php";
require_once __DIR__ . "/classes/Product_Home.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/User_Prime.php";

// $user = [
//     new User("Alex", "alex@libero.it", "****", "PayPal"),
//     new Tech("Basilisk", "Razer", "$ 65,00", "v3rz01", "Mouse"),
//     new Home("Bill", "Ikea", "$ 79,99", "Legno", "Armadio"),
// ];
// var_dump($user);

$Alessandro = new User("Alex", "alex@libero.it", "****", "PayPal");
echo "<h3> Username: " . $Alessandro->getUserName() . "</h3>";
echo "<h3> Email: " . $Alessandro->getEmail() . "</h3>";
echo "<h3> Password: " . $Alessandro->getPassword() . "</h3>";
echo "<h3> Metodo di pagamento: " . $Alessandro->getPaymentMethod() . "</h3>";

$product1 = new Tech("Basilisk", "Razer", "$ 65,00", "v3rz01", "Mouse");
$product2 = new Home("Bill", "Ikea", "$ 79,99", "Legno", "Armadio");
$Alessandro->addProduct($product1);
$Alessandro->addProduct($product2);

// var_dump($Alessandro);
$cart = $Alessandro->getCart();
// var_dump($cart);
// var_dump($cart[0]);
echo "Carrello: ";
foreach ($cart as $product) {
    var_dump($product);
}
