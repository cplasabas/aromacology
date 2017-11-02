<?php

session_start();
require_once 'config.php';

if (isset($_POST['feature'])) {

    $id = $_POST['product_id'];



    $add_query = "update product set  is_featured = 1 where product_id = $id";

    mysqli_query($mysql, $add_query)
            or die(mysqli_error($mysql));

    
    header("Location: products.php");
    
}