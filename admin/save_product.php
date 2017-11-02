<?php

session_start();
require_once 'config.php';
if (isset($_POST['save'])) {

    $id = $_POST['product_id'];
    
    $image_name = $_POST['image_name'];
    $product_image = $_FILES['product_image']['name'];
    $category_id = $_POST['category_id'];
    $product_name = $_POST['product_name'];
    $product_description = $_POST['description'];
    $product_price = $_POST['price'];

    $facebook = $_POST['fb'];
    $twitter = $_POST['tw'];
    $instagram = $_POST['insta'];

    $featured = 0;

    if (isset($_POST['featured'])) {
        $featured = 1;
    }

    $add_query = "update product set product_image = '$image_name', category_id = $category_id, product_name = '$product_name', product_description = '$product_description', product_price = '$product_price', is_featured = $featured where product_id = $id";

    mysqli_query($mysql, $add_query)
            or die(mysqli_error($mysql));


    $social_query = "update product_social set facebook = '$facebook', twitter = '$twitter', instagram = '$instagram' where product_id = $id";

    mysqli_query($mysql, $social_query)
            or die(mysqli_error($mysql));

    $target_dir = "../images/uploads/";
    $target_file = $target_dir . basename($_FILES["product_image"]["name"]);

    move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);



    echo "Product Saved!";
    header("Location: product_page.php?id=" . $id);
    
}