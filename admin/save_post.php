<?php

session_start();
require_once 'config.php';

if (isset($_POST['add'])) {
    $post_id = $_POST['post_id'];
    $post_image = $_FILES['post_image']['name'];
    $post_title = $_POST['post_title'];
    $post_subtitle = $_POST['post_subtitle'];
    $post_body = $_POST['post_body'];


    $_post_title = mysqli_real_escape_string($mysql, $post_title);
    $_post_subtitle = mysqli_real_escape_string($mysql, $post_subtitle);
    $_post_body = mysqli_real_escape_string($mysql, $post_body);

    $add_query = "update post set post_title = '$_post_title',post_subtitle = '$_post_subtitle', post_body = '$_post_body',post_image = '$post_image' where post_id = $post_id";

    mysqli_query($mysql, $add_query)
            or die(mysqli_error($mysql));


    $target_dir = "../images/uploads/";
    $target_file = $target_dir . basename($_FILES["post_image"]["name"]);

    move_uploaded_file($_FILES["post_image"]["tmp_name"], $target_file);

    header("Location: post_page.php?id=" . $post_id);
}