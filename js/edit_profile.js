$(document).ready(function () {
  $("#editProfileForm").on("submit", function (e) {
    let isValid = true;

    $(this)
      .find("input, textarea, select")
      .each(function () {
        $(this).trigger("input");

        let errorSpan = $("#" + $(this).attr("name") + "Error");

        if (errorSpan.text().trim() !== "") {
          isValid = false;
        }
      });

    if (!isValid) {
      e.preventDefault();
    }
  });
});
