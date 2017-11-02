<?php
session_start();
require_once 'config.php';

if (isset($_POST['delete'])) {
    
    $id = $_POST['post_id'];

    $social_query = "delete from post where post_id = $id";

    mysqli_query($mysql, $social_query)
            or die(mysqli_error($mysql));
    
    
    header("Location: post-list.php");
}
