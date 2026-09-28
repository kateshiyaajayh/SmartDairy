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

    <title>Book Appointment - SmartDairy Pro</title>

    <link
        rel="stylesheet"
        href="/SmartDairy/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/header.css">

    <link rel="stylesheet" href="css/footer.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/css/vet_appointment.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="appointment-page">

        <div class="container-fluid">

            <div class="appointment-header">

                <div>

                    <h1>Book Veterinary Appointment</h1>

                    <p>
                        Schedule an appointment for your animal health consultation.
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

                    <div class="appointment-form-card">

                        <form
                            id="appointmentForm"
                            method="post">

                            <div class="form-section">

                                <h2>Appointment Information</h2>

                                <div class="row g-3">

                                    <div class="col-md-6">

                                        <label
                                            for="veterinarian"
                                            class="form-label">

                                            Veterinarian

                                        </label>

                                        <select
                                            id="veterinarian"
                                            name="veterinarian"
                                            class="form-select"
                                            data-validation="required">

                                            <option value="">
                                                Select Veterinarian
                                            </option>

                                            <option value="1">
                                                Dr. Rajesh Patel
                                            </option>

                                            <option value="2">
                                                Dr. Mehul Shah
                                            </option>

                                            <option value="3">
                                                Dr. Kiran Joshi
                                            </option>

                                        </select>

                                        <span
                                            id="veterinarianError"
                                            class="text-danger">
                                        </span>

                                    </div>

                                    <div class="col-md-6">

                                        <label
                                            for="animal"
                                            class="form-label">

                                            Animal

                                        </label>

                                        <select
                                            id="animal"
                                            name="animal"
                                            class="form-select"
                                            data-validation="required">

                                            <option value="">
                                                Select Animal
                                            </option>

                                            <option value="1">
                                                Cow #001
                                            </option>

                                            <option value="2">
                                                Buffalo #002
                                            </option>

                                            <option value="3">
                                                Cow #003
                                            </option>

                                        </select>

                                        <span
                                            id="animalError"
                                            class="text-danger">
                                        </span>

                                    </div>

                                    <div class="col-md-6">

                                        <label
                                            for="appointmentDate"
                                            class="form-label">

                                            Appointment Date

                                        </label>

                                        <input
                                            type="date"
                                            id="appointmentDate"
                                            name="appointmentDate"
                                            class="form-control"
                                            data-validation="required">

                                        <span
                                            id="appointmentDateError"
                                            class="text-danger">
                                        </span>

                                    </div>

                                    <div class="col-md-6">

                                        <label
                                            for="appointmentTime"
                                            class="form-label">

                                            Appointment Time

                                        </label>

                                        <select
                                            id="appointmentTime"
                                            name="appointmentTime"
                                            class="form-select"
                                            data-validation="required">

                                            <option value="">
                                                Select Time
                                            </option>

                                            <option value="09:00">
                                                09:00 AM
                                            </option>

                                            <option value="10:00">
                                                10:00 AM
                                            </option>

                                            <option value="11:00">
                                                11:00 AM
                                            </option>

                                            <option value="12:00">
                                                12:00 PM
                                            </option>

                                            <option value="02:00">
                                                02:00 PM
                                            </option>

                                            <option value="03:00">
                                                03:00 PM
                                            </option>

                                            <option value="04:00">
                                                04:00 PM
                                            </option>

                                            <option value="05:00">
                                                05:00 PM
                                            </option>

                                        </select>

                                        <span
                                            id="appointmentTimeError"
                                            class="text-danger">
                                        </span>

                                    </div>

                                </div>

                            </div>

                            <div class="form-section">

                                <h2>Reason for Visit</h2>

                                <div class="row g-3">

                                    <div class="col-md-6">

                                        <label
                                            for="visitType"
                                            class="form-label">

                                            Visit Type

                                        </label>

                                        <select
                                            id="visitType"
                                            name="visitType"
                                            class="form-select"
                                            data-validation="required">

                                            <option value="">
                                                Select Visit Type
                                            </option>

                                            <option value="checkup">
                                                General Checkup
                                            </option>

                                            <option value="treatment">
                                                Treatment
                                            </option>

                                            <option value="vaccination">
                                                Vaccination
                                            </option>

                                            <option value="emergency">
                                                Emergency Consultation
                                            </option>

                                        </select>

                                        <span
                                            id="visitTypeError"
                                            class="text-danger">
                                        </span>

                                    </div>

                                    <div class="col-md-6">

                                        <label
                                            for="issue"
                                            class="form-label">

                                            Health Issue

                                        </label>

                                        <input
                                            type="text"
                                            id="issue"
                                            name="issue"
                                            class="form-control"
                                            placeholder="Enter health issue"
                                            data-validation="max"
                                            data-max="150">

                                        <span
                                            id="issueError"
                                            class="text-danger">
                                        </span>

                                    </div>

                                    <div class="col-12">

                                        <label
                                            for="description"
                                            class="form-label">

                                            Description

                                        </label>

                                        <textarea
                                            id="description"
                                            name="description"
                                            rows="4"
                                            class="form-control"
                                            placeholder="Describe the animal's health problem"
                                            data-validation="max"
                                            data-max="500"></textarea>

                                        <span
                                            id="descriptionError"
                                            class="text-danger">
                                        </span>

                                    </div>

                                </div>

                            </div>

                            <div class="form-section">

                                <h2>Contact Information</h2>

                                <div class="row g-3">

                                    <div class="col-md-6">

                                        <label
                                            for="mobile"
                                            class="form-label">

                                            Mobile Number

                                        </label>

                                        <input
                                            type="text"
                                            id="mobile"
                                            name="mobile"
                                            class="form-control"
                                            placeholder="Enter mobile number"
                                            data-validation="required numeric min max"
                                            data-min="10"
                                            data-max="10">

                                        <span
                                            id="mobileError"
                                            class="text-danger">
                                        </span>

                                    </div>

                                    <div class="col-md-6">

                                        <label
                                            for="preferredContact"
                                            class="form-label">

                                            Preferred Contact

                                        </label>

                                        <select
                                            id="preferredContact"
                                            name="preferredContact"
                                            class="form-select"
                                            data-validation="required">

                                            <option value="">
                                                Select Contact Method
                                            </option>

                                            <option value="call">
                                                Phone Call
                                            </option>

                                            <option value="whatsapp">
                                                WhatsApp
                                            </option>

                                        </select>

                                        <span
                                            id="preferredContactError"
                                            class="text-danger">
                                        </span>

                                    </div>

                                    <div class="col-12">

                                        <label
                                            for="notes"
                                            class="form-label">

                                            Additional Notes

                                        </label>

                                        <textarea
                                            id="notes"
                                            name="notes"
                                            rows="3"
                                            class="form-control"
                                            placeholder="Any additional information"></textarea>

                                    </div>

                                </div>

                            </div>

                            <div class="form-actions">

                                <a
                                    href="vets.php"
                                    class="cancel-btn">

                                    Cancel

                                </a>

                                <button
                                    type="submit"
                                    class="submit-btn">

                                    <i class="bi bi-calendar-check"></i>

                                    Book Appointment

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="appointment-info-card">

                        <div class="info-icon">

                            <i class="bi bi-calendar-check"></i>

                        </div>

                        <h2>
                            Appointment Information
                        </h2>

                        <p>
                            Select a veterinarian, animal and
                            suitable appointment time.
                        </p>

                        <div class="info-list">

                            <div>

                                <i class="bi bi-clock"></i>

                                <span>
                                    Appointments are available
                                    during veterinarian working hours.
                                </span>

                            </div>

                            <div>

                                <i class="bi bi-telephone"></i>

                                <span>
                                    The veterinarian may contact
                                    you before the appointment.
                                </span>

                            </div>

                            <div>

                                <i class="bi bi-clipboard2-pulse"></i>

                                <span>
                                    Keep previous health records
                                    available during consultation.
                                </span>

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

    <script src="/SmartDairy/js/validation.js"></script>

    <script src="/SmartDairy/js/vet_appointment.js"></script>

</body>

</html>