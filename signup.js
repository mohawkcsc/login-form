$(document).ready(function () {
  const postProfile = {
    url: "/api/profile",
    method: "POST",
    data: {},
    contentType: "application/json; charset=utf-8",
    dataType: "json",
    success: function (response) {
      console.log("success");
    },
    error: function (response) {
      console.error(response);
      alert(`Error sending from api ${response.responseText}`);
    },
  };

  function hardCodeForm(response) {
    $("input[name=id]").first().val(response[0]["id"]);
    $("#email").val(response[0]["email"]);

    $.each(sp, function (key, val) {
      $(`#shipping_address *[name=${key}]`).val(val);
    });
  }

  /**
   * On click of the sign up button, the sign up form values are checked to
   * see if valid. Values are then sent to the db via ajax. A new user is then added
   * and mycollection.php is loaded.
   */
  $("#signUpBtn").click(function () {
    let email = $("#signUpEmail").val().toLowerCase();
    let password = $("#signUpPassword").val();
    let username = $("#signUpUsername").val();
    if (passwordStrength.test(password)) {
      //checking if password is strong enough

      $("#errorPassword").empty();
    } else {
      $("#errorPassword").text(
        "Password minimum: 8 characters, 1 capital, 1 number"
      );
    }
    if (validEmail.test(email)) {
      //checking if email format is correct

      $("#errorEmail").empty();
    } else {
      $("#errorEmail").text("Invalid Email");
    }

    if (passwordStrength.test(password) && validEmail.test(email)) {
      //if both requirements are met, the ajax request is launched
      $.ajax({
        url: "signup.php",
        method: "POST",
        data: {
          email: email,
          password: password,
          username: username,
        },
        success: function (response) {
          RegisterLogInCheck(response);
        },
        dataType: "text",
      });
    }
  });
});
