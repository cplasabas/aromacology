<?php

session_start();
require_once 'config.php';

$register = filter_input(INPUT_POST, 'submit');



if (isset($register)) {
    $user = $_POST['uname'];
    $pass = $_POST['pass'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $add_query = "insert into users(username,password,type) values('$user','$pass',1)";

    mysqli_query($mysql, $add_query)
            or die(mysqli_error($mysql));

    $user_id = $mysql->insert_id;

    $user_detail_query = "insert into user_detail(user_detail_id, first_name,last_name,address,email,phone) values($user_id,'$fname','$lname','$address','$email','$phone')";

    mysqli_query($mysql, $user_detail_query)
            or die(mysqli_error($mysql));
    
     header('Location: registration-notification.php');
}

$mysql->close();
