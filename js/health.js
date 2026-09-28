$(document).ready(function () {
  function filterHealthRecords() {
    let search = $("#healthSearch").val().toLowerCase();
    let status = $("#healthStatus").val();
    let type = $("#healthType").val();

    $(".health-table tbody tr").each(function () {
      let row = $(this);

      let name = row.data("name").toLowerCase();
      let rowType = row.data("type");
      let rowStatus = row.data("status");

      let searchMatch = name.includes(search);

      let statusMatch = status === "all" || rowStatus === status;

      let typeMatch = type === "all" || rowType === type;

      if (searchMatch && statusMatch && typeMatch) {
        row.show();
      } else {
        row.hide();
      }
    });
  }

  $("#healthSearch").on("input", function () {
    filterHealthRecords();
  });

  $("#healthStatus").on("change", function () {
    filterHealthRecords();
  });

  $("#healthType").on("change", function () {
    filterHealthRecords();
  });
});
