<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - SmartDairy Pro</title>
    <link rel="stylesheet" href="/SmartDairy/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_header.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_sidebar.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_footer.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_layout.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_module.css">
</head>
<body>
    <?php include "includes/admin_header.php"; ?>
    <?php include "includes/admin_sidebar.php"; ?>
    <main class="admin-page">
        <div class="container-fluid">
            <div class="page-header"><div><h1>Products</h1><p>Review marketplace products and seller listings.</p></div></div>
            <div class="row g-4 module-summary">
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-box-seam"></i></span><div><span>Total Products</span><h2>86</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-hourglass-split"></i></span><div><span>Pending Review</span><h2>7</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-check-circle"></i></span><div><span>Active Listings</span><h2>72</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-exclamation-circle"></i></span><div><span>Low Stock</span><h2>4</h2></div></div></div>
            </div>
            <div class="module-card">
                <div class="module-toolbar row g-3">
                    <div class="col-lg-6"><div class="module-search"><i class="bi bi-search"></i><input type="search" placeholder="Search product or seller" aria-label="Search products"></div></div>
                    <div class="col-md-6 col-lg-3"><select class="form-select module-filter" data-filter="category"><option value="all">All Categories</option><option value="milk">Milk</option><option value="ghee">Ghee</option><option value="feed">Feed</option></select></div>
                    <div class="col-md-6 col-lg-3"><select class="form-select module-filter" data-filter="status"><option value="all">All Status</option><option value="active">Active</option><option value="pending">Pending Review</option><option value="inactive">Inactive</option></select></div>
                </div>
                <div class="table-responsive"><table class="table module-table">
                    <thead><tr><th>Product</th><th>Category</th><th>Seller</th><th>Price</th><th>Stock</th><th>Added</th><th>Status</th><th>Action</th></tr></thead>
                    <tbody>
                        <tr data-search="farm fresh cow milk rajesh dairy farm" data-category="milk" data-status="active"><td><div class="module-name"><span class="module-icon"><i class="bi bi-droplet"></i></span>Farm Fresh Cow Milk</div></td><td>Milk</td><td>Rajesh Dairy Farm</td><td>₹49 / L</td><td>120 L</td><td>24 Sep 2026</td><td><span class="status-badge active">Active</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="buffalo milk rich mehul dairy" data-category="milk" data-status="pending"><td><div class="module-name"><span class="module-icon"><i class="bi bi-droplet"></i></span>Buffalo Milk (Rich)</div></td><td>Milk</td><td>Mehul Dairy</td><td>₹73 / L</td><td>65 L</td><td>26 Sep 2026</td><td><span class="status-badge pending">Pending Review</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="desi cow a2 ghee kiran farms" data-category="ghee" data-status="active"><td><div class="module-name"><span class="module-icon"><i class="bi bi-box-seam"></i></span>Desi Cow A2 Ghee</div></td><td>Ghee</td><td>Kiran Farms</td><td>₹850 / kg</td><td>18 kg</td><td>22 Sep 2026</td><td><span class="status-badge active">Active</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="cattle feed amit farm" data-category="feed" data-status="inactive"><td><div class="module-name"><span class="module-icon"><i class="bi bi-box-seam"></i></span>Cattle Feed</div></td><td>Feed</td><td>Amit Farm</td><td>₹620 / bag</td><td>0 bags</td><td>20 Sep 2026</td><td><span class="status-badge inactive">Inactive</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                    </tbody>
                </table></div>
                <div class="empty-message" id="noRecords">No products found.</div>
            </div>
        </div>
    </main>
    <?php include "includes/admin_footer.php"; ?>
    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>
    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>
    <script src="/SmartDairy/admin/js/admin_records.js"></script>
</body>
</html>
