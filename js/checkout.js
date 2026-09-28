$(document).ready(function () {
  $(".payment-option").on("click", function () {
    $(".payment-option").removeClass("active");

    $(this).addClass("active");

    $(this).find("input[type='radio']").prop("checked", true);
  });

  $(".place-order-btn").on("click", function () {
    let fullName = $("#fullName").val().trim();
    let mobile = $("#mobile").val().trim();
    let address = $("#address").val().trim();
    let village = $("#village").val().trim();
    let district = $("#district").val().trim();
    let pincode = $("#pincode").val().trim();
    let state = $("#state").val();

    if (
      fullName === "" ||
      mobile === "" ||
      address === "" ||
      village === "" ||
      district === "" ||
      pincode === "" ||
      state === ""
    ) {
      alert("Please fill all required delivery details.");
      return;
    }

    let payment = $("input[name='payment']:checked").val();

    if (payment === "cod") {
      alert("Cash on Delivery selected.");
    } else {
      alert("Online Payment selected.");
    }
  });
});
