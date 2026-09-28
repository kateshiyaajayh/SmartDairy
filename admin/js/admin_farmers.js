$(document).ready(function () {
  function filterFarmers() {
    let search = $("#farmerSearch").val().toLowerCase();
    let status = $("#farmerStatus").val();

    let visibleFarmers = 0;

    $(".farmer-table tbody tr").each(function () {
      let farmer = $(this);

      let name = farmer.data("name").toLowerCase();
      let mobile = farmer.data("mobile").toLowerCase();
      let email = farmer.data("email").toLowerCase();
      let farmerStatus = farmer.data("status");

      let searchMatch =
        name.includes(search) ||
        mobile.includes(search) ||
        email.includes(search);

      let statusMatch = status === "all" || farmerStatus === status;

      if (searchMatch && statusMatch) {
        farmer.show();
        visibleFarmers++;
      } else {
        farmer.hide();
      }
    });

    if (visibleFarmers === 0) {
      $("#noFarmers").show();
    } else {
      $("#noFarmers").hide();
    }
  }

  $("#farmerSearch").on("input", function () {
    filterFarmers();
  });

  $("#farmerStatus").on("change", function () {
    filterFarmers();
  });
});
