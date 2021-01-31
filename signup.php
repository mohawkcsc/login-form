<?php
session_start();
/**
 * used to sign up users and add them to the database
 */
include "connect.php";
$email = $_POST["email"];
$password = $_POST["password"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$registered = False;

// if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
    $command = "INSERT INTO user(name, email, phone, password) VALUES(?, ? , ?, ?)";
    //  $command = "INSERT INTO user (name, email, phone, password) VALUES ('Willard Trump', 'gg@gmail.com', '9059751255', 'fraud1234')";
    $stmt = $dbh->prepare($command);
    $params = [$name, $email, $phone, $password]; //password sent as a param within hashing method
    $success = $stmt->execute($params);
    // $success = $stmt->execute();
    
    if ($success) {
        $registered = True;
        // $_SESSION["name"] = $username; //The database was set to have username and email all be unique. If this is the case then the username session variable is set. 
    }

// }

echo json_encode(
    [
    'success' => $registered
    ]
);
?>
