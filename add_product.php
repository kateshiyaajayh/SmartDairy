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

    <title>Add Product - SmartDairy Pro</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/add_product.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="add-product-page">

        <div class="container-fluid">

            <div class="page-heading">

                <div>
                    <h1>Add Product</h1>
                    <p>List your dairy product on the marketplace.</p>
                </div>

                <a href="market.php" class="back-btn">
                    <i class="bi bi-arrow-left"></i>
                    Back to Market
                </a>

            </div>


            <div class="product-form-panel">

                <form id="productForm" method="POST" enctype="multipart/form-data">

                    <div class="form-section">

                        <div class="section-title">
                            <h2>Product Information</h2>
                            <p>Enter the details of the product you want to sell.</p>
                        </div>


                        <div class="row g-3">

                            <div class="col-md-8">

                                <div class="form-group">

                                    <label for="productName">
                                        Product Name
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-box-seam"></i>

                                        <input
                                            type="text"
                                            id="productName"
                                            name="productName"
                                            placeholder="Enter product name"
                                            data-validation="required">

                                    </div>

                                    <span
                                        id="productNameError"
                                        class="error-message">
                                    </span>

                                </div>

                            </div>


                            <div class="col-md-4">

                                <div class="form-group">

                                    <label for="category">
                                        Category
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-grid"></i>

                                        <select
                                            id="category"
                                            name="category"
                                            data-validation="required">

                                            <option value="">
                                                Select category
                                            </option>

                                            <option value="Milk">
                                                Milk
                                            </option>

                                            <option value="Ghee">
                                                Ghee
                                            </option>

                                            <option value="Paneer">
                                                Paneer
                                            </option>

                                            <option value="Curd">
                                                Curd
                                            </option>

                                            <option value="Butter">
                                                Butter
                                            </option>

                                            <option value="Feed">
                                                Feed
                                            </option>

                                            <option value="Minerals">
                                                Minerals
                                            </option>

                                            <option value="Supplements">
                                                Supplements
                                            </option>

                                            <option value="Medical Store">
                                                Medical Store
                                            </option>

                                            <option value="Equipment">
                                                Equipment
                                            </option>

                                        </select>

                                    </div>

                                    <span
                                        id="categoryError"
                                        class="error-message">
                                    </span>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="brand">
                                        Brand
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-tag"></i>

                                        <input
                                            type="text"
                                            id="brand"
                                            name="brand"
                                            placeholder="Enter brand name">

                                    </div>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="unit">
                                        Unit
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-rulers"></i>

                                        <select
                                            id="unit"
                                            name="unit"
                                            data-validation="required">

                                            <option value="">
                                                Select unit
                                            </option>

                                            <option value="Litre">
                                                Litre
                                            </option>

                                            <option value="Kg">
                                                Kg
                                            </option>

                                            <option value="Gram">
                                                Gram
                                            </option>

                                            <option value="Pack">
                                                Pack
                                            </option>

                                            <option value="Piece">
                                                Piece
                                            </option>

                                        </select>

                                    </div>

                                    <span
                                        id="unitError"
                                        class="error-message">
                                    </span>

                                </div>

                            </div>


                            <div class="col-12">

                                <div class="form-group">

                                    <label for="description">
                                        Description
                                    </label>

                                    <textarea
                                        id="description"
                                        name="description"
                                        rows="4"
                                        placeholder="Describe your product..."></textarea>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="form-section">

                        <div class="section-title">
                            <h2>Product Image</h2>
                            <p>Upload a clear image of your product.</p>
                        </div>


                        <div class="image-upload">

                            <label for="productImage" class="upload-box">

                                <i class="bi bi-cloud-arrow-up"></i>

                                <strong>
                                    Choose Product Image
                                </strong>

                                <span>
                                    JPG, JPEG or PNG · Maximum 2 MB
                                </span>

                            </label>

                            <input
                                type="file"
                                id="productImage"
                                name="productImage"
                                accept=".jpg,.jpeg,.png"
                                data-validation="required file filesize"
                                data-filesize="2048"
                                data-filetypes="jpg,jpeg,png">

                            <span
                                id="productImageError"
                                class="error-message">
                            </span>

                        </div>

                    </div>


                    <div class="form-section">

                        <div class="section-title">
                            <h2>Pricing & Stock</h2>
                            <p>Set the selling price and available quantity.</p>
                        </div>


                        <div class="row g-3">

                            <div class="col-md-4">

                                <div class="form-group">

                                    <label for="price">
                                        Selling Price
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-currency-rupee"></i>

                                        <input
                                            type="number"
                                            id="price"
                                            name="price"
                                            placeholder="Enter selling price"
                                            min="0"
                                            step="0.01"
                                            data-validation="required">

                                    </div>

                                    <span
                                        id="priceError"
                                        class="error-message">
                                    </span>

                                </div>

                            </div>


                            <div class="col-md-4">

                                <div class="form-group">

                                    <label for="originalPrice">
                                        Original Price
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-currency-rupee"></i>

                                        <input
                                            type="number"
                                            id="originalPrice"
                                            name="originalPrice"
                                            placeholder="Enter original price"
                                            min="0"
                                            step="0.01">

                                    </div>

                                </div>

                            </div>


                            <div class="col-md-4">

                                <div class="form-group">

                                    <label for="quantity">
                                        Available Quantity
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-boxes"></i>

                                        <input
                                            type="number"
                                            id="quantity"
                                            name="quantity"
                                            placeholder="Enter quantity"
                                            min="0"
                                            step="0.01"
                                            data-validation="required">

                                    </div>

                                    <span
                                        id="quantityError"
                                        class="error-message">
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="form-section">

                        <div class="section-title">
                            <h2>Seller & Delivery</h2>
                            <p>Provide seller and delivery information.</p>
                        </div>


                        <div class="row g-3">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="sellerName">
                                        Seller / Farm Name
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-shop"></i>

                                        <input
                                            type="text"
                                            id="sellerName"
                                            name="sellerName"
                                            placeholder="Enter seller or farm name"
                                            data-validation="required">

                                    </div>

                                    <span
                                        id="sellerNameError"
                                        class="error-message">
                                    </span>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="location">
                                        Location
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-geo-alt"></i>

                                        <input
                                            type="text"
                                            id="location"
                                            name="location"
                                            placeholder="City, State"
                                            data-validation="required">

                                    </div>

                                    <span
                                        id="locationError"
                                        class="error-message">
                                    </span>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="delivery">
                                        Delivery Information
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-truck"></i>

                                        <input
                                            type="text"
                                            id="delivery"
                                            name="delivery"
                                            placeholder="Example: Delivery in 2 days">

                                    </div>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="status">
                                        Product Status
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-check-circle"></i>

                                        <select
                                            id="status"
                                            name="status">

                                            <option value="Available">
                                                Available
                                            </option>

                                            <option value="Out of Stock">
                                                Out of Stock
                                            </option>

                                        </select>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="form-actions">

                        <a href="market.php" class="cancel-btn">
                            Cancel
                        </a>

                        <button type="submit" class="save-btn">
                            <i class="bi bi-check-lg"></i>
                            Add Product
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/add_product.js"></script>

</body>

</html>