$(document).ready(function () {
  const schemeLink = $("#schemeLink");
  const schemeLinkError = $("#scheme_linkError");

  function validateSchemeLink() {
    const value = schemeLink.val().trim();

    if (value === "") {
      schemeLinkError.text("").hide();
      schemeLink.removeClass("is-invalid is-valid");
      return true;
    }

    let isValid = false;

    try {
      const url = new URL(value);
      isValid =
        !/\s/.test(value) &&
        (url.protocol === "http:" || url.protocol === "https:") &&
        url.hostname !== "";
    } catch (error) {
      isValid = false;
    }

    if (isValid) {
      schemeLinkError.text("").hide();
      schemeLink.removeClass("is-invalid").addClass("is-valid");
    } else {
      schemeLinkError.text("Enter a valid URL starting with http:// or https://.").show();
      schemeLink.removeClass("is-valid").addClass("is-invalid");
    }

    return isValid;
  }

  schemeLink.on("input change", validateSchemeLink);

  $("#addSchemeForm").on("submit", function (event) {
    if (!validateSchemeLink()) {
      event.preventDefault();
    }
  });
});
