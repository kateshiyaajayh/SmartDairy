<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milk Rates - SmartDairy Pro</title>
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
            <div class="page-header"><div><h1>Milk Rates</h1><p>Review current milk rates and recent rate history.</p></div></div>
            <div class="row g-4 module-summary">
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-currency-rupee"></i></span><div><span>Cow Milk Rate</span><h2>₹49.00</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-currency-rupee"></i></span><div><span>Buffalo Milk Rate</span><h2>₹73.00</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-percent"></i></span><div><span>Average Fat</span><h2>4.2%</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-calendar3"></i></span><div><span>Last Updated</span><h2>28 Sep</h2></div></div></div>
            </div>
            <div class="module-card">
                <div class="module-toolbar row g-3">
                    <div class="col-lg-8"><div class="module-search"><i class="bi bi-search"></i><input type="search" placeholder="Search milk rate" aria-label="Search milk rates"></div></div>
                    <div class="col-md-6 col-lg-4"><select class="form-select module-filter" data-filter="type"><option value="all">All Types</option><option value="cow">Cow</option><option value="buffalo">Buffalo</option></select></div>
                </div>
                <div class="table-responsive"><table class="table module-table">
                    <thead><tr><th>Date</th><th>Milk Type</th><th>Fat</th><th>SNF</th><th>Rate / Litre</th><th>Status</th><th>Action</th></tr></thead>
                    <tbody>
                        <tr data-search="cow milk 4.2 8.6 49" data-type="cow"><td>28 Sep 2026</td><td>Cow Milk</td><td>4.2%</td><td>8.6%</td><td>₹49.00</td><td><span class="status-badge active">Current</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="buffalo milk 4.4 8.8 73" data-type="buffalo"><td>28 Sep 2026</td><td>Buffalo Milk</td><td>4.4%</td><td>8.8%</td><td>₹73.00</td><td><span class="status-badge active">Current</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="cow milk 4.1 8.5 48" data-type="cow"><td>21 Sep 2026</td><td>Cow Milk</td><td>4.1%</td><td>8.5%</td><td>₹48.00</td><td><span class="status-badge completed">Previous</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="buffalo milk 4.3 8.7 71" data-type="buffalo"><td>21 Sep 2026</td><td>Buffalo Milk</td><td>4.3%</td><td>8.7%</td><td>₹71.00</td><td><span class="status-badge completed">Previous</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                    </tbody>
                </table></div>
                <div class="empty-message" id="noRecords">No milk rates found.</div>
            </div>
        </div>
    </main>
    <?php include "includes/admin_footer.php"; ?>
    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>
    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>
    <script src="/SmartDairy/admin/js/admin_records.js"></script>
</body>
</html>
