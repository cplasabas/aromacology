<?php
session_start();
require_once 'config.php';

$user_id = $_SESSION['id'];
$product_id = $_POST['product-id'];

$quantity = 0;

$sql_product = "select * from cart where product_id = $product_id and user_id = $user_id";

$result_cart = $mysql->query($sql_product);

if ($result_cart->num_rows > 0) {
    
  
    while ($row = $result_cart->fetch_assoc()) {
        $db_quantity = $row['quantity'];
    }
    $quantity = $db_quantity + 1;
    $query = "UPDATE cart SET quantity=$quantity WHERE product_id=$product_id and user_id = $user_id;";

    mysqli_query($mysql, $query)
            or die(mysqli_error($mysql));

} else {
      echo "YES!";
    $quantity++;
    $query = "insert into cart(user_id, product_id,quantity) values($user_id,$product_id,$quantity);";

    mysqli_query($mysql, $query)
            or die(mysqli_error($mysql));
}

