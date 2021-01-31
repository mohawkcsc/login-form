$(document).ready(function () {
  $("#signupBtn").click(function () {
    let myData = {
      email: $("#email").val(),
      name: $("#name").val(),
      phone: $("#phone").val(),
      password: $("#password").val(),
    };

    $.ajax({
      url: "signup.php",
      method: "POST",
      data: myData,
      success: function (response) {
        // RegisterLogInCheck(response);
        console.log(JSON.parse(response));
      },
      dataType: "text",
    });

    // if (passwordStrength.test(password)) {
    //   //checking if password is strong enough

    //   $("#errorPassword").empty();
    // } else {
    //   $("#errorPassword").text(
    //     "Password minimum: 8 characters, 1 capital, 1 number"
    //   );
    // }
    // if (validEmail.test(email)) {
    //   //checking if email format is correct

    //   $("#errorEmail").empty();
    // } else {
    //   $("#errorEmail").text("Invalid Email");
    // }

    // if (passwordStrength.test(password) && validEmail.test(email)) {
    //if both requirements are met, the ajax request is launched
  });
});
