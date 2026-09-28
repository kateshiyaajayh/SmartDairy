$(document).ready(function () {
  $(".book-appointment-btn").on("click", function () {
    let href = $(this).attr("href");

    if (!href) {
      return false;
    }
  });
});
