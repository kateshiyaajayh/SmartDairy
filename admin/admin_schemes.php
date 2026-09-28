<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schemes - SmartDairy Pro</title>
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
            <div class="page-header"><div><h1>Schemes</h1><p>Review government and dairy schemes available to farmers.</p></div></div>
            <div class="row g-4 module-summary">
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-file-earmark-text"></i></span><div><span>Total Schemes</span><h2>24</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-unlock"></i></span><div><span>Open</span><h2>9</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-hourglass-split"></i></span><div><span>Under Review</span><h2>16</h2></div></div></div>
                <div class="col-md-6 col-xl-3"><div class="summary-card"><span class="summary-icon"><i class="bi bi-lock"></i></span><div><span>Closed</span><h2>5</h2></div></div></div>
            </div>
            <div class="module-card">
                <div class="module-toolbar row g-3">
                    <div class="col-lg-8"><div class="module-search"><i class="bi bi-search"></i><input type="search" placeholder="Search scheme or provider" aria-label="Search schemes"></div></div>
                    <div class="col-md-6 col-lg-4"><select class="form-select module-filter" data-filter="status"><option value="all">All Status</option><option value="open">Open</option><option value="under review">Under Review</option><option value="closed">Closed</option></select></div>
                </div>
                <div class="table-responsive"><table class="table module-table">
                    <thead><tr><th>Scheme</th><th>Category</th><th>Provider</th><th>Last Date</th><th>Applications</th><th>Status</th><th>Action</th></tr></thead>
                    <tbody>
                        <tr data-search="dairy entrepreneurship development scheme government of india" data-status="open"><td><div class="module-name"><span class="module-icon"><i class="bi bi-file-earmark-text"></i></span>Dairy Entrepreneurship Development Scheme</div></td><td>Business Support</td><td>Government of India</td><td>31 Dec 2026</td><td>42</td><td><span class="status-badge open">Open</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="animal husbandry infrastructure development fund dahd" data-status="under review"><td><div class="module-name"><span class="module-icon"><i class="bi bi-file-earmark-text"></i></span>Animal Husbandry Infrastructure Fund</div></td><td>Infrastructure</td><td>DAHD</td><td>15 Nov 2026</td><td>16</td><td><span class="status-badge under-review">Under Review</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="kisan credit card animal husbandry banking" data-status="open"><td><div class="module-name"><span class="module-icon"><i class="bi bi-file-earmark-text"></i></span>Kisan Credit Card for Animal Husbandry</div></td><td>Credit</td><td>Participating Banks</td><td>31 Mar 2027</td><td>58</td><td><span class="status-badge open">Open</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                        <tr data-search="gujarat dairy subsidy scheme gujarat government" data-status="closed"><td><div class="module-name"><span class="module-icon"><i class="bi bi-file-earmark-text"></i></span>Gujarat Dairy Subsidy Scheme</div></td><td>Subsidy</td><td>Government of Gujarat</td><td>31 Aug 2026</td><td>31</td><td><span class="status-badge expired">Closed</span></td><td><a href="#" class="view-btn">View</a></td></tr>
                    </tbody>
                </table></div>
                <div class="empty-message" id="noRecords">No schemes found.</div>
            </div>
        </div>
    </main>
    <?php include "includes/admin_footer.php"; ?>
    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>
    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>
    <script src="/SmartDairy/admin/js/admin_records.js"></script>
</body>
</html>
