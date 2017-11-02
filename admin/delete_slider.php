<?php
session_start();
require_once 'config.php';

if (isset($_POST['delete'])) {
    
    $id = $_POST['slider_id'];

    $social_query = "delete from main_slider where slider_id = $id";

    mysqli_query($mysql, $social_query)
            or die(mysqli_error($mysql));
    
    
    header("Location: home-page.php");
}
