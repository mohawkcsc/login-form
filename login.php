<?php
session_start();
/**
 * Log in method used to verify user is valid
 */
include "connect.php";
//sanitizing variables
$email = $_POST("email");
$password = $_POST("password");
$error = "Invalid Password and Email Combination!";
if (filter_var($email, FILTER_VALIDATE_EMAIL)){ //confirming email is valid
    $command = "SELECT email, password,username FROM users WHERE email = ?";
    $stmt = $dbh->prepare($command);
    $params = [$email]; 
    $success = $stmt->execute($params);
    $count = $stmt->rowCount();
    $row = $stmt->fetch();
    if ($count === 1) {

        // if(password_verify($password,$row["password"])){ //password passed is compared with the hased password stored
            $_SESSION["password"] = $row["password"];
            $_SESSION["username"] = $row["username"];
            echo true;
    }else {
        echo $error;
    }

}else {
    echo $error;
}

