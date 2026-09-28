$(document).ready(function () {
  function filterVets() {
    let search = $("#vetSearch").val().toLowerCase();
    let specialization = $("#vetSpecialization").val();
    let availability = $("#vetAvailability").val();

    $(".vet-column").each(function () {
      let vet = $(this);

      let name = vet.data("name").toLowerCase();

      let vetSpecialization = vet.data("specialization");

      let vetAvailability = vet.data("availability");

      let searchMatch = name.includes(search);

      let specializationMatch =
        specialization === "all" || vetSpecialization === specialization;

      let availabilityMatch =
        availability === "all" || vetAvailability === availability;

      if (searchMatch && specializationMatch && availabilityMatch) {
        vet.show();
      } else {
        vet.hide();
      }
    });
  }

  $("#vetSearch").on("input", function () {
    filterVets();
  });

  $("#vetSpecialization").on("change", function () {
    filterVets();
  });

  $("#vetAvailability").on("change", function () {
    filterVets();
  });
});
