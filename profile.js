$(document).ready(function () {
  $("#logoutBtn").click(function () {
    $.ajax({
      url: "logout.php",
      method: "POST",
    });
  });
});
