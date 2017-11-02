<?php
session_start();
require_once 'config.php';

if (isset($_POST['delete'])) {
    
    $id = $_POST['product_id'];

    $social_query = "delete from product where product_id = $id";

    mysqli_query($mysql, $social_query)
            or die(mysqli_error($mysql));
    
    
    header("Location: products.php");
}
