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

    <title>Veterinarian Details - SmartDairy Pro</title>

    <link
        rel="stylesheet"
        href="/SmartDairy/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/header.css">

    <link rel="stylesheet" href="css/footer.css">


    <link
        rel="stylesheet"
        href="/SmartDairy/css/vet_details.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="vet-details-page">

        <div class="container-fluid">

            <div class="details-header">

                <div>

                    <h1>Veterinarian Details</h1>

                    <p>
                        View veterinarian information and consultation details.
                    </p>

                </div>

                <a
                    href="vets.php"
                    class="back-vets">

                    <i class="bi bi-arrow-left"></i>

                    Back to Vets

                </a>

            </div>

            <div class="row g-4">

                <div class="col-lg-8">

                    <div class="vet-profile-card">

                        <div class="vet-profile-header">

                            <div class="vet-profile">

                                <div class="vet-avatar">

                                    <i class="bi bi-person"></i>

                                </div>

                                <div>

                                    <h2>
                                        Dr. Rajesh Patel
                                    </h2>

                                    <span>
                                        BVSc & AH
                                    </span>

                                    <p>
                                        Cattle Health Specialist
                                    </p>

                                </div>

                            </div>

                            <span class="available-badge">
                                Available
                            </span>

                        </div>

                        <div class="vet-profile-body">

                            <div class="rating-row">

                                <i class="bi bi-star-fill"></i>

                                <strong>
                                    4.8
                                </strong>

                                <span>
                                    124 Reviews
                                </span>

                            </div>

                            <div class="profile-info-grid">

                                <div class="profile-info">

                                    <span>
                                        Experience
                                    </span>

                                    <strong>
                                        12 Years
                                    </strong>

                                </div>

                                <div class="profile-info">

                                    <span>
                                        Specialization
                                    </span>

                                    <strong>
                                        Cattle Health
                                    </strong>

                                </div>

                                <div class="profile-info">

                                    <span>
                                        Consultation
                                    </span>

                                    <strong>
                                        Online & Visit
                                    </strong>

                                </div>

                                <div class="profile-info">

                                    <span>
                                        Location
                                    </span>

                                    <strong>
                                        Rajkot, Gujarat
                                    </strong>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="details-card">

                        <div class="details-card-header">

                            <h2>
                                About Veterinarian
                            </h2>

                        </div>

                        <div class="details-card-body">

                            <p>
                                Dr. Rajesh Patel is a veterinarian
                                specializing in cattle health and
                                dairy animal care. He provides
                                consultation for common animal
                                health problems, preventive care
                                and regular health checkups.
                            </p>

                        </div>

                    </div>

                    <div class="details-card">

                        <div class="details-card-header">

                            <h2>
                                Services
                            </h2>

                        </div>

                        <div class="details-card-body">

                            <div class="service-list">

                                <div class="service-item">

                                    <i class="bi bi-heart-pulse"></i>

                                    <span>
                                        Animal Health Checkup
                                    </span>

                                </div>

                                <div class="service-item">

                                    <i class="bi bi-shield-check"></i>

                                    <span>
                                        Vaccination Guidance
                                    </span>

                                </div>

                                <div class="service-item">

                                    <i class="bi bi-capsule"></i>

                                    <span>
                                        Treatment Consultation
                                    </span>

                                </div>

                                <div class="service-item">

                                    <i class="bi bi-clipboard2-pulse"></i>

                                    <span>
                                        Dairy Animal Care
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="details-card">

                        <div class="details-card-header">

                            <h2>
                                Availability
                            </h2>

                        </div>

                        <div class="details-card-body">

                            <div class="availability-list">

                                <div>

                                    <span>
                                        Monday - Friday
                                    </span>

                                    <strong>
                                        09:00 AM - 06:00 PM
                                    </strong>

                                </div>

                                <div>

                                    <span>
                                        Saturday
                                    </span>

                                    <strong>
                                        09:00 AM - 02:00 PM
                                    </strong>

                                </div>

                                <div>

                                    <span>
                                        Sunday
                                    </span>

                                    <strong>
                                        Closed
                                    </strong>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="appointment-card">

                        <div class="appointment-icon">

                            <i class="bi bi-calendar-check"></i>

                        </div>

                        <h2>
                            Need a Consultation?
                        </h2>

                        <p>
                            Book an appointment with this veterinarian
                            for your animal health consultation.
                        </p>

                        <a
                            href="vet_appointment.php?id=1"
                            class="book-appointment-btn">

                            <i class="bi bi-calendar-plus"></i>

                            Book Appointment

                        </a>

                    </div>

                    <div class="contact-card">

                        <h3>
                            Contact Information
                        </h3>

                        <div class="contact-item">

                            <i class="bi bi-telephone"></i>

                            <div>

                                <span>
                                    Phone
                                </span>

                                <strong>
                                    +91 98765 43210
                                </strong>

                            </div>

                        </div>

                        <div class="contact-item">

                            <i class="bi bi-envelope"></i>

                            <div>

                                <span>
                                    Email
                                </span>

                                <strong>
                                    dr.rajesh@example.com
                                </strong>

                            </div>

                        </div>

                        <div class="contact-item">

                            <i class="bi bi-geo-alt"></i>

                            <div>

                                <span>
                                    Location
                                </span>

                                <strong>
                                    Rajkot, Gujarat
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

    <script src="/SmartDairy/js/vet_details.js"></script>

</body>

</html>