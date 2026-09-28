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

    <title>Scheme Details - SmartDairy Pro</title>

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
        href="/SmartDairy/css/scheme_details.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="scheme-details-page">

        <div class="container-fluid">

            <div class="details-header">

                <div>

                    <h1>Scheme Details</h1>

                    <p>
                        View eligibility, benefits and application information.
                    </p>

                </div>

                <a
                    href="schemes.php"
                    class="back-schemes">

                    <i class="bi bi-arrow-left"></i>

                    Back to Schemes

                </a>

            </div>

            <div class="row g-4">

                <div class="col-lg-8">

                    <div class="scheme-details-card">

                        <div class="scheme-details-top">

                            <div class="scheme-main-icon">

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

                        <div class="scheme-overview">

                            <div>

                                <span>Category</span>

                                <strong>
                                    Dairy Farming
                                </strong>

                            </div>

                            <div>

                                <span>Location</span>

                                <strong>
                                    Central Government
                                </strong>

                            </div>

                            <div>

                                <span>Benefit</span>

                                <strong>
                                    Financial Assistance
                                </strong>

                            </div>

                            <div>

                                <span>Last Date</span>

                                <strong>
                                    31 Dec 2026
                                </strong>

                            </div>

                        </div>

                    </div>

                    <div class="details-card">

                        <div class="details-card-header">

                            <h2>
                                About the Scheme
                            </h2>

                        </div>

                        <div class="details-card-body">

                            <p>
                                This scheme provides support for
                                eligible dairy farmers who want to
                                establish or improve dairy farming
                                activities.
                            </p>

                            <p>
                                Applicants can use the assistance
                                for eligible dairy-related activities
                                according to the applicable scheme
                                guidelines.
                            </p>

                        </div>

                    </div>

                    <div class="details-card">

                        <div class="details-card-header">

                            <h2>
                                Eligibility
                            </h2>

                        </div>

                        <div class="details-card-body">

                            <ul class="details-list">

                                <li>
                                    Applicant should be involved
                                    in eligible dairy farming activities.
                                </li>

                                <li>
                                    Applicant must satisfy the
                                    applicable scheme requirements.
                                </li>

                                <li>
                                    Required documents must be
                                    available during application.
                                </li>

                                <li>
                                    Additional eligibility conditions
                                    may apply according to the scheme.
                                </li>

                            </ul>

                        </div>

                    </div>

                    <div class="details-card">

                        <div class="details-card-header">

                            <h2>
                                Benefits
                            </h2>

                        </div>

                        <div class="details-card-body">

                            <div class="benefit-list">

                                <div class="benefit-item">

                                    <i class="bi bi-cash-stack"></i>

                                    <div>

                                        <strong>
                                            Financial Assistance
                                        </strong>

                                        <span>
                                            Support for eligible
                                            dairy farming activities.
                                        </span>

                                    </div>

                                </div>

                                <div class="benefit-item">

                                    <i class="bi bi-house-gear"></i>

                                    <div>

                                        <strong>
                                            Farm Development
                                        </strong>

                                        <span>
                                            Assistance for improving
                                            eligible dairy facilities.
                                        </span>

                                    </div>

                                </div>

                                <div class="benefit-item">

                                    <i class="bi bi-graph-up-arrow"></i>

                                    <div>

                                        <strong>
                                            Dairy Growth
                                        </strong>

                                        <span>
                                            Support for development
                                            of dairy farming activities.
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="details-card">

                        <div class="details-card-header">

                            <h2>
                                Required Documents
                            </h2>

                        </div>

                        <div class="details-card-body">

                            <ul class="details-list">

                                <li>
                                    Identity proof
                                </li>

                                <li>
                                    Address proof
                                </li>

                                <li>
                                    Bank account details
                                </li>

                                <li>
                                    Dairy farm related documents
                                </li>

                                <li>
                                    Passport-size photograph
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="application-card">

                        <div class="application-icon">

                            <i class="bi bi-file-earmark-text"></i>

                        </div>

                        <h2>
                            Application Information
                        </h2>

                        <div class="application-info">

                            <div>

                                <span>Status</span>

                                <strong class="active-text">
                                    Active
                                </strong>

                            </div>

                            <div>

                                <span>Last Date</span>

                                <strong>
                                    31 Dec 2026
                                </strong>

                            </div>

                            <div>

                                <span>Department</span>

                                <strong>
                                    Department of Animal Husbandry
                                </strong>

                            </div>

                        </div>

                        <a
                            href="#"
                            class="apply-btn">

                            <i class="bi bi-box-arrow-up-right"></i>

                            Application Portal

                        </a>

                    </div>

                    <div class="important-card">

                        <div class="important-title">

                            <i class="bi bi-info-circle"></i>

                            <h3>
                                Important Information
                            </h3>

                        </div>

                        <p>
                            Scheme eligibility, benefits, documents
                            and application procedures may vary.
                            Verify the latest information with the
                            concerned department before applying.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>

    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>

    <script src="/SmartDairy/js/scheme_details.js"></script>

</body>

</html>