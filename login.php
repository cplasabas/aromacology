<?php

session_start();
require_once 'config.php';

$login = filter_input(INPUT_POST, 'submit');



if (isset($login)) {
   
    $user = filter_input(INPUT_POST, 'email');
    $pass = filter_input(INPUT_POST, 'pass');


    $q = "select * from users where username='$user' and type=1";

    //search for the username
    if ($result = $mysql->query($q)) {
        echo "shit!";
        $error = 0;
        //Check if username exists
        if ($result->num_rows === 0) {
            $error = 1;
            header("Location: customer-login.php?error=$error");
        } else {
            //get id and password from database
            while ($row = $result->fetch_assoc()) {
                $db_id = $row['user_id'];
                $db_pass = $row['password'];
            }
            if ($pass == $db_pass) {
                $_SESSION['id'] = $db_id;
                header('Location: index.php');
            } else {
                $error = 2;
                header("Location: customer-login.php?error=$error");
            }
        }
    }
}

$mysql->close();
