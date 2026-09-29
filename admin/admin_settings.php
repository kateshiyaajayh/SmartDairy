<?php
require_once __DIR__ . "/includes/admin_auth.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - SmartDairy Pro</title>
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
            <div class="page-header"><div><h1>Settings</h1><p>Manage SmartDairy Pro system preferences.</p></div></div>
            <form class="module-card module-form" method="POST">
                <section class="settings-section">
                    <h2>Farm Information</h2>
                    <div class="row g-3">
                        <div class="col-md-6"><label for="farmName" class="form-label">Organization Name</label><input class="form-control" id="farmName" name="farmName" value="SmartDairy Pro"></div>
                        <div class="col-md-6"><label for="contactEmail" class="form-label">Contact Email</label><input type="email" class="form-control" id="contactEmail" name="contactEmail" value="admin@smartdairy.in"></div>
                        <div class="col-md-6"><label for="contactPhone" class="form-label">Contact Phone</label><input type="tel" class="form-control" id="contactPhone" name="contactPhone" value="+91 98765 43210"></div>
                        <div class="col-md-6"><label for="timezone" class="form-label">Timezone</label><select class="form-select" id="timezone" name="timezone"><option selected>Asia/Kolkata (IST)</option><option>UTC</option></select></div>
                    </div>
                </section>
                <section class="settings-section">
                    <h2>Notifications</h2>
                    <div class="form-check mb-2"><input class="form-check-input" type="checkbox" id="orderAlerts" checked><label class="form-check-label" for="orderAlerts">Order updates</label></div>
                    <div class="form-check mb-2"><input class="form-check-input" type="checkbox" id="appointmentAlerts" checked><label class="form-check-label" for="appointmentAlerts">Veterinary appointment requests</label></div>
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="healthAlerts" checked><label class="form-check-label" for="healthAlerts">Animal health alerts</label></div>
                </section>
                <section class="settings-section">
                    <h2>Application Preferences</h2>
                    <div class="row g-3">
                        <div class="col-md-6"><label for="currency" class="form-label">Currency</label><select class="form-select" id="currency" name="currency"><option selected>Indian Rupee (₹)</option></select></div>
                        <div class="col-md-6"><label for="dateFormat" class="form-label">Date Format</label><select class="form-select" id="dateFormat" name="dateFormat"><option selected>DD MMM YYYY</option><option>YYYY-MM-DD</option></select></div>
                    </div>
                </section>
                <div class="module-actions"><button type="reset" class="btn btn-outline-secondary">Reset</button><button type="submit" class="btn btn-success">Save Settings</button></div>
            </form>
        </div>
    </main>
    <?php include "includes/admin_footer.php"; ?>
    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>
</body>
</html>
