$(document).ready(function () {
  function dateMatches(dateValue, filter) {
    if (filter === "all") {
      return true;
    }

    const [year, month, day] = dateValue.split("-").map(Number);
    const recordDate = new Date(year, month - 1, day);
    const today = new Date();
    today.setHours(0, 0, 0, 0);

    if (filter === "today") {
      return recordDate.getTime() === today.getTime();
    }

    if (filter === "week") {
      const weekStart = new Date(today);
      weekStart.setDate(today.getDate() - ((today.getDay() + 6) % 7));
      const weekEnd = new Date(weekStart);
      weekEnd.setDate(weekStart.getDate() + 7);
      return recordDate >= weekStart && recordDate < weekEnd;
    }

    if (filter === "month") {
      return recordDate.getFullYear() === today.getFullYear() &&
        recordDate.getMonth() === today.getMonth();
    }

    return false;
  }

  function filterRecords() {
    const search = $("#milkSearch").val().toLowerCase().trim();
    const type = $("#milkType").val();
    const session = $("#milkSession").val();
    const date = $("#milkDate").val();
    let visibleRecords = 0;

    $(".milk-table tbody tr").each(function () {
      const record = $(this);
      const searchMatch = record.data("search").includes(search);
      const typeMatch = type === "all" || record.data("type") === type;
      const sessionMatch = session === "all" || record.data("session") === session;
      const dateMatch = dateMatches(record.data("date"), date);
      const showRecord = searchMatch && typeMatch && sessionMatch && dateMatch;

      record.toggle(showRecord);
      visibleRecords += showRecord ? 1 : 0;
    });

    $("#noMilkRecords").toggle(visibleRecords === 0);
  }

  $("#milkSearch").on("input", filterRecords);
  $("#milkType, #milkSession, #milkDate").on("change", filterRecords);
});
