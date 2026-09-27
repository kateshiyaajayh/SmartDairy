$(document).ready(function () {
  $("#animalSearch").on("input", function () {
    let search = $(this).val().toLowerCase();

    $(".animals-table tbody tr").each(function () {
      let row = $(this).text().toLowerCase();

      $(this).toggle(row.includes(search));
    });
  });
});
