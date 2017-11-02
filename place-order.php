<?php

session_start();
require_once 'config.php';


$user_id = $_SESSION['id'];
$product_id = "";
$quantity = "";



$query = "insert into orders(user_id) values($user_id)";

mysqli_query($mysql, $query)
        or die(mysqli_error($mysql));

$order_id = mysqli_insert_id($mysql);

$sql_product = "select * from cart where user_id = $user_id";

$result_cart = $mysql->query($sql_product);

if ($result_cart->num_rows > 0) {
    while ($row = $result_cart->fetch_assoc()) {
        $product_id = $row["product_id"];
        $quantity = $row["quantity"];

        $query = "insert into order_product(order_id,product_id, quantity) values($order_id,$product_id,$quantity)";

        mysqli_query($mysql, $query)
                or die(mysqli_error($mysql));

    }
} 