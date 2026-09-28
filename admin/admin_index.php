<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard - SmartDairy Pro</title>

    <link
        rel="stylesheet"
        href="/SmartDairy/css/bootstrap.min.css">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/admin/css/admin_header.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/admin/css/admin_sidebar.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/admin/css/admin_footer.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/admin/css/admin_dashboard.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/admin/css/admin_layout.css">

</head>

<body>

    <?php include "includes/admin_header.php"; ?>

    <?php include "includes/admin_sidebar.php"; ?>

    <main class="admin-page">

        <div class="container-fluid">

            <div class="page-header">

                <div>

                    <h1>
                        Dashboard
                    </h1>

                    <p>
                        Overview of your SmartDairy Pro system.
                    </p>

                </div>

                <div class="date-box">

                    <i class="bi bi-calendar3"></i>

                    <span>
                        <?= date('j F Y') ?>
                    </span>

                </div>

            </div>

            <div class="row g-4">

                <div class="col-md-6 col-xl-3">

                    <div class="summary-card">

                        <div class="summary-icon">

                            <i class="bi bi-person"></i>

                        </div>

                        <div>

                            <span>
                                Total Farmers
                            </span>

                            <h2>
                                156
                            </h2>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-xl-3">

                    <div class="summary-card">

                        <div class="summary-icon">

                            <i class="bi bi-grid-3x3-gap"></i>

                        </div>

                        <div>

                            <span>
                                Total Animals
                            </span>

                            <h2>
                                482
                            </h2>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-xl-3">

                    <div class="summary-card">

                        <div class="summary-icon">

                            <i class="bi bi-droplet"></i>

                        </div>

                        <div>

                            <span>
                                Today's Milk
                            </span>

                            <h2>
                                1,248 L
                            </h2>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-xl-3">

                    <div class="summary-card">

                        <div class="summary-icon">

                            <i class="bi bi-cart3"></i>

                        </div>

                        <div>

                            <span>
                                Today's Orders
                            </span>

                            <h2>
                                38
                            </h2>

                        </div>

                    </div>

                </div>

            </div>

            <div class="row g-4 dashboard-row">

                <div class="col-lg-8">

                    <div class="dashboard-card">

                        <div class="card-header">

                            <div>

                                <h2>
                                    Milk Collection Overview
                                </h2>

                                <p>
                                    Recent milk collection summary.
                                </p>

                            </div>

                            <a
                                href="admin_milk_collection.php"
                                class="view-link">

                                View All

                            </a>

                        </div>

                        <div class="table-responsive">

                            <table class="table dashboard-table">

                                <thead>

                                    <tr>

                                        <th>
                                            Date
                                        </th>

                                        <th>
                                            Farmer
                                        </th>

                                        <th>
                                            Quantity
                                        </th>

                                        <th>
                                            Fat
                                        </th>

                                        <th>
                                            Amount
                                        </th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>

                                        <td>
                                            28 Sep 2026
                                        </td>

                                        <td>
                                            Rajesh Patel
                                        </td>

                                        <td>
                                            86 L
                                        </td>

                                        <td>
                                            4.2%
                                        </td>

                                        <td>
                                            ₹4,214
                                        </td>

                                    </tr>

                                    <tr>

                                        <td>
                                            28 Sep 2026
                                        </td>

                                        <td>
                                            Mehul Shah
                                        </td>

                                        <td>
                                            72 L
                                        </td>

                                        <td>
                                            4.4%
                                        </td>

                                        <td>
                                            ₹3,528
                                        </td>

                                    </tr>

                                    <tr>

                                        <td>
                                            27 Sep 2026
                                        </td>

                                        <td>
                                            Kiran Joshi
                                        </td>

                                        <td>
                                            65 L
                                        </td>

                                        <td>
                                            4.1%
                                        </td>

                                        <td>
                                            ₹3,185
                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="dashboard-card">

                        <div class="card-header">

                            <div>

                                <h2>
                                    Animal Overview
                                </h2>

                                <p>
                                    Animal type summary.
                                </p>

                            </div>

                            <a
                                href="admin_animals.php"
                                class="view-link">

                                View All

                            </a>

                        </div>

                        <div class="animal-summary">

                            <div class="animal-item">

                                <div class="animal-info">

                                    <span class="animal-icon">

                                        <i class="bi bi-grid-3x3-gap"></i>

                                    </span>

                                    <div>

                                        <strong>
                                            Cows
                                        </strong>

                                        <small>
                                            Registered animals
                                        </small>

                                    </div>

                                </div>

                                <strong>
                                    286
                                </strong>

                            </div>

                            <div class="animal-item">

                                <div class="animal-info">

                                    <span class="animal-icon">

                                        <i class="bi bi-grid-3x3-gap"></i>

                                    </span>

                                    <div>

                                        <strong>
                                            Buffaloes
                                        </strong>

                                        <small>
                                            Registered animals
                                        </small>

                                    </div>

                                </div>

                                <strong>
                                    196
                                </strong>

                            </div>

                            <div class="animal-item">

                                <div class="animal-info">

                                    <span class="animal-icon">

                                        <i class="bi bi-heart-pulse"></i>

                                    </span>

                                    <div>

                                        <strong>
                                            Under Treatment
                                        </strong>

                                        <small>
                                            Health records
                                        </small>

                                    </div>

                                </div>

                                <strong>
                                    12
                                </strong>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="row g-4 dashboard-row">

                <div class="col-lg-6">

                    <div class="dashboard-card">

                        <div class="card-header">

                            <div>

                                <h2>
                                    Recent Orders
                                </h2>

                                <p>
                                    Latest marketplace orders.
                                </p>

                            </div>

                            <a
                                href="admin_orders.php"
                                class="view-link">

                                View All

                            </a>

                        </div>

                        <div class="order-list">

                            <div class="order-item">

                                <div>

                                    <strong>
                                        #ORD-1001
                                    </strong>

                                    <span>
                                        Rajesh Patel
                                    </span>

                                </div>

                                <div>

                                    <strong>
                                        ₹1,480
                                    </strong>

                                    <span class="status-badge pending">
                                        Pending
                                    </span>

                                </div>

                            </div>

                            <div class="order-item">

                                <div>

                                    <strong>
                                        #ORD-1002
                                    </strong>

                                    <span>
                                        Mehul Shah
                                    </span>

                                </div>

                                <div>

                                    <strong>
                                        ₹2,250
                                    </strong>

                                    <span class="status-badge completed">
                                        Completed
                                    </span>

                                </div>

                            </div>

                            <div class="order-item">

                                <div>

                                    <strong>
                                        #ORD-1003
                                    </strong>

                                    <span>
                                        Kiran Joshi
                                    </span>

                                </div>

                                <div>

                                    <strong>
                                        ₹860
                                    </strong>

                                    <span class="status-badge processing">
                                        Processing
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="dashboard-card">

                        <div class="card-header">

                            <div>

                                <h2>
                                    Pending Activities
                                </h2>

                                <p>
                                    Items that need admin attention.
                                </p>

                            </div>

                        </div>

                        <div class="activity-list">

                            <a
                                href="admin_products.php"
                                class="activity-item">

                                <span class="activity-icon">

                                    <i class="bi bi-box-seam"></i>

                                </span>

                                <div>

                                    <strong>
                                        Product Approvals
                                    </strong>

                                    <span>
                                        7 products waiting for approval.
                                    </span>

                                </div>

                                <i class="bi bi-chevron-right"></i>

                            </a>

                            <a
                                href="admin_appointments.php"
                                class="activity-item">

                                <span class="activity-icon">

                                    <i class="bi bi-calendar-check"></i>

                                </span>

                                <div>

                                    <strong>
                                        Appointments
                                    </strong>

                                    <span>
                                        5 appointments need attention.
                                    </span>

                                </div>

                                <i class="bi bi-chevron-right"></i>

                            </a>

                            <a
                                href="admin_health.php"
                                class="activity-item">

                                <span class="activity-icon">

                                    <i class="bi bi-heart-pulse"></i>

                                </span>

                                <div>

                                    <strong>
                                        Health Records
                                    </strong>

                                    <span>
                                        4 health records need review.
                                    </span>

                                </div>

                                <i class="bi bi-chevron-right"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

    <?php include "includes/admin_footer.php"; ?>

    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>

    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>

    <script src="/SmartDairy/admin/js/admin_dashboard.js"></script>

</body>

</html>
