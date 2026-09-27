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

    <title>Animal Details - SmartDairy Pro</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/animal_details.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="animal-details-page">

        <div class="container-fluid">

            <div class="page-heading">

                <div>
                    <h1>Animal Details</h1>
                    <p>View complete information about the selected animal.</p>
                </div>

                <a href="animals.php" class="back-btn">
                    <i class="bi bi-arrow-left"></i>
                    Back to Animals
                </a>

            </div>


            <div class="animal-details-panel">

                <div class="animal-profile">

                    <div class="animal-profile-icon">
                        <i class="bi bi-grid-3x3-gap"></i>
                    </div>

                    <div class="animal-profile-info">

                        <h2>Cow #001</h2>

                        <span>
                            Animal ID: #001
                        </span>

                    </div>

                    <span class="animal-status healthy">
                        Healthy
                    </span>

                </div>


                <div class="details-section">

                    <div class="section-title">

                        <h2>Basic Information</h2>

                    </div>


                    <div class="row g-4">

                        <div class="col-md-6 col-lg-3">

                            <div class="detail-item">
                                <span>Animal Type</span>
                                <strong>Cow</strong>
                            </div>

                        </div>


                        <div class="col-md-6 col-lg-3">

                            <div class="detail-item">
                                <span>Breed</span>
                                <strong>Gir</strong>
                            </div>

                        </div>


                        <div class="col-md-6 col-lg-3">

                            <div class="detail-item">
                                <span>Gender</span>
                                <strong>Female</strong>
                            </div>

                        </div>


                        <div class="col-md-6 col-lg-3">

                            <div class="detail-item">
                                <span>Age</span>
                                <strong>4 Years</strong>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="details-section">

                    <div class="section-title">

                        <h2>Farm Information</h2>

                    </div>


                    <div class="row g-4">

                        <div class="col-md-6 col-lg-3">

                            <div class="detail-item">
                                <span>Date of Birth</span>
                                <strong>15 Aug 2022</strong>
                            </div>

                        </div>


                        <div class="col-md-6 col-lg-3">

                            <div class="detail-item">
                                <span>Purchase Date</span>
                                <strong>20 Sep 2022</strong>
                            </div>

                        </div>


                        <div class="col-md-6 col-lg-3">

                            <div class="detail-item">
                                <span>Purchase Price</span>
                                <strong>₹65,000</strong>
                            </div>

                        </div>


                        <div class="col-md-6 col-lg-3">

                            <div class="detail-item">
                                <span>Milk Capacity</span>
                                <strong>8.5 L / Day</strong>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="details-section">

                    <div class="section-title">

                        <h2>Additional Information</h2>

                    </div>

                    <div class="animal-notes">

                        <span>Notes</span>

                        <p>
                            Healthy Gir cow. Regular milk production.
                            Vaccination and health records are maintained.
                        </p>

                    </div>

                </div>


                <div class="detail-actions">

                    <a href="#" class="edit-btn">
                        <i class="bi bi-pencil"></i>
                        Edit Animal
                    </a>

                    <a href="#" class="delete-btn">
                        <i class="bi bi-trash"></i>
                        Delete Animal
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