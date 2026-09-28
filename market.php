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

    <title>Market - SmartDairy Pro</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/market.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="market-page">

        <div class="container-fluid">

            <div class="market-heading">

                <div>
                    <h1>Dairy Supplies Marketplace</h1>
                    <p>
                        Cattle feed and dairy products from verified sellers.
                    </p>
                </div>

                <div class="market-actions">

                    <a href="add_product.php" class="add-product-btn">
                        <i class="bi bi-plus-lg"></i>
                        Add Product
                    </a>

                    <a href="cart.php" class="cart-btn">
                        <i class="bi bi-cart3"></i>
                        Cart
                    </a>

                </div>

            </div>


            <div class="market-tools">

                <div class="market-search">

                    <i class="bi bi-search"></i>

                    <input
                        type="text"
                        id="productSearch"
                        placeholder="Search feed, medicines, brands...">

                </div>


                <select id="sortProducts" class="sort-select">

                    <option value="newest">
                        Newest first
                    </option>

                    <option value="price-low">
                        Price: Low to High
                    </option>

                    <option value="price-high">
                        Price: High to Low
                    </option>

                    <option value="rating">
                        Rating
                    </option>

                </select>


                <button type="button" class="filter-btn">

                    <i class="bi bi-sliders"></i>
                    Filters

                </button>

            </div>


            <div class="category-list">

                <button class="category-btn active" data-category="all">
                    <i class="bi bi-stars"></i>
                    All
                </button>

                <button class="category-btn" data-category="Milk">
                    <i class="bi bi-cup"></i>
                    Milk
                </button>

                <button class="category-btn" data-category="Ghee">
                    <i class="bi bi-droplet"></i>
                    Ghee
                </button>

                <button class="category-btn" data-category="Paneer">
                    <i class="bi bi-circle"></i>
                    Paneer
                </button>

                <button class="category-btn" data-category="Curd">
                    <i class="bi bi-cup-straw"></i>
                    Curd
                </button>

                <button class="category-btn" data-category="Butter">
                    <i class="bi bi-cookie"></i>
                    Butter
                </button>

                <button class="category-btn" data-category="Feed">
                    <i class="bi bi-flower1"></i>
                    Feed
                </button>

                <button class="category-btn" data-category="Minerals">
                    <i class="bi bi-beaker"></i>
                    Minerals
                </button>

                <button class="category-btn" data-category="Supplements">
                    <i class="bi bi-capsule"></i>
                    Supplements
                </button>

                <button class="category-btn" data-category="Medical Store">
                    <i class="bi bi-capsule"></i>
                    Medical Store
                </button>

                <button class="category-btn" data-category="Equipment">
                    <i class="bi bi-truck"></i>
                    Equipment
                </button>

            </div>


            <div class="row g-4 product-grid" id="productGrid">


                <div
                    class="col-sm-6 col-xl-3 product-column"
                    data-category="Milk"
                    data-name="Farm Fresh Cow Milk"
                    data-price="49"
                    data-rating="4.1">

                    <div class="product-card">

                        <div class="product-image">

                            <img
                                src="images/products/cow-milk.jpg"
                                alt="Farm Fresh Cow Milk">

                            <span class="discount-badge">
                                18% OFF
                            </span>

                            <span class="sample-badge">
                                Sample
                            </span>

                            <button class="wishlist-btn">
                                <i class="bi bi-heart"></i>
                            </button>

                        </div>


                        <div class="product-content">

                            <div class="product-title-row">

                                <h2>Farm-Fresh Cow Milk</h2>

                                <button class="share-btn">
                                    <i class="bi bi-share"></i>
                                </button>

                            </div>


                            <div class="product-meta">

                                <div>
                                    <span class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        4.1
                                    </span>

                                    <span class="review-count">
                                        (42)
                                    </span>
                                </div>

                                <span class="product-category">
                                    Milk
                                </span>

                            </div>


                            <div class="price-row">

                                <strong>₹49</strong>

                                <del>₹60</del>

                                <span>/ litre</span>

                            </div>


                            <div class="product-info">

                                <span>
                                    <i class="bi bi-geo-alt"></i>
                                    Anand, Gujarat
                                </span>

                                <span class="delivery">
                                    <i class="bi bi-truck"></i>
                                    Delivery in 1d
                                </span>

                            </div>


                            <div class="product-actions">

                                <a href="product_details.php?id=1"
                                    class="details-btn">

                                    <i class="bi bi-eye"></i>
                                    Details

                                </a>

                                <button class="add-cart-btn">
                                    <i class="bi bi-cart3"></i>
                                    Add
                                </button>

                                <a href="product_details.php?id=1"
                                    class="buy-btn">

                                    Buy

                                </a>

                            </div>


                            <div class="seller-info">
                                Today · Anand Dairy Co-op
                            </div>

                        </div>

                    </div>

                </div>


                <div
                    class="col-sm-6 col-xl-3 product-column"
                    data-category="Milk"
                    data-name="Buffalo Milk Rich"
                    data-price="73"
                    data-rating="4.2">

                    <div class="product-card">

                        <div class="product-image">

                            <img
                                src="images/products/buffalo-milk.jpg"
                                alt="Buffalo Milk">

                            <span class="discount-badge">
                                15% OFF
                            </span>

                            <span class="sample-badge">
                                Sample
                            </span>

                            <button class="wishlist-btn">
                                <i class="bi bi-heart"></i>
                            </button>

                        </div>


                        <div class="product-content">

                            <div class="product-title-row">

                                <h2>Buffalo Milk (Rich)</h2>

                                <button class="share-btn">
                                    <i class="bi bi-share"></i>
                                </button>

                            </div>


                            <div class="product-meta">

                                <div>
                                    <span class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        4.2
                                    </span>

                                    <span class="review-count">
                                        (65)
                                    </span>
                                </div>

                                <span class="product-category">
                                    Milk
                                </span>

                            </div>


                            <div class="price-row">

                                <strong>₹73</strong>

                                <del>₹86</del>

                                <span>/ litre</span>

                            </div>


                            <div class="product-info">

                                <span>
                                    <i class="bi bi-geo-alt"></i>
                                    Hyderabad, Telangana
                                </span>

                                <span class="delivery">
                                    <i class="bi bi-truck"></i>
                                    Delivery in 2d
                                </span>

                            </div>


                            <div class="product-actions">

                                <a href="product_details.php?id=2"
                                    class="details-btn">

                                    <i class="bi bi-eye"></i>
                                    Details

                                </a>

                                <button class="add-cart-btn">
                                    <i class="bi bi-cart3"></i>
                                    Add
                                </button>

                                <a href="product_details.php?id=2"
                                    class="buy-btn">

                                    Buy

                                </a>

                            </div>


                            <div class="seller-info">
                                Today · Sunrise Farms
                            </div>

                        </div>

                    </div>

                </div>


                <div
                    class="col-sm-6 col-xl-3 product-column"
                    data-category="Ghee"
                    data-name="Desi Cow A2 Ghee"
                    data-price="1480"
                    data-rating="4.3">

                    <div class="product-card">

                        <div class="product-image">

                            <img
                                src="images/products/cow-ghee.jpg"
                                alt="Desi Cow A2 Ghee">

                            <span class="discount-badge">
                                12% OFF
                            </span>

                            <span class="sample-badge">
                                Sample
                            </span>

                            <button class="wishlist-btn">
                                <i class="bi bi-heart"></i>
                            </button>

                        </div>


                        <div class="product-content">

                            <div class="product-title-row">

                                <h2>Desi Cow A2 Ghee</h2>

                                <button class="share-btn">
                                    <i class="bi bi-share"></i>
                                </button>

                            </div>


                            <div class="product-meta">

                                <div>
                                    <span class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        4.3
                                    </span>

                                    <span class="review-count">
                                        (88)
                                    </span>
                                </div>

                                <span class="product-category">
                                    Ghee
                                </span>

                            </div>


                            <div class="price-row">

                                <strong>₹1,480</strong>

                                <del>₹1,682</del>

                                <span>/ kg</span>

                            </div>


                            <div class="product-info">

                                <span>
                                    <i class="bi bi-geo-alt"></i>
                                    Pune, Maharashtra
                                </span>

                                <span class="delivery">
                                    <i class="bi bi-truck"></i>
                                    Delivery in 3d
                                </span>

                            </div>


                            <div class="product-actions">

                                <a href="product_details.php?id=3"
                                    class="details-btn">

                                    <i class="bi bi-eye"></i>
                                    Details

                                </a>

                                <button class="add-cart-btn">
                                    <i class="bi bi-cart3"></i>
                                    Add

                                </button>

                                <a href="product_details.php?id=3"
                                    class="buy-btn">

                                    Buy

                                </a>

                            </div>


                            <div class="seller-info">
                                Today · Green Valley Dairy
                            </div>

                        </div>

                    </div>

                </div>


                <div
                    class="col-sm-6 col-xl-3 product-column"
                    data-category="Ghee"
                    data-name="Buffalo Milk Ghee"
                    data-price="1354"
                    data-rating="4.4">

                    <div class="product-card">

                        <div class="product-image">

                            <img
                                src="images/products/buffalo-ghee.jpg"
                                alt="Buffalo Milk Ghee">

                            <span class="discount-badge">
                                9% OFF
                            </span>

                            <span class="sample-badge">
                                Sample
                            </span>

                            <button class="wishlist-btn">
                                <i class="bi bi-heart"></i>
                            </button>

                        </div>


                        <div class="product-content">

                            <div class="product-title-row">

                                <h2>Buffalo Milk Ghee</h2>

                                <button class="share-btn">
                                    <i class="bi bi-share"></i>
                                </button>

                            </div>


                            <div class="product-meta">

                                <div>
                                    <span class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        4.4
                                    </span>

                                    <span class="review-count">
                                        (111)
                                    </span>
                                </div>

                                <span class="product-category">
                                    Ghee
                                </span>

                            </div>


                            <div class="price-row">

                                <strong>₹1,354</strong>

                                <del>₹1,488</del>

                                <span>/ kg</span>

                            </div>


                            <div class="product-info">

                                <span>
                                    <i class="bi bi-geo-alt"></i>
                                    Bengaluru, Karnataka
                                </span>

                                <span class="delivery">
                                    <i class="bi bi-truck"></i>
                                    Delivery in 4d
                                </span>

                            </div>


                            <div class="product-actions">

                                <a href="product_details.php?id=4"
                                    class="details-btn">

                                    <i class="bi bi-eye"></i>
                                    Details

                                </a>

                                <button class="add-cart-btn">
                                    <i class="bi bi-cart3"></i>
                                    Add

                                </button>

                                <a href="product_details.php?id=4"
                                    class="buy-btn">

                                    Buy

                                </a>

                            </div>


                            <div class="seller-info">
                                Today · Heritage Milk Producers
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/market.js"></script>

</body>

</html>