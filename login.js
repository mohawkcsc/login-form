$(document).ready(function () {
  let validEmail = new RegExp(
    /(.*[a-zA-Z0-9!#$%&'*+/=?^_`{|}~;.])+[@](.*[a-zA-Z0-9])+[.]+(.*[a-zA-Z0-9])/i
  ); //regex string used to validate email. does not check length
  let passwordStrength = new RegExp(/(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}/); //regex string used to check password strength 1 lower, 1 capital, 1 number and > 8

  /**
   * When on sign up tab, this will change the form to log in.
   * error messages are removed
   */
  $("#loginTab").click(function () {
    $("#errorMessage").empty();
    $("#errorEmail").empty();
    $("#errorPassword").empty();
    $("input").val("");
    $("#signupForm").addClass("hidden");
    $("#loginForm").removeClass("hidden");
    $("#formHeader").text("Log In");
  });

  /**
   * When clicked, the log in form values are sent through a ajax request
   * and are checked if a valid user.RegisterLogInCheck handles the response
   */
  $("#loginBtn").click(function () {
    let email = $("#logInEmail").val();
    let password = $("#logInPassword").val();

    $.ajax({
      url: "login.php",
      method: "POST",
      data: {
        email: email,
        password: password,
      },
      success: function (response) {
        console.log(response);
      },
      dataType: "text",
    });
  });
});
