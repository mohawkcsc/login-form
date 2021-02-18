<?php
session_start();
/**
 * Log in method used to verify user is valid
 */

include "connect.php";

//sanitizing variables
$email = $_POST['email'];
$password =  $_POST["password"];
$success= FALSE;
// if (filter_var($email, FILTER_VALIDATE_EMAIL)){ //confirming email is valid
    $command = "SELECT email, password, name, phone FROM user WHERE email = ?";
    $stmt = $dbh->prepare($command);
    $params = [$email]; 
    $count = $stmt->rowCount();
    $row = $stmt->fetch();

if ($count === 1) {

    if($password == $row["password"]){ //password passed is compared with the hased password stored
        // $_SESSION["password"] = $row["password"];
        $_SESSION["name"] = $row["name"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["phone"] = $row["phone"];
        $success=TRUE;
    }

}

$response = [ 
'success' => $success,
'return' => $row
];
echo json_encode($response);
?>

