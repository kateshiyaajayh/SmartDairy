$(document).ready(function () {
  $("#productImage").on("change", function () {
    let fileName = this.files.length
      ? this.files[0].name
      : "Choose Product Image";

    $(".upload-box strong").text(fileName);
  });
});
