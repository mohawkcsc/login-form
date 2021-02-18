$(document).ready(function () {
  let validEmail = new RegExp(
    /(.*[a-zA-Z0-9!#$%&'*+/=?^_`{|}~;.])+[@](.*[a-zA-Z0-9])+[.]+(.*[a-zA-Z0-9])/i
  ); //regex string used to validate email. does not check length
  let passwordStrength = new RegExp(/(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}/); //regex string used to check password strength 1 lower, 1 capital, 1 number and > 8

  // $("#loginTab").click(function () {
  //   $("#errorMessage").empty();
  //   $("#errorEmail").empty();
  //   $("#errorPassword").empty();
  //   $("input").val("");
  //   $("#signupForm").addClass("hidden");
  //   $("#loginForm").removeClass("hidden");
  //   $("#formHeader").text("Log In");
  // });

  /**
   * When clicked, the log in form values are sent through a ajax request
   * and are checked if a valid user.RegisterLogInCheck handles the response
   */
  $("#loginBtn").click(function () {
    let email = $("#loginEmail").val();
    let password = $("#loginPassword").val();

    $.ajax({
      url: "login.php",
      method: "POST",
      data: {
        email: email,
        password: password,
      },

      success: function (response) {
        console.log(response);
        let json = JSON.parse(response);
        let success = json.success;
        if (success === true) {
          console.log("win!");
          // window.location.href = "profile.php";
        } else {
          $("#incPass").text("Incorrect email and password combo");
        }
      },
    });
  });
});
