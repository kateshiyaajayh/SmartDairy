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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Product Details - SmartDairy Pro</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/product_details.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="product-details-page">

        <div class="container-fluid">

            <div class="page-heading">

                <div>
                    <h1>Product Details</h1>
                    <p>View complete information about this product.</p>
                </div>

                <a href="market.php" class="back-btn">
                    <i class="bi bi-arrow-left"></i>
                    Back to Market
                </a>

            </div>


            <div class="product-details-panel">

                <div class="row g-5">


                    <div class="col-lg-5">

                        <div class="product-main-image">

                            <img
                                src="images/products/cow-milk.jpg"
                                alt="Farm Fresh Cow Milk">

                            <span class="discount-badge">
                                18% OFF
                            </span>

                            <button class="wishlist-btn">

                                <i class="bi bi-heart"></i>

                            </button>

                        </div>

                    </div>


                    <div class="col-lg-7">

                        <div class="product-details-content">

                            <div class="product-category">
                                Milk
                            </div>

                            <h2>
                                Farm-Fresh Cow Milk
                            </h2>


                            <div class="rating-row">

                                <span class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    4.1
                                </span>

                                <span>
                                    42 Reviews
                                </span>

                            </div>


                            <div class="product-price">

                                <strong>₹49</strong>

                                <del>₹60</del>

                                <span>/ litre</span>

                            </div>


                            <p class="product-description">
                                Fresh cow milk collected from healthy dairy
                                animals. Suitable for daily household use
                                and dairy requirements.
                            </p>


                            <div class="product-info-list">

                                <div>
                                    <i class="bi bi-geo-alt"></i>

                                    <span>
                                        <strong>Location</strong>
                                        Anand, Gujarat
                                    </span>

                                </div>


                                <div>
                                    <i class="bi bi-truck"></i>

                                    <span>
                                        <strong>Delivery</strong>
                                        Delivery in 1 day
                                    </span>

                                </div>


                                <div>
                                    <i class="bi bi-box-seam"></i>

                                    <span>
                                        <strong>Availability</strong>
                                        In Stock
                                    </span>

                                </div>

                            </div>


                            <div class="quantity-section">

                                <label>
                                    Quantity
                                </label>

                                <div class="quantity-control">

                                    <button
                                        type="button"
                                        id="decreaseQuantity">

                                        <i class="bi bi-dash"></i>

                                    </button>

                                    <input
                                        type="text"
                                        id="quantity"
                                        value="1"
                                        readonly>

                                    <button
                                        type="button"
                                        id="increaseQuantity">

                                        <i class="bi bi-plus"></i>

                                    </button>

                                </div>

                            </div>


                            <div class="product-actions">

                                <button
                                    type="button"
                                    class="add-cart-btn">

                                    <i class="bi bi-cart3"></i>
                                    Add to Cart

                                </button>


                                <button
                                    type="button"
                                    class="buy-btn">

                                    Buy Now

                                </button>

                            </div>


                            <div class="seller-card">

                                <div class="seller-icon">
                                    <i class="bi bi-shop"></i>
                                </div>

                                <div>

                                    <strong>
                                        Anand Dairy Co-op
                                    </strong>

                                    <span>
                                        Verified Seller · Anand, Gujarat
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="product-description-section">

                    <h2>Product Information</h2>

                    <p>
                        Farm-fresh cow milk supplied directly by the seller.
                        The product is collected and handled with standard
                        dairy practices.
                    </p>

                    <div class="product-specifications">

                        <div>
                            <span>Category</span>
                            <strong>Milk</strong>
                        </div>

                        <div>
                            <span>Unit</span>
                            <strong>Litre</strong>
                        </div>

                        <div>
                            <span>Brand</span>
                            <strong>Anand Dairy Co-op</strong>
                        </div>

                        <div>
                            <span>Product Type</span>
                            <strong>Cow Milk</strong>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/product_details.js"></script>

</body>

</html>