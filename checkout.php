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

    <title>Checkout - SmartDairy Pro</title>

    <link
        rel="stylesheet"
        href="/SmartDairy/css/bootstrap.min.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/css/checkout.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="checkout-page">

        <div class="container-fluid">

            <div class="checkout-header">

                <div>

                    <h1>Checkout</h1>

                    <p>
                        Complete your details and place your order.
                    </p>

                </div>

                <a
                    href="cart.php"
                    class="back-cart">

                    <i class="bi bi-arrow-left"></i>

                    Back to Cart

                </a>

            </div>

            <div class="row g-4">

                <div class="col-lg-8">

                    <div class="checkout-card">

                        <div class="checkout-card-header">

                            <h2>
                                Delivery Address
                            </h2>

                        </div>

                        <div class="checkout-card-body">

                            <div class="row g-3">

                                <div class="col-md-6">

                                    <label
                                        for="fullName"
                                        class="form-label">

                                        Full Name

                                    </label>

                                    <input
                                        type="text"
                                        id="fullName"
                                        name="fullName"
                                        class="form-control"
                                        placeholder="Enter your full name">

                                </div>

                                <div class="col-md-6">

                                    <label
                                        for="mobile"
                                        class="form-label">

                                        Mobile Number

                                    </label>

                                    <input
                                        type="text"
                                        id="mobile"
                                        name="mobile"
                                        class="form-control"
                                        placeholder="Enter mobile number">

                                </div>

                                <div class="col-12">

                                    <label
                                        for="address"
                                        class="form-label">

                                        Address

                                    </label>

                                    <textarea
                                        id="address"
                                        name="address"
                                        rows="3"
                                        class="form-control"
                                        placeholder="House No, Street, Area"></textarea>

                                </div>

                                <div class="col-md-4">

                                    <label
                                        for="village"
                                        class="form-label">

                                        Village / City

                                    </label>

                                    <input
                                        type="text"
                                        id="village"
                                        name="village"
                                        class="form-control"
                                        placeholder="Village / City">

                                </div>

                                <div class="col-md-4">

                                    <label
                                        for="district"
                                        class="form-label">

                                        District

                                    </label>

                                    <input
                                        type="text"
                                        id="district"
                                        name="district"
                                        class="form-control"
                                        placeholder="District">

                                </div>

                                <div class="col-md-4">

                                    <label
                                        for="pincode"
                                        class="form-label">

                                        Pincode

                                    </label>

                                    <input
                                        type="text"
                                        id="pincode"
                                        name="pincode"
                                        class="form-control"
                                        placeholder="Pincode">

                                </div>

                                <div class="col-md-6">

                                    <label
                                        for="state"
                                        class="form-label">

                                        State

                                    </label>

                                    <select
                                        id="state"
                                        name="state"
                                        class="form-select">

                                        <option value="">
                                            Select State
                                        </option>

                                        <option value="Gujarat">
                                            Gujarat
                                        </option>

                                        <option value="Maharashtra">
                                            Maharashtra
                                        </option>

                                        <option value="Rajasthan">
                                            Rajasthan
                                        </option>

                                        <option value="Madhya Pradesh">
                                            Madhya Pradesh
                                        </option>

                                        <option value="Telangana">
                                            Telangana
                                        </option>

                                        <option value="Karnataka">
                                            Karnataka
                                        </option>

                                    </select>

                                </div>

                                <div class="col-md-6">

                                    <label
                                        for="landmark"
                                        class="form-label">

                                        Landmark

                                    </label>

                                    <input
                                        type="text"
                                        id="landmark"
                                        name="landmark"
                                        class="form-control"
                                        placeholder="Nearby landmark">

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="checkout-card">

                        <div class="checkout-card-header">

                            <h2>
                                Payment Method
                            </h2>

                        </div>

                        <div class="checkout-card-body">

                            <div class="payment-options">

                                <label class="payment-option">

                                    <input
                                        type="radio"
                                        name="payment"
                                        value="cod"
                                        checked>

                                    <span class="payment-icon">
                                        <i class="bi bi-cash"></i>
                                    </span>

                                    <span class="payment-info">

                                        <strong>
                                            Cash on Delivery
                                        </strong>

                                        <small>
                                            Pay when your order is delivered.
                                        </small>

                                    </span>

                                </label>

                                <label class="payment-option">

                                    <input
                                        type="radio"
                                        name="payment"
                                        value="online">

                                    <span class="payment-icon">
                                        <i class="bi bi-credit-card"></i>
                                    </span>

                                    <span class="payment-info">

                                        <strong>
                                            Online Payment
                                        </strong>

                                        <small>
                                            Pay securely using online payment.
                                        </small>

                                    </span>

                                </label>

                            </div>

                        </div>

                    </div>

                    <div class="checkout-card">

                        <div class="checkout-card-header">

                            <h2>
                                Order Items
                            </h2>

                            <span>
                                3 Products
                            </span>

                        </div>

                        <div class="order-items">

                            <div class="order-item">

                                <img
                                    src="images/products/cow-milk.jpg"
                                    alt="Farm-Fresh Cow Milk">

                                <div class="order-item-info">

                                    <h3>
                                        Farm-Fresh Cow Milk
                                    </h3>

                                    <span>
                                        Quantity: 1
                                    </span>

                                </div>

                                <strong>
                                    ₹49
                                </strong>

                            </div>

                            <div class="order-item">

                                <img
                                    src="images/products/buffalo-milk.jpg"
                                    alt="Buffalo Milk">

                                <div class="order-item-info">

                                    <h3>
                                        Buffalo Milk (Rich)
                                    </h3>

                                    <span>
                                        Quantity: 2
                                    </span>

                                </div>

                                <strong>
                                    ₹146
                                </strong>

                            </div>

                            <div class="order-item">

                                <img
                                    src="images/products/cow-ghee.jpg"
                                    alt="Desi Cow A2 Ghee">

                                <div class="order-item-info">

                                    <h3>
                                        Desi Cow A2 Ghee
                                    </h3>

                                    <span>
                                        Quantity: 1
                                    </span>

                                </div>

                                <strong>
                                    ₹1,480
                                </strong>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="order-summary">

                        <h2>
                            Order Summary
                        </h2>

                        <div class="summary-row">

                            <span>
                                Items
                            </span>

                            <span>
                                4
                            </span>

                        </div>

                        <div class="summary-row">

                            <span>
                                Subtotal
                            </span>

                            <span>
                                ₹1,675
                            </span>

                        </div>

                        <div class="summary-row">

                            <span>
                                Delivery
                            </span>

                            <span>
                                ₹50
                            </span>

                        </div>

                        <div class="summary-divider"></div>

                        <div class="summary-total">

                            <span>
                                Total
                            </span>

                            <strong>
                                ₹1,725
                            </strong>

                        </div>

                        <button
                            type="button"
                            class="place-order-btn">

                            Place Order

                            <i class="bi bi-arrow-right"></i>

                        </button>

                        <div class="order-security">

                            <i class="bi bi-shield-check"></i>

                            <span>
                                Your order information is secure.
                            </span>

                        </div>

                    </div>

                    <div class="delivery-note">

                        <i class="bi bi-truck"></i>

                        <div>

                            <h3>
                                Delivery
                            </h3>

                            <p>
                                Delivery time may vary depending
                                on seller location and product availability.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>

    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>

    <script src="/SmartDairy/js/checkout.js"></script>

</body>

</html>