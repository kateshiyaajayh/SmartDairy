$(document).ready(function () {
  $("#milkSearch").on("input", function () {
    let search = $(this).val().toLowerCase();

    $(".milk-table tbody tr").each(function () {
      let row = $(this).text().toLowerCase();

      $(this).toggle(row.includes(search));
    });
  });
});
