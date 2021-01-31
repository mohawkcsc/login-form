<?php
session_start();
/**
 * Log in method used to verify user is valid
 */
include "connect.php";
//sanitizing variables
$email = $_POST['email'];
$password =  $_POST["password"];
$success= False;
// if (filter_var($email, FILTER_VALIDATE_EMAIL)){ //confirming email is valid
    $command = "SELECT email, password, name FROM user WHERE email = ?";
    $stmt = $dbh->prepare($command);
    $params = [$email]; 
    $success = $stmt->execute($params);
    $count = $stmt->rowCount();
    $row = $stmt->fetch();

    if ($count === 1) { //Could even remove this?

        if(password_verify($password,$row["password"])){ //password passed is compared with the hased password stored
            $_SESSION["password"] = $row["password"];
            $_SESSION["username"] = $row["username"];
            $success=True;
        }
}
// }

$response = [ 
'success' => $success,
'return'=> $row,
];
echo json_encode($response);
?>

