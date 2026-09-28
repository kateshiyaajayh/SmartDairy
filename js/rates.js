$(document).ready(function () {
  function filterRates() {
    let search = $("#rateSearch").val().toLowerCase();
    let type = $("#rateType").val();
    let date = $("#rateDate").val();

    $(".rate-row").each(function () {
      let row = $(this);

      let name = row.data("name").toLowerCase();
      let rowType = row.data("type");
      let rowDate = row.data("date");

      let searchMatch = name.includes(search);

      let typeMatch = type === "all" || rowType === type;

      let dateMatch = date === "all" || rowDate === date;

      if (searchMatch && typeMatch && dateMatch) {
        row.show();
      } else {
        row.hide();
      }
    });
  }

  $("#rateSearch").on("input", function () {
    filterRates();
  });

  $("#rateType").on("change", function () {
    filterRates();
  });

  $("#rateDate").on("change", function () {
    filterRates();
  });
});
