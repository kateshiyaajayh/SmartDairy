<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders - SmartDairy Pro</title>
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
            <div class="page-header"><div><h1>Orders</h1><p>Review marketplace orders and payment status.</p></div></div>
            <div class="row g-4 module-summary">
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-cart3"></i></span><div><span>Total Orders</span><h2>384</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-hourglass-split"></i></span><div><span>Pending</span><h2>18</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-arrow-repeat"></i></span><div><span>Processing</span><h2>26</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-check2-circle"></i></span><div><span>Completed</span><h2>340</h2></div></div></div>
            </div>
            <div class="module-card">
                <div class="module-toolbar row g-3">
                    <div class="col-lg-8"><div class="module-search"><i class="bi bi-search"></i><input type="search" placeholder="Search order ID or customer" aria-label="Search orders"></div></div>
                    <div class="col-md-6 col-lg-4"><select class="form-select module-filter" data-filter="status"><option value="all">All Status</option><option value="pending">Pending</option><option value="processing">Processing</option><option value="completed">Completed</option><option value="cancelled">Cancelled</option></select></div>
                </div>
                <div class="table-responsive"><table class="table module-table">
                    <thead><tr><th>Order</th><th>Date</th><th>Customer</th><th>Items</th><th>Total</th><th>Payment</th><th>Status</th><th>Action</th></tr></thead>
                    <tbody>
                        <tr data-search="ord-1001 rajesh patel" data-status="pending"><td>#ORD-1001</td><td>28 Sep 2026</td><td>Rajesh Patel</td><td>2</td><td>₹1,480</td><td>Cash on Delivery</td><td><span class="status-badge pending">Pending</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="ord-1002 mehul shah" data-status="completed"><td>#ORD-1002</td><td>27 Sep 2026</td><td>Mehul Shah</td><td>3</td><td>₹2,250</td><td>UPI</td><td><span class="status-badge completed">Completed</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="ord-1003 kiran joshi" data-status="processing"><td>#ORD-1003</td><td>27 Sep 2026</td><td>Kiran Joshi</td><td>1</td><td>₹860</td><td>UPI</td><td><span class="status-badge processing">Processing</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="ord-1004 amit parmar" data-status="cancelled"><td>#ORD-1004</td><td>26 Sep 2026</td><td>Amit Parmar</td><td>2</td><td>₹1,240</td><td>Cash on Delivery</td><td><span class="status-badge cancelled">Cancelled</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                    </tbody>
                </table></div>
                <div class="empty-message" id="noRecords">No orders found.</div>
            </div>
        </div>
    </main>
    <?php include "includes/admin_footer.php"; ?>
    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>
    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>
    <script src="/SmartDairy/admin/js/admin_records.js"></script>
</body>
</html>
