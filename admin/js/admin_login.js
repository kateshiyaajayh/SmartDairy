$(document).ready(function () {
  $("#passwordToggle").on("click", function () {
    let password = $("#password");
    let icon = $(this).find("i");

    if (password.attr("type") === "password") {
      password.attr("type", "text");

      icon.removeClass("bi-eye").addClass("bi-eye-slash");
    } else {
      password.attr("type", "password");

      icon.removeClass("bi-eye-slash").addClass("bi-eye");
    }
  });
});
