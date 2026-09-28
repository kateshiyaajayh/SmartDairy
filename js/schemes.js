$(document).ready(function () {
  function filterSchemes() {
    let search = $("#schemeSearch").val().toLowerCase();
    let category = $("#schemeCategory").val();
    let state = $("#schemeState").val();

    let visibleSchemes = 0;

    $(".scheme-column").each(function () {
      let scheme = $(this);

      let name = scheme.data("name").toLowerCase();
      let schemeCategory = scheme.data("category");
      let schemeState = scheme.data("state");

      let searchMatch = name.includes(search);

      let categoryMatch = category === "all" || schemeCategory === category;

      let stateMatch = state === "all" || schemeState === state;

      if (searchMatch && categoryMatch && stateMatch) {
        scheme.show();
        visibleSchemes++;
      } else {
        scheme.hide();
      }
    });

    if (visibleSchemes === 0) {
      $("#noSchemes").show();
    } else {
      $("#noSchemes").hide();
    }
  }

  $("#schemeSearch").on("input", function () {
    filterSchemes();
  });

  $("#schemeCategory").on("change", function () {
    filterSchemes();
  });

  $("#schemeState").on("change", function () {
    filterSchemes();
  });
});
