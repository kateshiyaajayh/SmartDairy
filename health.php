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

    <title>Animal Health - SmartDairy Pro</title>

    <link
        rel="stylesheet"
        href="/SmartDairy/css/bootstrap.min.css">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/header.css">

    <link rel="stylesheet" href="css/footer.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/css/health.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="health-page">

        <div class="container-fluid">

            <div class="health-header">

                <div>

                    <h1>Animal Health</h1>

                    <p>
                        Monitor animal health, treatments and vaccinations.
                    </p>

                </div>

                <a
                    href="health_record.php"
                    class="add-health-btn">

                    <i class="bi bi-plus-lg"></i>

                    Add Health Record

                </a>

            </div>

            <div class="row g-4 health-summary">

                <div class="col-md-6 col-xl-3">

                    <div class="health-summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-heart-pulse"></i>
                        </div>

                        <div>

                            <span>
                                Healthy Animals
                            </span>

                            <h2>
                                32
                            </h2>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-xl-3">

                    <div class="health-summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-clipboard2-pulse"></i>
                        </div>

                        <div>

                            <span>
                                Under Treatment
                            </span>

                            <h2>
                                4
                            </h2>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-xl-3">

                    <div class="health-summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>

                        <div>

                            <span>
                                Vaccination Due
                            </span>

                            <h2>
                                6
                            </h2>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-xl-3">

                    <div class="health-summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-calendar-check"></i>
                        </div>

                        <div>

                            <span>
                                Checkup Due
                            </span>

                            <h2>
                                3
                            </h2>

                        </div>

                    </div>

                </div>

            </div>

            <div class="health-content-card">

                <div class="health-toolbar">

                    <div class="search-box">

                        <i class="bi bi-search"></i>

                        <input
                            type="text"
                            id="healthSearch"
                            placeholder="Search animal or health record">

                    </div>

                    <select
                        id="healthStatus"
                        class="form-select">

                        <option value="all">
                            All Status
                        </option>

                        <option value="healthy">
                            Healthy
                        </option>

                        <option value="treatment">
                            Under Treatment
                        </option>

                        <option value="vaccination">
                            Vaccination Due
                        </option>

                        <option value="checkup">
                            Checkup Due
                        </option>

                    </select>

                    <select
                        id="healthType"
                        class="form-select">

                        <option value="all">
                            All Types
                        </option>

                        <option value="cow">
                            Cow
                        </option>

                        <option value="buffalo">
                            Buffalo
                        </option>

                    </select>

                </div>

                <div class="table-responsive">

                    <table class="table health-table">

                        <thead>

                            <tr>

                                <th>
                                    Animal
                                </th>

                                <th>
                                    Type
                                </th>

                                <th>
                                    Health Issue
                                </th>

                                <th>
                                    Last Checkup
                                </th>

                                <th>
                                    Next Due
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
                                data-name="Cow 001"
                                data-type="cow"
                                data-status="healthy">

                                <td>

                                    <div class="animal-name">

                                        <span class="animal-icon">
                                            <i class="bi bi-grid-3x3-gap"></i>
                                        </span>

                                        <div>

                                            <strong>
                                                Cow #001
                                            </strong>

                                            <small>
                                                AN-001
                                            </small>

                                        </div>

                                    </div>

                                </td>

                                <td>
                                    Cow
                                </td>

                                <td>
                                    No Health Issue
                                </td>

                                <td>
                                    15 Sep 2026
                                </td>

                                <td>
                                    15 Oct 2026
                                </td>

                                <td>

                                    <span class="status-badge healthy">
                                        Healthy
                                    </span>

                                </td>

                                <td>

                                    <a
                                        href="health_details.php?id=1"
                                        class="view-btn">

                                        View

                                    </a>

                                </td>

                            </tr>

                            <tr
                                data-name="Buffalo 002"
                                data-type="buffalo"
                                data-status="treatment">

                                <td>

                                    <div class="animal-name">

                                        <span class="animal-icon">
                                            <i class="bi bi-grid-3x3-gap"></i>
                                        </span>

                                        <div>

                                            <strong>
                                                Buffalo #002
                                            </strong>

                                            <small>
                                                AN-002
                                            </small>

                                        </div>

                                    </div>

                                </td>

                                <td>
                                    Buffalo
                                </td>

                                <td>
                                    Fever
                                </td>

                                <td>
                                    24 Sep 2026
                                </td>

                                <td>
                                    30 Sep 2026
                                </td>

                                <td>

                                    <span class="status-badge treatment">
                                        Under Treatment
                                    </span>

                                </td>

                                <td>

                                    <a
                                        href="health_details.php?id=2"
                                        class="view-btn">

                                        View

                                    </a>

                                </td>

                            </tr>

                            <tr
                                data-name="Cow 003"
                                data-type="cow"
                                data-status="vaccination">

                                <td>

                                    <div class="animal-name">

                                        <span class="animal-icon">
                                            <i class="bi bi-grid-3x3-gap"></i>
                                        </span>

                                        <div>

                                            <strong>
                                                Cow #003
                                            </strong>

                                            <small>
                                                AN-003
                                            </small>

                                        </div>

                                    </div>

                                </td>

                                <td>
                                    Cow
                                </td>

                                <td>
                                    Vaccination
                                </td>

                                <td>
                                    10 Sep 2026
                                </td>

                                <td>
                                    05 Oct 2026
                                </td>

                                <td>

                                    <span class="status-badge vaccination">
                                        Vaccination Due
                                    </span>

                                </td>

                                <td>

                                    <a
                                        href="health_details.php?id=3"
                                        class="view-btn">

                                        View

                                    </a>

                                </td>

                            </tr>

                            <tr
                                data-name="Buffalo 004"
                                data-type="buffalo"
                                data-status="checkup">

                                <td>

                                    <div class="animal-name">

                                        <span class="animal-icon">
                                            <i class="bi bi-grid-3x3-gap"></i>
                                        </span>

                                        <div>

                                            <strong>
                                                Buffalo #004
                                            </strong>

                                            <small>
                                                AN-004
                                            </small>

                                        </div>

                                    </div>

                                </td>

                                <td>
                                    Buffalo
                                </td>

                                <td>
                                    Routine Checkup
                                </td>

                                <td>
                                    20 Aug 2026
                                </td>

                                <td>
                                    01 Oct 2026
                                </td>

                                <td>

                                    <span class="status-badge checkup">
                                        Checkup Due
                                    </span>

                                </td>

                                <td>

                                    <a
                                        href="health_details.php?id=4"
                                        class="view-btn">

                                        View

                                    </a>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>

    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>

    <script src="/SmartDairy/js/health.js"></script>

</body>

</html>