$(document).ready(function () {
  $("#recordType").on("change", function () {
    let type = $(this).val();

    if (type === "vaccination") {
      $("#vaccineName").closest(".col-md-6").show();
      $("#vaccinationDate").closest(".col-md-6").show();
      $("#nextDueDate").closest(".col-md-6").show();
    } else {
      $("#vaccineName").closest(".col-md-6").hide();
      $("#vaccinationDate").closest(".col-md-6").hide();
      $("#nextDueDate").closest(".col-md-6").hide();
    }
  });

  $("#healthRecordForm").on("submit", function (e) {
    if (
      !$("#animal").val() ||
      !$("#recordType").val() ||
      !$("#checkupDate").val() ||
      !$("#healthStatus").val()
    ) {
      e.preventDefault();

      return;
    }
  });

  $("#recordType").trigger("change");
});
