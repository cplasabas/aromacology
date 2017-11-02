<?php
session_start();
require_once 'config.php';
$login = filter_input(INPUT_POST, 'submit');
if (isset($login)) {
    $user = filter_input(INPUT_POST, 'uname');
    $pass = filter_input(INPUT_POST, 'pword');
echo "test".$user;
   $q = "select * from users where username='$user' and type=0";
    //search for the username
    if ($result = $mysql->query($q)) {
        $error = 0;
        //Check if username exists
        if ($result->num_rows === 0) {
            $error = 1;
            header("Location: index.php?error=$error");
        } else {
            //get id and password from database
            while ($row = $result->fetch_assoc()) {
                $db_id = $row['user_id'];
                $db_pass = $row['password'];
            }
            if ($pass == $db_pass) {
                $_SESSION['id'] = $db_id;
                header('Location: home-page.php');
            } else {
                $error = 2;
                header("Location: index.php?error=$error");
            }
        }
    }
}

$mysql->close();
