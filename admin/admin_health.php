<?php
require_once __DIR__ . "/includes/admin_auth.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Records - SmartDairy Pro</title>
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
            <div class="page-header"><div><h1>Health Records</h1><p>Review animal health, treatment and vaccination records.</p></div></div>
            <div class="row g-4 module-summary">
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-heart-pulse"></i></span><div><span>Total Records</span><h2>124</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-clipboard2-pulse"></i></span><div><span>Under Treatment</span><h2>12</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-shield-plus"></i></span><div><span>Vaccination Due</span><h2>8</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-calendar-check"></i></span><div><span>Checkup Due</span><h2>5</h2></div></div></div>
            </div>
            <div class="module-card">
                <div class="module-toolbar row g-3">
                    <div class="col-lg-6"><div class="module-search"><i class="bi bi-search"></i><input type="search" placeholder="Search animal, farmer or health record" aria-label="Search health records"></div></div>
                    <div class="col-md-6 col-lg-3"><select class="form-select module-filter" data-filter="type"><option value="all">All Types</option><option value="cow">Cow</option><option value="buffalo">Buffalo</option></select></div>
                    <div class="col-md-6 col-lg-3"><select class="form-select module-filter" data-filter="status"><option value="all">All Status</option><option value="under treatment">Under Treatment</option><option value="vaccination due">Vaccination Due</option><option value="checkup due">Checkup Due</option><option value="healthy">Healthy</option></select></div>
                </div>
                <div class="table-responsive"><table class="table module-table">
                    <thead><tr><th>Date</th><th>Animal</th><th>Farmer</th><th>Record Type</th><th>Issue</th><th>Veterinarian</th><th>Status</th><th>Action</th></tr></thead>
                    <tbody>
                        <tr data-search="cow 001 an-001 rajesh patel fever dr patel" data-type="cow" data-status="under treatment"><td>28 Sep 2026</td><td>Cow #001</td><td>Rajesh Patel</td><td>Treatment</td><td>Fever</td><td>Dr. Rajesh Patel</td><td><span class="status-badge under-review">Under Treatment</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="buffalo 002 an-002 mehul shah vaccination due dr shah" data-type="buffalo" data-status="vaccination due"><td>27 Sep 2026</td><td>Buffalo #002</td><td>Mehul Shah</td><td>Vaccination</td><td>Routine vaccination</td><td>Dr. Mehul Shah</td><td><span class="status-badge pending">Vaccination Due</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="cow 003 an-003 kiran joshi checkup due dr joshi" data-type="cow" data-status="checkup due"><td>26 Sep 2026</td><td>Cow #003</td><td>Kiran Joshi</td><td>Checkup</td><td>Routine checkup</td><td>Dr. Kiran Joshi</td><td><span class="status-badge pending">Checkup Due</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="buffalo 004 an-004 amit parmar healthy dr patel" data-type="buffalo" data-status="healthy"><td>25 Sep 2026</td><td>Buffalo #004</td><td>Amit Parmar</td><td>Checkup</td><td>General checkup</td><td>Dr. Rajesh Patel</td><td><span class="status-badge healthy">Healthy</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                    </tbody>
                </table></div>
                <div class="empty-message" id="noRecords">No health records found.</div>
            </div>
        </div>
    </main>
    <?php include "includes/admin_footer.php"; ?>
    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>
    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>
    <script src="/SmartDairy/admin/js/admin_records.js"></script>
</body>
</html>
