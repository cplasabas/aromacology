<?php

session_start();
require_once 'config.php';

if (isset($_POST['submit'])) {


    $id = $_SESSION['id'];


    $add_query = "insert into orders(user_id) values($id)";

    mysqli_query($mysql, $add_query)
            or die(mysqli_error($mysql));

    $order_id = $mysql->insert_id;


    $sql_cart = "select product_id, quantity from cart where user_id = $id";

    $result_cart = $mysql->query($sql_cart);

    if ($result_cart->num_rows > 0) {
        while ($row = $result_cart->fetch_assoc()) {
            $product_id = $row['product_id'];
            $quantity = $row['quantity'];

            $add_order_product = "insert into order_product(order_id,product_id,quantity) values($order_id,$product_id,$quantity)";

            mysqli_query($mysql, $add_order_product)
                    or die(mysqli_error($mysql));
        }
    }
    
   
    $clear_cart= "delete from cart where user_id = $id";

    mysqli_query($mysql, $clear_cart);

    header("Location: order_confirmation.php?order-id=$order_id"   );
}