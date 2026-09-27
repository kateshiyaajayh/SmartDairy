$(document).ready(function () {
  $(".password-toggle").on("click", function () {
    let passwordInput = $(this).siblings("input");

    if (passwordInput.attr("type") === "password") {
      passwordInput.attr("type", "text");

      $(this).removeClass("bi-eye").addClass("bi-eye-slash");
    } else {
      passwordInput.attr("type", "password");

      $(this).removeClass("bi-eye-slash").addClass("bi-eye");
    }
  });
});
