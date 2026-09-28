$(document).ready(function () {
  function filterActivities() {
    let search = $("#activitySearch").val().toLowerCase();
    let type = $("#activityType").val();

    let visibleActivities = 0;

    $(".activity-item").each(function () {
      let activity = $(this);

      let name = activity.data("name").toLowerCase();
      let activityType = activity.data("type");

      let searchMatch = name.includes(search);

      let typeMatch = type === "all" || activityType === type;

      if (searchMatch && typeMatch) {
        activity.show();
        visibleActivities++;
      } else {
        activity.hide();
      }
    });

    if (visibleActivities === 0) {
      $("#noActivity").show();
    } else {
      $("#noActivity").hide();
    }
  }

  $("#activitySearch").on("input", function () {
    filterActivities();
  });

  $("#activityType").on("change", function () {
    filterActivities();
  });
});
