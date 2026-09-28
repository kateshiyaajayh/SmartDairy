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

    <title>My Activity - SmartDairy Pro</title>

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
        href="/SmartDairy/css/activity.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="activity-page">

        <div class="container-fluid">

            <div class="activity-header">

                <div>

                    <h1>My Activity</h1>

                    <p>
                        View your recent activities and actions.
                    </p>

                </div>

            </div>

            <div class="activity-card">

                <div class="activity-toolbar">

                    <div class="search-box">

                        <i class="bi bi-search"></i>

                        <input
                            type="text"
                            id="activitySearch"
                            placeholder="Search activity...">

                    </div>

                    <select
                        id="activityType"
                        class="form-select">

                        <option value="all">
                            All Activities
                        </option>

                        <option value="animal">
                            Animals
                        </option>

                        <option value="milk">
                            Milk Collection
                        </option>

                        <option value="health">
                            Health
                        </option>

                        <option value="market">
                            Market
                        </option>

                        <option value="appointment">
                            Appointments
                        </option>

                    </select>

                </div>

                <div class="activity-list">

                    <div
                        class="activity-item"
                        data-type="animal"
                        data-name="added cow animal">

                        <div class="activity-icon">

                            <i class="bi bi-plus-circle"></i>

                        </div>

                        <div class="activity-content">

                            <h2>
                                Animal Added
                            </h2>

                            <p>
                                Cow #001 was added to your animal records.
                            </p>

                            <span>
                                Today, 10:30 AM
                            </span>

                        </div>

                    </div>

                    <div
                        class="activity-item"
                        data-type="milk"
                        data-name="milk collection recorded">

                        <div class="activity-icon">

                            <i class="bi bi-droplet"></i>

                        </div>

                        <div class="activity-content">

                            <h2>
                                Milk Collection Recorded
                            </h2>

                            <p>
                                18.5 litres of milk were recorded for
                                Cow #001.
                            </p>

                            <span>
                                Today, 08:45 AM
                            </span>

                        </div>

                    </div>

                    <div
                        class="activity-item"
                        data-type="health"
                        data-name="health record added">

                        <div class="activity-icon">

                            <i class="bi bi-heart-pulse"></i>

                        </div>

                        <div class="activity-content">

                            <h2>
                                Health Record Added
                            </h2>

                            <p>
                                A health checkup record was added for
                                Buffalo #002.
                            </p>

                            <span>
                                Yesterday, 04:20 PM
                            </span>

                        </div>

                    </div>

                    <div
                        class="activity-item"
                        data-type="market"
                        data-name="product added marketplace">

                        <div class="activity-icon">

                            <i class="bi bi-shop"></i>

                        </div>

                        <div class="activity-content">

                            <h2>
                                Product Added
                            </h2>

                            <p>
                                Farm-Fresh Cow Milk was added to the
                                marketplace.
                            </p>

                            <span>
                                Yesterday, 11:15 AM
                            </span>

                        </div>

                    </div>

                    <div
                        class="activity-item"
                        data-type="appointment"
                        data-name="veterinary appointment booked">

                        <div class="activity-icon">

                            <i class="bi bi-calendar-check"></i>

                        </div>

                        <div class="activity-content">

                            <h2>
                                Appointment Booked
                            </h2>

                            <p>
                                Veterinary appointment booked with
                                Dr. Rajesh Patel.
                            </p>

                            <span>
                                26 Sep 2026, 02:30 PM
                            </span>

                        </div>

                    </div>

                </div>

                <div
                    id="noActivity"
                    class="no-activity"
                    style="display: none;">

                    <i class="bi bi-search"></i>

                    <h3>
                        No activity found
                    </h3>

                    <p>
                        Try changing your search or filter.
                    </p>

                </div>

            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>

    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>

    <script src="/SmartDairy/js/activity.js"></script>

</body>

</html>