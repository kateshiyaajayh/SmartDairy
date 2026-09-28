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

    <title>Government Schemes - SmartDairy Pro</title>

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
        href="/SmartDairy/css/schemes.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="schemes-page">

        <div class="container-fluid">

            <div class="schemes-header">

                <div>

                    <h1>Government & Dairy Schemes</h1>

                    <p>
                        Find government schemes and financial support
                        available for dairy farmers.
                    </p>

                </div>

            </div>

            <div class="schemes-toolbar">

                <div class="search-box">

                    <i class="bi bi-search"></i>

                    <input
                        type="text"
                        id="schemeSearch"
                        placeholder="Search schemes...">

                </div>

                <select
                    id="schemeCategory"
                    class="form-select">

                    <option value="all">
                        All Categories
                    </option>

                    <option value="dairy">
                        Dairy Farming
                    </option>

                    <option value="livestock">
                        Livestock
                    </option>

                    <option value="loan">
                        Loan & Finance
                    </option>

                    <option value="subsidy">
                        Subsidy
                    </option>

                </select>

                <select
                    id="schemeState"
                    class="form-select">

                    <option value="all">
                        All States
                    </option>

                    <option value="gujarat">
                        Gujarat
                    </option>

                    <option value="central">
                        Central Government
                    </option>

                </select>

            </div>

            <div
                class="row g-4"
                id="schemeGrid">

                <div
                    class="col-xl-4 col-md-6 scheme-column"
                    data-name="dairy entrepreneurship development scheme"
                    data-category="dairy"
                    data-state="central">

                    <div class="scheme-card">

                        <div class="scheme-card-top">

                            <div class="scheme-icon">

                                <i class="bi bi-building"></i>

                            </div>

                            <span class="scheme-status">
                                Active
                            </span>

                        </div>

                        <h2>
                            Dairy Entrepreneurship Development Scheme
                        </h2>

                        <p class="scheme-department">
                            Department of Animal Husbandry
                        </p>

                        <p class="scheme-description">
                            Financial support for setting up and
                            improving dairy farming activities.
                        </p>

                        <div class="scheme-info">

                            <div>

                                <span>Category</span>

                                <strong>Dairy Farming</strong>

                            </div>

                            <div>

                                <span>Location</span>

                                <strong>Central Government</strong>

                            </div>

                            <div>

                                <span>Benefit</span>

                                <strong>Financial Assistance</strong>

                            </div>

                            <div>

                                <span>Last Date</span>

                                <strong>31 Dec 2026</strong>

                            </div>

                        </div>

                        <a
                            href="scheme_details.php?id=1"
                            class="scheme-btn">

                            View Details

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

                <div
                    class="col-xl-4 col-md-6 scheme-column"
                    data-name="animal husbandry infrastructure development fund"
                    data-category="livestock"
                    data-state="central">

                    <div class="scheme-card">

                        <div class="scheme-card-top">

                            <div class="scheme-icon">

                                <i class="bi bi-house-gear"></i>

                            </div>

                            <span class="scheme-status">
                                Active
                            </span>

                        </div>

                        <h2>
                            Animal Husbandry Infrastructure Development Fund
                        </h2>

                        <p class="scheme-department">
                            Department of Animal Husbandry
                        </p>

                        <p class="scheme-description">
                            Support for infrastructure development
                            in livestock and dairy-related activities.
                        </p>

                        <div class="scheme-info">

                            <div>

                                <span>Category</span>

                                <strong>Livestock</strong>

                            </div>

                            <div>

                                <span>Location</span>

                                <strong>Central Government</strong>

                            </div>

                            <div>

                                <span>Benefit</span>

                                <strong>Loan Support</strong>

                            </div>

                            <div>

                                <span>Last Date</span>

                                <strong>31 Mar 2027</strong>

                            </div>

                        </div>

                        <a
                            href="scheme_details.php?id=2"
                            class="scheme-btn">

                            View Details

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

                <div
                    class="col-xl-4 col-md-6 scheme-column"
                    data-name="kisan credit card animal husbandry"
                    data-category="loan"
                    data-state="central">

                    <div class="scheme-card">

                        <div class="scheme-card-top">

                            <div class="scheme-icon">

                                <i class="bi bi-credit-card"></i>

                            </div>

                            <span class="scheme-status">
                                Active
                            </span>

                        </div>

                        <h2>
                            Kisan Credit Card for Animal Husbandry
                        </h2>

                        <p class="scheme-department">
                            Government of India
                        </p>

                        <p class="scheme-description">
                            Credit facility for meeting working capital
                            requirements of dairy and livestock farmers.
                        </p>

                        <div class="scheme-info">

                            <div>

                                <span>Category</span>

                                <strong>Loan & Finance</strong>

                            </div>

                            <div>

                                <span>Location</span>

                                <strong>Central Government</strong>

                            </div>

                            <div>

                                <span>Benefit</span>

                                <strong>Credit Facility</strong>

                            </div>

                            <div>

                                <span>Last Date</span>

                                <strong>Open</strong>

                            </div>

                        </div>

                        <a
                            href="scheme_details.php?id=3"
                            class="scheme-btn">

                            View Details

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

                <div
                    class="col-xl-4 col-md-6 scheme-column"
                    data-name="gujarat dairy subsidy scheme"
                    data-category="subsidy"
                    data-state="gujarat">

                    <div class="scheme-card">

                        <div class="scheme-card-top">

                            <div class="scheme-icon">

                                <i class="bi bi-bank"></i>

                            </div>

                            <span class="scheme-status">
                                Active
                            </span>

                        </div>

                        <h2>
                            Gujarat Dairy Subsidy Scheme
                        </h2>

                        <p class="scheme-department">
                            Government of Gujarat
                        </p>

                        <p class="scheme-description">
                            Assistance for eligible dairy farmers
                            and milk production activities in Gujarat.
                        </p>

                        <div class="scheme-info">

                            <div>

                                <span>Category</span>

                                <strong>Subsidy</strong>

                            </div>

                            <div>

                                <span>Location</span>

                                <strong>Gujarat</strong>

                            </div>

                            <div>

                                <span>Benefit</span>

                                <strong>Subsidy Assistance</strong>

                            </div>

                            <div>

                                <span>Last Date</span>

                                <strong>Open</strong>

                            </div>

                        </div>

                        <a
                            href="scheme_details.php?id=4"
                            class="scheme-btn">

                            View Details

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

                <div
                    class="col-xl-4 col-md-6 scheme-column"
                    data-name="dairy farm development assistance"
                    data-category="dairy"
                    data-state="gujarat">

                    <div class="scheme-card">

                        <div class="scheme-card-top">

                            <div class="scheme-icon">

                                <i class="bi bi-tree"></i>

                            </div>

                            <span class="scheme-status">
                                Active
                            </span>

                        </div>

                        <h2>
                            Dairy Farm Development Assistance
                        </h2>

                        <p class="scheme-department">
                            Gujarat Dairy Development Department
                        </p>

                        <p class="scheme-description">
                            Assistance for improving dairy farm
                            facilities and milk production.
                        </p>

                        <div class="scheme-info">

                            <div>

                                <span>Category</span>

                                <strong>Dairy Farming</strong>

                            </div>

                            <div>

                                <span>Location</span>

                                <strong>Gujarat</strong>

                            </div>

                            <div>

                                <span>Benefit</span>

                                <strong>Development Support</strong>

                            </div>

                            <div>

                                <span>Last Date</span>

                                <strong>Open</strong>

                            </div>

                        </div>

                        <a
                            href="scheme_details.php?id=5"
                            class="scheme-btn">

                            View Details

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

                <div
                    class="col-xl-4 col-md-6 scheme-column"
                    data-name="livestock insurance scheme"
                    data-category="livestock"
                    data-state="central">

                    <div class="scheme-card">

                        <div class="scheme-card-top">

                            <div class="scheme-icon">

                                <i class="bi bi-shield-check"></i>

                            </div>

                            <span class="scheme-status">
                                Active
                            </span>

                        </div>

                        <h2>
                            Livestock Insurance Scheme
                        </h2>

                        <p class="scheme-department">
                            Department of Animal Husbandry
                        </p>

                        <p class="scheme-description">
                            Insurance support to protect eligible
                            livestock owners against animal loss.
                        </p>

                        <div class="scheme-info">

                            <div>

                                <span>Category</span>

                                <strong>Livestock</strong>

                            </div>

                            <div>

                                <span>Location</span>

                                <strong>Central Government</strong>

                            </div>

                            <div>

                                <span>Benefit</span>

                                <strong>Insurance Support</strong>

                            </div>

                            <div>

                                <span>Last Date</span>

                                <strong>Open</strong>

                            </div>

                        </div>

                        <a
                            href="scheme_details.php?id=6"
                            class="scheme-btn">

                            View Details

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </div>

            <div
                id="noSchemes"
                class="no-schemes"
                style="display: none;">

                <i class="bi bi-search"></i>

                <h3>
                    No schemes found
                </h3>

                <p>
                    Try changing your search or filter.
                </p>

            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>

    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>

    <script src="/SmartDairy/js/schemes.js"></script>

</body>

</html>