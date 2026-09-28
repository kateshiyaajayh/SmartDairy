$(document).ready(function () {
  function filterProducts() {
    let search = $("#productSearch").val().toLowerCase();
    let category = $(".category-btn.active").data("category");

    $(".product-column").each(function () {
      let product = $(this);

      let name = product.data("name").toLowerCase();
      let productCategory = product.data("category");

      let searchMatch = name.includes(search);

      let categoryMatch = category === "all" || productCategory === category;

      product.toggle(searchMatch && categoryMatch);
    });
  }

  $(".category-btn").on("click", function () {
    $(".category-btn").removeClass("active");

    $(this).addClass("active");

    filterProducts();
  });

  $("#productSearch").on("input", function () {
    filterProducts();
  });

  $("#sortProducts").on("change", function () {
    let sort = $(this).val();

    let products = $(".product-column").get();

    products.sort(function (a, b) {
      let first = $(a);
      let second = $(b);

      if (sort === "price-low") {
        return first.data("price") - second.data("price");
      }

      if (sort === "price-high") {
        return second.data("price") - first.data("price");
      }

      if (sort === "rating") {
        return second.data("rating") - first.data("rating");
      }

      return 0;
    });

    $("#productGrid").append(products);
  });

  $(".wishlist-btn").on("click", function () {
    let icon = $(this).find("i");

    icon.toggleClass("bi-heart bi-heart-fill");
  });

  $(".add-cart-btn").on("click", function () {
    $(this).html('<i class="bi bi-check-lg"></i> Added');
  });
});
