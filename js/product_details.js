$(document).ready(function () {
  let quantity = 1;

  $("#increaseQuantity").on("click", function () {
    quantity++;

    $("#quantity").val(quantity);
  });

  $("#decreaseQuantity").on("click", function () {
    if (quantity > 1) {
      quantity--;

      $("#quantity").val(quantity);
    }
  });

  $(".wishlist-btn").on("click", function () {
    let icon = $(this).find("i");

    icon.toggleClass("bi-heart bi-heart-fill");
  });

  $(".add-cart-btn").on("click", function () {
    $(this).html('<i class="bi bi-check-lg"></i> Added to Cart');
  });
});
