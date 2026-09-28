<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Milk Rates - SmartDairy Pro</title>

    <link
        rel="stylesheet"
        href="/SmartDairy/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/header.css">

    <link rel="stylesheet" href="css/footer.css">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <link
        rel="stylesheet"
        href="/SmartDairy/css/rates.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="rates-page">

        <div class="container-fluid">

            <div class="rates-header">

                <div>

                    <h1>Milk Rates</h1>

                    <p>
                        View current milk rates and rate history.
                    </p>

                </div>

            </div>

            <div class="row g-3 rates-summary">

                <div class="col-xl-3 col-md-6">

                    <div class="rate-summary-card">

                        <div class="summary-icon">

                            <i class="bi bi-droplet"></i>

                        </div>

                        <div>

                            <span>Cow Milk</span>

                            <h2>₹49.00</h2>

                            <small>Per litre</small>

                        </div>

                    </div>

                </div>

                <div class="col-xl-3 col-md-6">

                    <div class="rate-summary-card">

                        <div class="summary-icon">

                            <i class="bi bi-droplet-half"></i>

                        </div>

                        <div>

                            <span>Buffalo Milk</span>

                            <h2>₹73.00</h2>

                            <small>Per litre</small>

                        </div>

                    </div>

                </div>

                <div class="col-xl-3 col-md-6">

                    <div class="rate-summary-card">

                        <div class="summary-icon">

                            <i class="bi bi-percent"></i>

                        </div>

                        <div>

                            <span>Average Fat</span>

                            <h2>4.2%</h2>

                            <small>Current average</small>

                        </div>

                    </div>

                </div>

                <div class="col-xl-3 col-md-6">

                    <div class="rate-summary-card">

                        <div class="summary-icon">

                            <i class="bi bi-calendar3"></i>

                        </div>

                        <div>

                            <span>Updated On</span>

                            <h2>28 Sep</h2>

                            <small>2026</small>

                        </div>

                    </div>

                </div>

            </div>

            <div class="rates-content-card">

                <div class="rates-toolbar">

                    <div class="search-box">

                        <i class="bi bi-search"></i>

                        <input
                            type="text"
                            id="rateSearch"
                            placeholder="Search milk rate...">

                    </div>

                    <select
                        id="rateType"
                        class="form-select">

                        <option value="all">
                            All Milk Types
                        </option>

                        <option value="cow">
                            Cow Milk
                        </option>

                        <option value="buffalo">
                            Buffalo Milk
                        </option>

                    </select>

                    <select
                        id="rateDate"
                        class="form-select">

                        <option value="all">
                            All Dates
                        </option>

                        <option value="today">
                            Today
                        </option>

                        <option value="week">
                            This Week
                        </option>

                        <option value="month">
                            This Month
                        </option>

                    </select>

                </div>

                <div class="table-responsive">

                    <table class="table rates-table">

                        <thead>

                            <tr>

                                <th>Date</th>

                                <th>Milk Type</th>

                                <th>Fat</th>

                                <th>SNF</th>

                                <th>Rate / Litre</th>

                                <th>Status</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr
                                class="rate-row"
                                data-name="cow milk"
                                data-type="cow"
                                data-date="today">

                                <td>28 Sep 2026</td>

                                <td>
                                    <strong>Cow Milk</strong>
                                </td>

                                <td>4.0%</td>

                                <td>8.5%</td>

                                <td>
                                    <strong class="rate-value">
                                        ₹49.00
                                    </strong>
                                </td>

                                <td>
                                    <span class="current-badge">
                                        Current
                                    </span>
                                </td>

                            </tr>

                            <tr
                                class="rate-row"
                                data-name="buffalo milk"
                                data-type="buffalo"
                                data-date="today">

                                <td>28 Sep 2026</td>

                                <td>
                                    <strong>Buffalo Milk</strong>
                                </td>

                                <td>6.0%</td>

                                <td>9.0%</td>

                                <td>
                                    <strong class="rate-value">
                                        ₹73.00
                                    </strong>
                                </td>

                                <td>
                                    <span class="current-badge">
                                        Current
                                    </span>
                                </td>

                            </tr>

                            <tr
                                class="rate-row"
                                data-name="cow milk"
                                data-type="cow"
                                data-date="week">

                                <td>26 Sep 2026</td>

                                <td>
                                    <strong>Cow Milk</strong>
                                </td>

                                <td>4.1%</td>

                                <td>8.6%</td>

                                <td>
                                    ₹48.00
                                </td>

                                <td>
                                    <span class="previous-badge">
                                        Previous
                                    </span>
                                </td>

                            </tr>

                            <tr
                                class="rate-row"
                                data-name="buffalo milk"
                                data-type="buffalo"
                                data-date="week">

                                <td>26 Sep 2026</td>

                                <td>
                                    <strong>Buffalo Milk</strong>
                                </td>

                                <td>6.1%</td>

                                <td>9.1%</td>

                                <td>
                                    ₹72.00
                                </td>

                                <td>
                                    <span class="previous-badge">
                                        Previous
                                    </span>
                                </td>

                            </tr>

                            <tr
                                class="rate-row"
                                data-name="cow milk"
                                data-type="cow"
                                data-date="month">

                                <td>20 Sep 2026</td>

                                <td>
                                    <strong>Cow Milk</strong>
                                </td>

                                <td>4.0%</td>

                                <td>8.5%</td>

                                <td>
                                    ₹47.00
                                </td>

                                <td>
                                    <span class="previous-badge">
                                        Previous
                                    </span>
                                </td>

                            </tr>

                            <tr
                                class="rate-row"
                                data-name="buffalo milk"
                                data-type="buffalo"
                                data-date="month">

                                <td>20 Sep 2026</td>

                                <td>
                                    <strong>Buffalo Milk</strong>
                                </td>

                                <td>5.9%</td>

                                <td>8.9%</td>

                                <td>
                                    ₹70.00
                                </td>

                                <td>
                                    <span class="previous-badge">
                                        Previous
                                    </span>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

            <div class="rate-note">

                <i class="bi bi-info-circle"></i>

                <span>
                    Milk rates are based on milk type, fat and SNF
                    values. Current rates can be updated by the farm
                    administrator.
                </span>

            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>

    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>

    <script src="/SmartDairy/js/rates.js"></script>

</body>

</html>