$(document).ready(function () {
  $(".apply-btn").on("click", function (e) {
    let href = $(this).attr("href");

    if (!href || href === "#") {
      e.preventDefault();

      alert("Application portal will be available soon.");
    }
  });
});
