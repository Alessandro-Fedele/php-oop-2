<?php
require_once __DIR__ . "/classes/Product_Tech.php";
require_once __DIR__ . "/classes/Product_Food.php";
require_once __DIR__ . "/classes/Product_Home.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/User_Prime.php";
require_once "./data/ProductsList.php";
require_once "./data/UsersList.php";

$users = [];
$products = [];

// foreach ($usersList as $user) {
//     $users[] = new User($user);
// }

foreach ($usersList as $user) {
    // pusho un istanza di User/User_Prime nel nuovo array
    if ($user["accountType"] === "Prime") {
        $users[] = new User_Prime($user);
    } else {
        $users[] = new User($user);
    }
}

foreach ($productsList as $product) {
    if ($product["category"] === "Tech") {
        $products[] = new Product_Tech($product);
    }
    if ($product["category"] === "Home") {
        $products[] = new Product_Home($product);
    }
    if ($product["category"] === "Food") {
        $products[] = new Product_Food($product);
    }
}

var_dump($users);
var_dump($products);
