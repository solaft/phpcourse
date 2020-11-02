<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "products.php";
session_start();
$basket = [];
if(!empty($_SESSION['basket'])) {
    $productsIds = array_keys($_SESSION['basket']);
    $products = getProducts($productIds);

    foreach ($products as$ $product) {
        $basket[] = [
            'product' => $product,
            'qty' => $_SESSION['basket'][$product['id']]
        ];
    }
}
var_dump($productsIds);
include VIEWS_DIR . 'basket.php';