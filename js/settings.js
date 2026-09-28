$(document).ready(function () {
  $("#changePasswordBtn").on("click", function () {
    alert("Password change option will be available soon.");
  });

  $(".form-check-input").on("change", function () {
    let setting = $(this).attr("id");
    let status = $(this).is(":checked");

    if (status) {
      console.log(setting + " enabled");
    } else {
      console.log(setting + " disabled");
    }
  });

  $("#language").on("change", function () {
    let language = $(this).val();

    console.log("Language changed to: " + language);
  });

  $("#dateFormat").on("change", function () {
    let dateFormat = $(this).val();

    console.log("Date format changed to: " + dateFormat);
  });
});
