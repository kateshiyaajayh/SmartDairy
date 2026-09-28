$(document).ready(function () {
  function filterAnimals() {
    const search = $("#animalSearch").val().toLowerCase().trim();
    const type = $("#animalType").val();
    const status = $("#animalStatus").val();
    let visibleAnimals = 0;

    $(".animal-table tbody tr").each(function () {
      const animal = $(this);
      const searchMatch = animal.data("search").includes(search);
      const typeMatch = type === "all" || animal.data("type") === type;
      const statusMatch = status === "all" || animal.data("status") === status;
      const showAnimal = searchMatch && typeMatch && statusMatch;

      animal.toggle(showAnimal);
      visibleAnimals += showAnimal ? 1 : 0;
    });

    $("#noAnimals").toggle(visibleAnimals === 0);
  }

  $("#animalSearch").on("input", filterAnimals);
  $("#animalType, #animalStatus").on("change", filterAnimals);
});
