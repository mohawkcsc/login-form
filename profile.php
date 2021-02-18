<?php
session_start();
// print_r($_SESSION);
if (!isset($_SESSION["name"])) {
  header("location: NotFound.php");
  exit;
}
?>


<!DOCTYPE html>
<html lang = en-us>
    <head>
        <meta charset = "UTF-8">
        <title>Profile Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css" integrity="sha384-8iuq0iaMHpnH2vSyvZMSIqQuUnQA7QM+f6srIdlgBrTSEyd//AWNMyEaSF2yPzNQ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./styles.css">
    </head>

    <body>
        <div class = "container mb-5 mx-auto">
            <!-- NAVBAR -->
            <div class = "row">
                <div class = "col-sm-4 mx-auto"><a class = "navbar-brand" href = "./index.php">Super Secure Corp.</a></div>
                <!-- <div class = "col-sm-4 mx-auto"><a class = "navbar-brand" href = "#">Placeholder</a></div> -->
                <div class = "col-sm-4"><a class = "navbar-brand" href = "#">Logout</a></div>
            </div>

            <!-- PAGE CONTENT -->
            <!-- How do I center the images, text, align the rows, etc? -->
            <div class = "row mx-auto">
                <div class = "col-sm-12 mx-auto"><a href = "#"><img src = "profilepic.jpg" class = "img-rounded-circle mx-auto" alt = "Your profile picture" width = "250" height = "250"></a></div>
            </div>
            <div class = "row">
                <div class = "col-sm-4">Name: </div>
                <div class = "col-sm-6"><?php echo $_SESSION["name"]?></div>
                <!-- <div class = "col-sm-2"><a href = "/."><img src = "./edit.png" title = "Edit" alt = "pencil edit icon" height = "25" width = "25"></a></div> -->
            </div>
            <div class = "row">
                <div class = "col-sm-4">Phone: </div>
                <div class = "col-sm-6"><?php echo $_SESSION["phone"]?></div>
                <!-- <div class = "col-sm-2"><a href = "#"><img src = "./edit.png" title = "Edit" alt = "pencil edit icon" height = "25" width = "25"></a></div> -->
            </div>
            <div class = "row">
                <div class = "col-sm-4">Email: </div>
                <div class = "col-sm-6"><?php echo $_SESSION["email"]?></div>
                <!-- <div class = "col-sm-2"><a href = "#"><img src = "./edit.png" title = "Edit" alt = "pencil edit icon" height = "25" width = "25"></a></div> -->
            </div>
            <!-- <div class = "row .well-lg">
                <div class = "col-sm-10"></div>
                <div class = "col-sm-2">Change Password  <a href = "#"><img src = "./edit.png" title = "Edit" alt = "pencil edit icon" height = "25" width = "25"></a></div>
            </div> -->
        </div>
    </body>
</html>