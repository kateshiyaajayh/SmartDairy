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

    <title>Veterinarians - SmartDairy Pro</title>

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
        href="/SmartDairy/css/vets.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="vets-page">

        <div class="container-fluid">

            <div class="vets-header">

                <div>

                    <h1>Veterinarians</h1>

                    <p>
                        Find veterinarians and manage animal healthcare appointments.
                    </p>

                </div>

                <a
                    href="vet_appointment.php"
                    class="appointment-btn">

                    <i class="bi bi-calendar-plus"></i>

                    Book Appointment

                </a>

            </div>

            <div class="row g-4 vets-summary">

                <div class="col-md-6 col-xl-3">

                    <div class="vet-summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-person-badge"></i>
                        </div>

                        <div>

                            <span>
                                Total Vets
                            </span>

                            <h2>
                                12
                            </h2>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-xl-3">

                    <div class="vet-summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-person-check"></i>
                        </div>

                        <div>

                            <span>
                                Available Today
                            </span>

                            <h2>
                                8
                            </h2>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-xl-3">

                    <div class="vet-summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-calendar-check"></i>
                        </div>

                        <div>

                            <span>
                                Appointments
                            </span>

                            <h2>
                                5
                            </h2>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-xl-3">

                    <div class="vet-summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>

                        <div>

                            <span>
                                Nearby Vets
                            </span>

                            <h2>
                                6
                            </h2>

                        </div>

                    </div>

                </div>

            </div>

            <div class="vets-content-card">

                <div class="vets-toolbar">

                    <div class="search-box">

                        <i class="bi bi-search"></i>

                        <input
                            type="text"
                            id="vetSearch"
                            placeholder="Search veterinarian or specialization">

                    </div>

                    <select
                        id="vetSpecialization"
                        class="form-select">

                        <option value="all">
                            All Specializations
                        </option>

                        <option value="cattle">
                            Cattle Health
                        </option>

                        <option value="dairy">
                            Dairy Specialist
                        </option>

                        <option value="surgery">
                            Veterinary Surgery
                        </option>

                    </select>

                    <select
                        id="vetAvailability"
                        class="form-select">

                        <option value="all">
                            All Availability
                        </option>

                        <option value="available">
                            Available
                        </option>

                        <option value="unavailable">
                            Unavailable
                        </option>

                    </select>

                </div>

                <div class="row g-4 vets-grid" id="vetsGrid">

                    <div
                        class="col-md-6 col-xl-4 vet-column"
                        data-name="Dr. Rajesh Patel"
                        data-specialization="cattle"
                        data-availability="available">

                        <div class="vet-card">

                            <div class="vet-card-top">

                                <div class="vet-avatar">

                                    <i class="bi bi-person"></i>

                                </div>

                                <span class="available-badge">
                                    Available
                                </span>

                            </div>

                            <div class="vet-info">

                                <h2>
                                    Dr. Rajesh Patel
                                </h2>

                                <span class="vet-degree">
                                    BVSc & AH
                                </span>

                                <p class="vet-specialization">

                                    <i class="bi bi-heart-pulse"></i>

                                    Cattle Health Specialist

                                </p>

                                <p class="vet-location">

                                    <i class="bi bi-geo-alt"></i>

                                    Rajkot, Gujarat

                                </p>

                                <div class="vet-rating">

                                    <i class="bi bi-star-fill"></i>

                                    <strong>
                                        4.8
                                    </strong>

                                    <span>
                                        124 Reviews
                                    </span>

                                </div>

                            </div>

                            <div class="vet-card-footer">

                                <a
                                    href="vet_details.php?id=1"
                                    class="details-btn">

                                    View Details

                                </a>

                                <a
                                    href="vet_appointment.php?id=1"
                                    class="book-btn">

                                    Book

                                </a>

                            </div>

                        </div>

                    </div>

                    <div
                        class="col-md-6 col-xl-4 vet-column"
                        data-name="Dr. Mehul Shah"
                        data-specialization="dairy"
                        data-availability="available">

                        <div class="vet-card">

                            <div class="vet-card-top">

                                <div class="vet-avatar">

                                    <i class="bi bi-person"></i>

                                </div>

                                <span class="available-badge">
                                    Available
                                </span>

                            </div>

                            <div class="vet-info">

                                <h2>
                                    Dr. Mehul Shah
                                </h2>

                                <span class="vet-degree">
                                    MVSc
                                </span>

                                <p class="vet-specialization">

                                    <i class="bi bi-heart-pulse"></i>

                                    Dairy Specialist

                                </p>

                                <p class="vet-location">

                                    <i class="bi bi-geo-alt"></i>

                                    Rajkot, Gujarat

                                </p>

                                <div class="vet-rating">

                                    <i class="bi bi-star-fill"></i>

                                    <strong>
                                        4.7
                                    </strong>

                                    <span>
                                        98 Reviews
                                    </span>

                                </div>

                            </div>

                            <div class="vet-card-footer">

                                <a
                                    href="vet_details.php?id=2"
                                    class="details-btn">

                                    View Details

                                </a>

                                <a
                                    href="vet_appointment.php?id=2"
                                    class="book-btn">

                                    Book

                                </a>

                            </div>

                        </div>

                    </div>

                    <div
                        class="col-md-6 col-xl-4 vet-column"
                        data-name="Dr. Kiran Joshi"
                        data-specialization="surgery"
                        data-availability="unavailable">

                        <div class="vet-card">

                            <div class="vet-card-top">

                                <div class="vet-avatar">

                                    <i class="bi bi-person"></i>

                                </div>

                                <span class="unavailable-badge">
                                    Unavailable
                                </span>

                            </div>

                            <div class="vet-info">

                                <h2>
                                    Dr. Kiran Joshi
                                </h2>

                                <span class="vet-degree">
                                    BVSc & AH
                                </span>

                                <p class="vet-specialization">

                                    <i class="bi bi-heart-pulse"></i>

                                    Veterinary Surgery

                                </p>

                                <p class="vet-location">

                                    <i class="bi bi-geo-alt"></i>

                                    Gondal, Gujarat

                                </p>

                                <div class="vet-rating">

                                    <i class="bi bi-star-fill"></i>

                                    <strong>
                                        4.6
                                    </strong>

                                    <span>
                                        76 Reviews
                                    </span>

                                </div>

                            </div>

                            <div class="vet-card-footer">

                                <a
                                    href="vet_details.php?id=3"
                                    class="details-btn">

                                    View Details

                                </a>

                                <a
                                    href="vet_appointment.php?id=3"
                                    class="book-btn disabled">

                                    Unavailable

                                </a>

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

    <script src="/SmartDairy/js/vets.js"></script>

</body>

</html>