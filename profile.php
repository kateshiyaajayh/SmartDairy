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

    <title>My Profile - SmartDairy Pro</title>

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
        href="/SmartDairy/css/profile.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="profile-page">

        <div class="container-fluid">

            <div class="profile-header">

                <div>

                    <h1>My Profile</h1>

                    <p>
                        View and manage your personal information.
                    </p>

                </div>

            </div>

            <div class="row g-4">

                <div class="col-lg-4">

                    <div class="profile-card">

                        <div class="profile-avatar">

                            <i class="bi bi-person"></i>

                        </div>

                        <h2>
                            <?php
                            echo htmlspecialchars(
                                $_SESSION["full_name"] ?? "User"
                            );
                            ?>
                        </h2>

                        <p>
                            Dairy Farmer
                        </p>

                        <div class="profile-status">
                            <i class="bi bi-check-circle"></i>
                            Active Account
                        </div>

                    </div>

                </div>

                <div class="col-lg-8">

                    <div class="profile-details-card">

                        <div class="card-header">

                            <h2>
                                Personal Information
                            </h2>

                            <a
                                href="edit_profile.php"
                                class="edit-profile-btn">
                                Edit Profile
                            </a>

                        </div>

                        <div class="profile-details">

                            <div class="profile-info">

                                <span>
                                    Full Name
                                </span>

                                <strong>
                                    <?php
                                    echo htmlspecialchars(
                                        $_SESSION["full_name"] ?? "User"
                                    );
                                    ?>
                                </strong>

                            </div>

                            <div class="profile-info">

                                <span>
                                    Mobile Number
                                </span>

                                <strong>
                                    +91 98765 43210
                                </strong>

                            </div>

                            <div class="profile-info">

                                <span>
                                    Email Address
                                </span>

                                <strong>
                                    user@example.com
                                </strong>

                            </div>

                            <div class="profile-info">

                                <span>
                                    Address
                                </span>

                                <strong>
                                    Rajkot, Gujarat
                                </strong>

                            </div>

                            <div class="profile-info">

                                <span>
                                    Village
                                </span>

                                <strong>
                                    Sample Village
                                </strong>

                            </div>

                            <div class="profile-info">

                                <span>
                                    District
                                </span>

                                <strong>
                                    Rajkot
                                </strong>

                            </div>

                            <div class="profile-info">

                                <span>
                                    State
                                </span>

                                <strong>
                                    Gujarat
                                </strong>

                            </div>

                            <div class="profile-info">

                                <span>
                                    Member Since
                                </span>

                                <strong>
                                    2026
                                </strong>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>

    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>

    <script src="/SmartDairy/js/profile.js"></script>

</body>

</html>