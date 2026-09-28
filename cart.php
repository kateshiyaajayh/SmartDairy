<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Shopping Cart - SmartDairy Pro</title>

    <link
        rel="stylesheet"
        href="css/bootstrap.min.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/css/header.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/css/footer.css">

    <link
        rel="stylesheet"
        href="css/cart.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="cart-page">

        <div class="container-fluid">

            <div class="cart-header">

                <div>
                    <h1>Shopping Cart</h1>

                    <p>
                        Review your products before checkout.
                    </p>
                </div>

                <a
                    href="market.php"
                    class="continue-shopping">

                    <i class="bi bi-arrow-left"></i>

                    Continue Shopping

                </a>

            </div>

            <div class="row g-4">

                <div class="col-lg-8">

                    <div class="cart-card">

                        <div class="cart-card-header">

                            <h2>Cart Items</h2>

                            <span id="cartItemCount">
                                3 Items
                            </span>

                        </div>

                        <div class="cart-items">

                            <div class="cart-item">

                                <div class="cart-product">

                                    <img
                                        src="images/products/cow-milk.jpg"
                                        alt="Farm-Fresh Cow Milk">

                                    <div class="cart-product-info">

                                        <span class="product-category">
                                            Milk
                                        </span>

                                        <h3>
                                            Farm-Fresh Cow Milk
                                        </h3>

                                        <p>
                                            Farm-fresh cow milk with
                                            high quality and freshness.
                                        </p>

                                        <span class="product-location">

                                            <i class="bi bi-geo-alt"></i>

                                            Anand, Gujarat

                                        </span>

                                    </div>

                                </div>

                                <div class="cart-item-right">

                                    <div class="cart-price">
                                        ₹49
                                        <span>/ litre</span>
                                    </div>

                                    <div class="quantity-control">

                                        <button
                                            type="button"
                                            class="quantity-btn decrease-btn">

                                            <i class="bi bi-dash"></i>

                                        </button>

                                        <input
                                            type="text"
                                            value="1"
                                            class="quantity-input"
                                            readonly>

                                        <button
                                            type="button"
                                            class="quantity-btn increase-btn">

                                            <i class="bi bi-plus"></i>

                                        </button>

                                    </div>

                                    <div class="item-total">
                                        ₹49
                                    </div>

                                    <button
                                        type="button"
                                        class="remove-item">

                                        <i class="bi bi-trash"></i>

                                        Remove

                                    </button>

                                </div>

                            </div>

                            <div class="cart-item">

                                <div class="cart-product">

                                    <img
                                        src="images/products/buffalo-milk.jpg"
                                        alt="Buffalo Milk">

                                    <div class="cart-product-info">

                                        <span class="product-category">
                                            Milk
                                        </span>

                                        <h3>
                                            Buffalo Milk (Rich)
                                        </h3>

                                        <p>
                                            Fresh buffalo milk with
                                            rich taste and quality.
                                        </p>

                                        <span class="product-location">

                                            <i class="bi bi-geo-alt"></i>

                                            Hyderabad, Telangana

                                        </span>

                                    </div>

                                </div>

                                <div class="cart-item-right">

                                    <div class="cart-price">
                                        ₹73
                                        <span>/ litre</span>
                                    </div>

                                    <div class="quantity-control">

                                        <button
                                            type="button"
                                            class="quantity-btn decrease-btn">

                                            <i class="bi bi-dash"></i>

                                        </button>

                                        <input
                                            type="text"
                                            value="2"
                                            class="quantity-input"
                                            readonly>

                                        <button
                                            type="button"
                                            class="quantity-btn increase-btn">

                                            <i class="bi bi-plus"></i>

                                        </button>

                                    </div>

                                    <div class="item-total">
                                        ₹146
                                    </div>

                                    <button
                                        type="button"
                                        class="remove-item">

                                        <i class="bi bi-trash"></i>

                                        Remove

                                    </button>

                                </div>

                            </div>

                            <div class="cart-item">

                                <div class="cart-product">

                                    <img
                                        src="images/products/cow-ghee.jpg"
                                        alt="Desi Cow A2 Ghee">

                                    <div class="cart-product-info">

                                        <span class="product-category">
                                            Ghee
                                        </span>

                                        <h3>
                                            Desi Cow A2 Ghee
                                        </h3>

                                        <p>
                                            Pure desi cow A2 ghee
                                            prepared from quality milk.
                                        </p>

                                        <span class="product-location">

                                            <i class="bi bi-geo-alt"></i>

                                            Pune, Maharashtra

                                        </span>

                                    </div>

                                </div>

                                <div class="cart-item-right">

                                    <div class="cart-price">
                                        ₹1,480
                                        <span>/ kg</span>
                                    </div>

                                    <div class="quantity-control">

                                        <button
                                            type="button"
                                            class="quantity-btn decrease-btn">

                                            <i class="bi bi-dash"></i>

                                        </button>

                                        <input
                                            type="text"
                                            value="1"
                                            class="quantity-input"
                                            readonly>

                                        <button
                                            type="button"
                                            class="quantity-btn increase-btn">

                                            <i class="bi bi-plus"></i>

                                        </button>

                                    </div>

                                    <div class="item-total">
                                        ₹1,480
                                    </div>

                                    <button
                                        type="button"
                                        class="remove-item">

                                        <i class="bi bi-trash"></i>

                                        Remove

                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="summary-card">

                        <h2>
                            Price Summary
                        </h2>

                        <div class="summary-row">

                            <span>
                                Items
                            </span>

                            <span id="summaryItems">
                                4
                            </span>

                        </div>

                        <div class="summary-row">

                            <span>
                                Subtotal
                            </span>

                            <span id="subtotal">
                                ₹1,675
                            </span>

                        </div>

                        <div class="summary-row">

                            <span>
                                Delivery
                            </span>

                            <span id="delivery">
                                ₹50
                            </span>

                        </div>

                        <div class="summary-divider"></div>

                        <div class="summary-total">

                            <span>
                                Total
                            </span>

                            <strong id="grandTotal">
                                ₹1,725
                            </strong>

                        </div>

                        <button
                            type="button"
                            class="checkout-btn">

                            Proceed to Checkout

                            <i class="bi bi-arrow-right"></i>

                        </button>

                        <div class="secure-payment">

                            <i class="bi bi-shield-check"></i>

                            <span>
                                Secure and reliable checkout
                            </span>

                        </div>

                    </div>

                    <div class="delivery-card">

                        <div class="delivery-icon">

                            <i class="bi bi-truck"></i>

                        </div>

                        <div>

                            <h3>
                                Delivery Information
                            </h3>

                            <p>
                                Delivery charges may vary based
                                on seller location and order size.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="js/jquery-4.0.0.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/cart.js"></script>

</body>

</html>