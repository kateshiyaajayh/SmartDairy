<?php
require_once __DIR__ . "/includes/admin_auth.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinarians - SmartDairy Pro</title>
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
            <div class="page-header"><div><h1>Veterinarians</h1><p>Manage veterinary professionals and their availability.</p></div></div>
            <div class="row g-4 module-summary">
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-person-badge"></i></span><div><span>Total Veterinarians</span><h2>18</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-check-circle"></i></span><div><span>Available</span><h2>14</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-calendar-check"></i></span><div><span>On Appointment</span><h2>3</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-heart-pulse"></i></span><div><span>Specialties</span><h2>6</h2></div></div></div>
            </div>
            <div class="module-card">
                <div class="module-toolbar row g-3">
                    <div class="col-lg-8"><div class="module-search"><i class="bi bi-search"></i><input type="search" placeholder="Search veterinarian or specialization" aria-label="Search veterinarians"></div></div>
                    <div class="col-md-6 col-lg-4"><select class="form-select module-filter" data-filter="status"><option value="all">All Availability</option><option value="available">Available</option><option value="on appointment">On Appointment</option><option value="inactive">Inactive</option></select></div>
                </div>
                <div class="table-responsive"><table class="table module-table">
                    <thead><tr><th>Veterinarian</th><th>Specialization</th><th>Experience</th><th>Phone</th><th>Location</th><th>Availability</th><th>Action</th></tr></thead>
                    <tbody>
                        <tr data-search="dr rajesh patel animal nutrition dairy" data-status="available"><td><div class="module-name"><span class="module-icon"><i class="bi bi-person"></i></span>Dr. Rajesh Patel</div></td><td>Animal Nutrition</td><td>12 years</td><td>+91 98765 43210</td><td>Rajkot</td><td><span class="status-badge available">Available</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="dr mehul shah veterinary medicine" data-status="on appointment"><td><div class="module-name"><span class="module-icon"><i class="bi bi-person"></i></span>Dr. Mehul Shah</div></td><td>Veterinary Medicine</td><td>8 years</td><td>+91 98250 12345</td><td>Gondal</td><td><span class="status-badge confirmed">On Appointment</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="dr kiran joshi animal surgery dairy" data-status="available"><td><div class="module-name"><span class="module-icon"><i class="bi bi-person"></i></span>Dr. Kiran Joshi</div></td><td>Animal Surgery</td><td>10 years</td><td>+91 99040 12345</td><td>Jetpur</td><td><span class="status-badge available">Available</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="dr amit parmar livestock health" data-status="inactive"><td><div class="module-name"><span class="module-icon"><i class="bi bi-person"></i></span>Dr. Amit Parmar</div></td><td>Livestock Health</td><td>5 years</td><td>+91 97120 12345</td><td>Rajkot</td><td><span class="status-badge inactive">Inactive</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                    </tbody>
                </table></div>
                <div class="empty-message" id="noRecords">No veterinarians found.</div>
            </div>
        </div>
    </main>
    <?php include "includes/admin_footer.php"; ?>
    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>
    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>
    <script src="/SmartDairy/admin/js/admin_records.js"></script>
</body>
</html>
