$(document).ready(function () {
  function updateCartItem(item) {
    let priceText = item.find(".cart-price").contents().first().text().trim();
    let price = parseInt(priceText.replace(/,/g, ""));

    let quantity = parseInt(item.find(".quantity-input").val());

    let total = price * quantity;

    item.find(".item-total").text("₹" + total.toLocaleString("en-IN"));

    updateSummary();
  }

  function updateSummary() {
    let subtotal = 0;
    let items = 0;

    $(".cart-item").each(function () {
      let item = $(this);

      let priceText = item.find(".cart-price").contents().first().text().trim();

      let price = parseInt(priceText.replace(/,/g, ""));

      let quantity = parseInt(item.find(".quantity-input").val());

      subtotal += price * quantity;
      items += quantity;
    });

    let delivery = items > 0 ? 50 : 0;
    let grandTotal = subtotal + delivery;

    $("#summaryItems").text(items);

    $("#subtotal").text("₹" + subtotal.toLocaleString("en-IN"));

    $("#delivery").text("₹" + delivery.toLocaleString("en-IN"));

    $("#grandTotal").text("₹" + grandTotal.toLocaleString("en-IN"));

    $("#cartItemCount").text($(".cart-item").length + " Items");
  }

  $(".increase-btn").on("click", function () {
    let input = $(this).siblings(".quantity-input");

    let quantity = parseInt(input.val());

    input.val(quantity + 1);

    updateCartItem($(this).closest(".cart-item"));
  });

  $(".decrease-btn").on("click", function () {
    let input = $(this).siblings(".quantity-input");

    let quantity = parseInt(input.val());

    if (quantity > 1) {
      input.val(quantity - 1);

      updateCartItem($(this).closest(".cart-item"));
    }
  });

  $(".remove-item").on("click", function () {
    $(this).closest(".cart-item").remove();

    updateSummary();
  });

  updateSummary();
});
