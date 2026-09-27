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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Milk Collection Details - SmartDairy Pro</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/milk_details.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="milk-details-page">

        <div class="container-fluid">

            <div class="page-heading">

                <div>
                    <h1>Milk Collection Details</h1>
                    <p>View complete information about the selected collection.</p>
                </div>

                <a href="milk_collection.php" class="back-btn">
                    <i class="bi bi-arrow-left"></i>
                    Back to Collection
                </a>

            </div>


            <div class="milk-details-panel">

                <div class="record-header">

                    <div class="record-icon">
                        <i class="bi bi-droplet"></i>
                    </div>

                    <div class="record-info">

                        <h2>Cow #001</h2>

                        <span>
                            Collection Record · 26 Sep 2026
                        </span>

                    </div>

                    <span class="session-badge">
                        Morning
                    </span>

                </div>


                <div class="details-section">

                    <div class="section-title">
                        <h2>Collection Information</h2>
                    </div>


                    <div class="row g-4">

                        <div class="col-md-6 col-lg-3">

                            <div class="detail-item">
                                <span>Collection Date</span>
                                <strong>26 Sep 2026</strong>
                            </div>

                        </div>


                        <div class="col-md-6 col-lg-3">

                            <div class="detail-item">
                                <span>Animal</span>
                                <strong>Cow #001</strong>
                            </div>

                        </div>


                        <div class="col-md-6 col-lg-3">

                            <div class="detail-item">
                                <span>Animal Type</span>
                                <strong>Cow</strong>
                            </div>

                        </div>


                        <div class="col-md-6 col-lg-3">

                            <div class="detail-item">
                                <span>Session</span>
                                <strong>Morning</strong>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="details-section">

                    <div class="section-title">
                        <h2>Milk Quality</h2>
                    </div>


                    <div class="row g-4">

                        <div class="col-md-4">

                            <div class="detail-item">
                                <span>Milk Quantity</span>
                                <strong>8.5 L</strong>
                            </div>

                        </div>


                        <div class="col-md-4">

                            <div class="detail-item">
                                <span>Fat</span>
                                <strong>4.2%</strong>
                            </div>

                        </div>


                        <div class="col-md-4">

                            <div class="detail-item">
                                <span>SNF</span>
                                <strong>8.6%</strong>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="details-section">

                    <div class="section-title">
                        <h2>Additional Information</h2>
                    </div>

                    <div class="record-notes">

                        <span>Notes</span>

                        <p>
                            Regular morning milk collection.
                            Milk quality checked during collection.
                        </p>

                    </div>

                </div>


                <div class="detail-actions">

                    <a href="#" class="edit-btn">
                        <i class="bi bi-pencil"></i>
                        Edit Record
                    </a>

                    <a href="#" class="delete-btn">
                        <i class="bi bi-trash"></i>
                        Delete Record
                    </a>

                </div>

            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>