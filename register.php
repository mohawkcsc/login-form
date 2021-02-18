
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register!</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css"
      integrity="sha384-8iuq0iaMHpnH2vSyvZMSIqQuUnQA7QM+f6srIdlgBrTSEyd//AWNMyEaSF2yPzNQ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container mb-5">
      <!-- NAVBAR -->
      <div class="row">
        <div class="col-8-sm mx-auto">
          <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">Super Secure Corp.</a>
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link navbar-brand" href="index.php">Log In </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link navbar-brand" href="register.php"
                  >Register
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- Page Content -->
      <div
        class="card text-white bg-primary mb-3 mx-auto"
        style="max-width: 28em"
      >
        <div class="card-body">
          <p class="card-text"></p>
          <h4 class="my-5 text-center">
            Please complete all fields below to create a new account!
          </h4>
          <form method="post" id="signupForm">
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input
                type="text"
                class="form-control"
                id="name"
                placeholder="John Smith"
              />
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <input
                type="tel"
                class="form-control"
                id="phone"
                placeholder="905-555-1234"
              />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input
                type="email"
                class="form-control"
                id="email"
                aria-describedby="emailHelp"
                placeholder="johnsmith@gmail.com"
              />
              <div id="emailHelp" class="form-text">
                We'll never share your email with anyone else.
              </div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" />
            </div>
            <!-- <div class="mb-3">
              <label for="registerPasswordConfirm" class="form-label"
                >Confirm Password</label
              >
              <input
                type="password"
                class="form-control"
                id="registerPasswordConfirm"
              />
            </div> -->
            <button type="button" id="signupBtn" class="btn btn-primary">
              Create Account!
            </button>
          </form>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./signup.js"></script>
  </body>
</html>

<!-- https://www.bootstrapcdn.com/ -->
<!-- https://bootswatch.com/ -->
