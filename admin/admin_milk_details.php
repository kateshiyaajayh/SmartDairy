<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milk Collection Details - SmartDairy Pro</title>

    <link rel="stylesheet" href="/SmartDairy/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_header.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_sidebar.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_footer.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_layout.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_milk_details.css">
</head>

<body>

    <?php include "includes/admin_header.php"; ?>
    <?php include "includes/admin_sidebar.php"; ?>

    <main class="admin-page details-page">
        <div class="container-fluid">

            <div class="page-header">
                <div>
                    <h1>Milk Collection Details</h1>
                    <p>Collection record MILK-001</p>
                </div>
                <div class="page-actions">
                    <a href="#" class="edit-btn"><i class="bi bi-pencil"></i> Edit</a>
                    <button type="button" class="delete-btn"><i class="bi bi-trash"></i> Delete</button>
                </div>
            </div>

            <div class="details-card">
                <section class="detail-section">
                    <h2>Collection Information</h2>
                    <div class="row g-4">
                        <div class="col-sm-6 col-xl-3">
                            <div class="detail-item"><span>Collection ID</span><strong>MILK-001</strong></div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="detail-item"><span>Date</span><strong>28 Sep 2026</strong></div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="detail-item"><span>Farmer</span><strong>Rajesh Patel</strong></div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="detail-item"><span>Animal</span><strong>Gauri (AN-001)</strong></div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="detail-item"><span>Type</span><strong>Cow</strong></div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="detail-item"><span>Session</span><strong>Morning</strong></div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="detail-item"><span>Quantity</span><strong>86 L</strong></div>
                        </div>
                    </div>
                </section>

                <section class="detail-section">
                    <h2>Milk Quality</h2>
                    <div class="row g-4">
                        <div class="col-sm-6 col-xl-3">
                            <div class="detail-item"><span>Fat</span><strong>4.2%</strong></div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="detail-item"><span>SNF</span><strong>8.6%</strong></div>
                        </div>
                    </div>
                </section>

                <section class="detail-section">
                    <h2>Payment Information</h2>
                    <div class="row g-4">
                        <div class="col-sm-6 col-xl-3">
                            <div class="detail-item"><span>Rate</span><strong>₹49 per litre</strong></div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="detail-item"><span>Total Amount</span><strong>₹4,214</strong></div>
                        </div>
                    </div>
                </section>

                <section class="detail-section notes-section">
                    <h2>Notes</h2>
                    <p>Regular morning milk collection.</p>
                </section>

                <div class="form-actions">
                    <a href="admin_milk_collection.php" class="cancel-btn"><i class="bi bi-arrow-left"></i> Back to Milk Collection</a>
                </div>
            </div>

        </div>
    </main>

    <?php include "includes/admin_footer.php"; ?>
    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>
</body>

</html>