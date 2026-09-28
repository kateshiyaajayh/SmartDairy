$(document).ready(function () {
  function filterRecords() {
    const search = $(".module-search input").val().toLowerCase().trim();
    let visibleRecords = 0;

    $(".module-table tbody tr").each(function () {
      const row = $(this);
      let matches = (row.data("search") || "").toLowerCase().includes(search);

      $(".module-filter").each(function () {
        const filter = $(this);
        const key = filter.data("filter");
        const selected = filter.val();
        const value = (row.data(key) || "").toString().toLowerCase();

        if (selected !== "all" && selected.toLowerCase() !== value) {
          matches = false;
        }
      });

      row.toggle(matches);
      visibleRecords += matches ? 1 : 0;
    });

    $("#noRecords").toggle(visibleRecords === 0);
  }

  $(".module-search input").on("input", filterRecords);
  $(".module-filter").on("change", filterRecords);
});
