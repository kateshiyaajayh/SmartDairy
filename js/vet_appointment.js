$(document).ready(function () {
  $("#appointmentForm").on("submit", function (e) {
    let date = $("#appointmentDate").val();

    if (date) {
      let today = new Date();
      today.setHours(0, 0, 0, 0);

      let selectedDate = new Date(date + "T00:00:00");

      if (selectedDate < today) {
        e.preventDefault();

        $("#appointmentDateError").text("Please select a future date.").show();

        $("#appointmentDate").addClass("is-invalid").removeClass("is-valid");

        return;
      }
    }
  });
});
