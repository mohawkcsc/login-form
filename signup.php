<?php
session_start();
/**
 * used to sign up users and add them to the database
 */
include "connect.php";
$email = $_POST("email");
$password = $_POST("password");
$username = $_POST("username");
$pNumber = $_POST("pNumber");

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
    $command = "INSERT INTO users(email,password,username,phonenumber) VALUES({$email},{$password},{$username}, {$pNumber})";
    $stmt = $dbh->prepare($command);
    // $params = [$email, password_hash($password,PASSWORD_DEFAULT),$username]; //password sent as a param within hashing method
    // $success = $stmt->execute($params);
    $success = $stmt->execute();
    if ($success) {
        echo true;
        $_SESSION["username"] = $username; //The database was set to have username and email all be unique. If this is the case then the username session variable is set.
    }
    else{
        echo "Email and Username must be unique per user!";
    }

}
