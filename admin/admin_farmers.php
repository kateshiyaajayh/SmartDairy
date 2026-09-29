<?php
require_once __DIR__ . "/includes/admin_auth.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Farmers - SmartDairy Pro</title>

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
        href="/SmartDairy/admin/css/admin_farmers.css">

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
                        Farmers
                    </h1>

                    <p>
                        Manage registered farmers and their account information.
                    </p>

                </div>

                <div class="date-box">

                    <i class="bi bi-person-plus"></i>

                    <span>
                        156 Registered
                    </span>

                </div>

            </div>

            <div class="row g-4 farmer-summary">

                <div class="col-md-6 col-xl-3">

                    <div class="summary-card">

                        <div class="summary-icon">

                            <i class="bi bi-people"></i>

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

                            <i class="bi bi-person-check"></i>

                        </div>

                        <div>

                            <span>
                                Active Farmers
                            </span>

                            <h2>
                                148
                            </h2>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-xl-3">

                    <div class="summary-card">

                        <div class="summary-icon">

                            <i class="bi bi-person-plus"></i>

                        </div>

                        <div>

                            <span>
                                New This Month
                            </span>

                            <h2>
                                12
                            </h2>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-xl-3">

                    <div class="summary-card">

                        <div class="summary-icon">

                            <i class="bi bi-person-x"></i>

                        </div>

                        <div>

                            <span>
                                Inactive Farmers
                            </span>

                            <h2>
                                8
                            </h2>

                        </div>

                    </div>

                </div>

            </div>

            <div class="content-card">

                <div class="toolbar">

                    <div class="search-box">

                        <i class="bi bi-search"></i>

                        <input
                            type="text"
                            id="farmerSearch"
                            placeholder="Search farmer by name, mobile or email">

                    </div>

                    <select
                        id="farmerStatus"
                        class="form-select">

                        <option value="all">
                            All Status
                        </option>

                        <option value="active">
                            Active
                        </option>

                        <option value="inactive">
                            Inactive
                        </option>

                    </select>

                </div>

                <div class="table-responsive">

                    <table class="table farmer-table">

                        <thead>

                            <tr>

                                <th>
                                    Farmer
                                </th>

                                <th>
                                    Mobile
                                </th>

                                <th>
                                    Email
                                </th>

                                <th>
                                    Village
                                </th>

                                <th>
                                    District
                                </th>

                                <th>
                                    Joined
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Action
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr
                                data-name="Rajesh Patel"
                                data-mobile="9876543210"
                                data-email="rajesh@example.com"
                                data-status="active">

                                <td>

                                    <div class="farmer-name">

                                        <span class="farmer-icon">

                                            <i class="bi bi-person"></i>

                                        </span>

                                        <div>

                                            <strong>
                                                Rajesh Patel
                                            </strong>

                                            <small>
                                                Farmer #FR-001
                                            </small>

                                        </div>

                                    </div>

                                </td>

                                <td>
                                    +91 98765 43210
                                </td>

                                <td>
                                    rajesh@example.com
                                </td>

                                <td>
                                    Gondal
                                </td>

                                <td>
                                    Rajkot
                                </td>

                                <td>
                                    12 Jan 2026
                                </td>

                                <td>

                                    <span class="status active">
                                        Active
                                    </span>

                                </td>

                                <td>

                                    <a
                                        href="#"
                                        class="view-btn">

                                        View

                                    </a>

                                </td>

                            </tr>

                            <tr
                                data-name="Mehul Shah"
                                data-mobile="9825012345"
                                data-email="mehul@example.com"
                                data-status="active">

                                <td>

                                    <div class="farmer-name">

                                        <span class="farmer-icon">

                                            <i class="bi bi-person"></i>

                                        </span>

                                        <div>

                                            <strong>
                                                Mehul Shah
                                            </strong>

                                            <small>
                                                Farmer #FR-002
                                            </small>

                                        </div>

                                    </div>

                                </td>

                                <td>
                                    +91 98250 12345
                                </td>

                                <td>
                                    mehul@example.com
                                </td>

                                <td>
                                    Rajkot
                                </td>

                                <td>
                                    Rajkot
                                </td>

                                <td>
                                    18 Feb 2026
                                </td>

                                <td>

                                    <span class="status active">
                                        Active
                                    </span>

                                </td>

                                <td>

                                    <a
                                        href="#"
                                        class="view-btn">

                                        View

                                    </a>

                                </td>

                            </tr>

                            <tr
                                data-name="Kiran Joshi"
                                data-mobile="9904012345"
                                data-email="kiran@example.com"
                                data-status="active">

                                <td>

                                    <div class="farmer-name">

                                        <span class="farmer-icon">

                                            <i class="bi bi-person"></i>

                                        </span>

                                        <div>

                                            <strong>
                                                Kiran Joshi
                                            </strong>

                                            <small>
                                                Farmer #FR-003
                                            </small>

                                        </div>

                                    </div>

                                </td>

                                <td>
                                    +91 99040 12345
                                </td>

                                <td>
                                    kiran@example.com
                                </td>

                                <td>
                                    Gondal
                                </td>

                                <td>
                                    Rajkot
                                </td>

                                <td>
                                    05 Mar 2026
                                </td>

                                <td>

                                    <span class="status active">
                                        Active
                                    </span>

                                </td>

                                <td>

                                    <a
                                        href="#"
                                        class="view-btn">

                                        View

                                    </a>

                                </td>

                            </tr>

                            <tr
                                data-name="Amit Parmar"
                                data-mobile="9712012345"
                                data-email="amit@example.com"
                                data-status="inactive">

                                <td>

                                    <div class="farmer-name">

                                        <span class="farmer-icon">

                                            <i class="bi bi-person"></i>

                                        </span>

                                        <div>

                                            <strong>
                                                Amit Parmar
                                            </strong>

                                            <small>
                                                Farmer #FR-004
                                            </small>

                                        </div>

                                    </div>

                                </td>

                                <td>
                                    +91 97120 12345
                                </td>

                                <td>
                                    amit@example.com
                                </td>

                                <td>
                                    Jetpur
                                </td>

                                <td>
                                    Rajkot
                                </td>

                                <td>
                                    21 Apr 2026
                                </td>

                                <td>

                                    <span class="status inactive">
                                        Inactive
                                    </span>

                                </td>

                                <td>

                                    <a
                                        href="#"
                                        class="view-btn">

                                        View

                                    </a>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

                <div
                    class="empty-message"
                    id="noFarmers">

                    No farmers found.

                </div>

            </div>

        </div>

    </main>

    <?php include "includes/admin_footer.php"; ?>

    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>

    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>

    <script src="/SmartDairy/admin/js/admin_farmers.js"></script>

</body>

</html>