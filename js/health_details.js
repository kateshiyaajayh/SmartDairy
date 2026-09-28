$(document).ready(function () {
  $(".delete-btn").on("click", function () {
    let confirmDelete = confirm(
      "Are you sure you want to delete this health record?",
    );

    if (!confirmDelete) {
      return;
    }

    alert("Health record deleted.");
  });
});
