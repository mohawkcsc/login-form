
<?php
session_start();
//if username is defined, it sends user to myCollection.php
if (isset($_SESSION["name"])) {
    header("Location:profile.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Login in!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css" integrity="sha384-8iuq0iaMHpnH2vSyvZMSIqQuUnQA7QM+f6srIdlgBrTSEyd//AWNMyEaSF2yPzNQ" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="container mb-5">
        <!-- NAVBAR -->
        <div class="row">
            <div class="col-8-sm mx-auto">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">Super Secure Corp.</a>
                    <ul class="nav justify-content-end">
                        <li class="nav-item active">
                            <a class="nav-link navbar-brand" href="index.php">Log In
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-brand" href="register.php">Register
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Page Content -->
        <div class="card text-white bg-primary mb-3 mx-auto" style="max-width: 28em;">
            <div class="card-body">
            <p class="card-text">  <h1 class="my-5 text-center">Welcome to Super Secure Corp.</h1>
                <h3 class="text-center mb-5">Please log in</h3>
                <h4 class="text-center mb-5">New to our site? <a href="register.html" class="text-danger">Click Here</a> to register.</h4>
                <form method="post" id="loginForm">
                    <div class="mb-3">
                        <p id="incPass" class="error"></p>
                    <label for="loginEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp" placeholder="example@email.com">
                    <p id="errorEmail" class="error"></p>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                    <label for="loginPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="loginPassword">
                    <p id="errorPassword" class="error"></p>
                    </div>
                    <button type="button" class="btn btn-primary" id="loginBtn">Log In!</button>
                </form></p>
            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="login.js"></script>
    b4
</body>
</html>

<!-- https://www.bootstrapcdn.com/ -->
<!-- https://bootswatch.com/ -->