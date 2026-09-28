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

    <title>Add Health Record - SmartDairy Pro</title>

    <link
        rel="stylesheet"
        href="/SmartDairy/css/bootstrap.min.css">


    <link rel="stylesheet" href="css/header.css">

    <link rel="stylesheet" href="css/footer.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/css/health_record.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="health-record-page">

        <div class="container-fluid">

            <div class="health-record-header">

                <div>

                    <h1>Add Health Record</h1>

                    <p>
                        Add health, treatment and vaccination information.
                    </p>

                </div>

                <a
                    href="health.php"
                    class="back-health">

                    <i class="bi bi-arrow-left"></i>

                    Back to Health

                </a>

            </div>

            <form
                action="#"
                method="post"
                id="healthRecordForm">

                <div class="row g-4">

                    <div class="col-lg-8">

                        <div class="record-card">

                            <div class="record-card-header">

                                <h2>
                                    Health Information
                                </h2>

                            </div>

                            <div class="record-card-body">

                                <div class="row g-3">

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

                                            <option value="4">
                                                Buffalo #004
                                            </option>

                                        </select>

                                        <span
                                            id="animalError"
                                            class="validation-error">
                                        </span>

                                    </div>

                                    <div class="col-md-6">

                                        <label
                                            for="recordType"
                                            class="form-label">

                                            Record Type

                                        </label>

                                        <select
                                            id="recordType"
                                            name="recordType"
                                            class="form-select"
                                            data-validation="required">

                                            <option value="">
                                                Select Record Type
                                            </option>

                                            <option value="checkup">
                                                Routine Checkup
                                            </option>

                                            <option value="treatment">
                                                Treatment
                                            </option>

                                            <option value="vaccination">
                                                Vaccination
                                            </option>

                                            <option value="other">
                                                Other
                                            </option>

                                        </select>

                                        <span
                                            id="recordTypeError"
                                            class="validation-error">
                                        </span>

                                    </div>

                                    <div class="col-md-6">

                                        <label
                                            for="checkupDate"
                                            class="form-label">

                                            Checkup Date

                                        </label>

                                        <input
                                            type="date"
                                            id="checkupDate"
                                            name="checkupDate"
                                            class="form-control"
                                            data-validation="required">

                                        <span
                                            id="checkupDateError"
                                            class="validation-error">
                                        </span>

                                    </div>

                                    <div class="col-md-6">

                                        <label
                                            for="healthStatus"
                                            class="form-label">

                                            Health Status

                                        </label>

                                        <select
                                            id="healthStatus"
                                            name="healthStatus"
                                            class="form-select"
                                            data-validation="required">

                                            <option value="">
                                                Select Status
                                            </option>

                                            <option value="healthy">
                                                Healthy
                                            </option>

                                            <option value="treatment">
                                                Under Treatment
                                            </option>

                                            <option value="recovery">
                                                Recovering
                                            </option>

                                            <option value="critical">
                                                Critical
                                            </option>

                                        </select>

                                        <span
                                            id="healthStatusError"
                                            class="validation-error">
                                        </span>

                                    </div>

                                    <div class="col-12">

                                        <label
                                            for="healthIssue"
                                            class="form-label">

                                            Health Issue

                                        </label>

                                        <input
                                            type="text"
                                            id="healthIssue"
                                            name="healthIssue"
                                            class="form-control"
                                            placeholder="Enter health issue">

                                    </div>

                                    <div class="col-12">

                                        <label
                                            for="symptoms"
                                            class="form-label">

                                            Symptoms

                                        </label>

                                        <textarea
                                            id="symptoms"
                                            name="symptoms"
                                            rows="3"
                                            class="form-control"
                                            placeholder="Enter observed symptoms"></textarea>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="record-card">

                            <div class="record-card-header">

                                <h2>
                                    Treatment & Medicine
                                </h2>

                            </div>

                            <div class="record-card-body">

                                <div class="row g-3">

                                    <div class="col-md-6">

                                        <label
                                            for="treatment"
                                            class="form-label">

                                            Treatment

                                        </label>

                                        <input
                                            type="text"
                                            id="treatment"
                                            name="treatment"
                                            class="form-control"
                                            placeholder="Enter treatment">

                                    </div>

                                    <div class="col-md-6">

                                        <label
                                            for="medicine"
                                            class="form-label">

                                            Medicine

                                        </label>

                                        <input
                                            type="text"
                                            id="medicine"
                                            name="medicine"
                                            class="form-control"
                                            placeholder="Enter medicine">

                                    </div>

                                    <div class="col-md-6">

                                        <label
                                            for="dosage"
                                            class="form-label">

                                            Dosage

                                        </label>

                                        <input
                                            type="text"
                                            id="dosage"
                                            name="dosage"
                                            class="form-control"
                                            placeholder="Example: 10 ml twice daily">

                                    </div>

                                    <div class="col-md-6">

                                        <label
                                            for="treatmentDate"
                                            class="form-label">

                                            Treatment Date

                                        </label>

                                        <input
                                            type="date"
                                            id="treatmentDate"
                                            name="treatmentDate"
                                            class="form-control">

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="record-card">

                            <div class="record-card-header">

                                <h2>
                                    Vaccination Information
                                </h2>

                            </div>

                            <div class="record-card-body">

                                <div class="row g-3">

                                    <div class="col-md-6">

                                        <label
                                            for="vaccineName"
                                            class="form-label">

                                            Vaccine Name

                                        </label>

                                        <input
                                            type="text"
                                            id="vaccineName"
                                            name="vaccineName"
                                            class="form-control"
                                            placeholder="Enter vaccine name">

                                    </div>

                                    <div class="col-md-6">

                                        <label
                                            for="vaccinationDate"
                                            class="form-label">

                                            Vaccination Date

                                        </label>

                                        <input
                                            type="date"
                                            id="vaccinationDate"
                                            name="vaccinationDate"
                                            class="form-control">

                                    </div>

                                    <div class="col-md-6">

                                        <label
                                            for="nextDueDate"
                                            class="form-label">

                                            Next Due Date

                                        </label>

                                        <input
                                            type="date"
                                            id="nextDueDate"
                                            name="nextDueDate"
                                            class="form-control">

                                    </div>

                                    <div class="col-md-6">

                                        <label
                                            for="vetName"
                                            class="form-label">

                                            Veterinarian

                                        </label>

                                        <input
                                            type="text"
                                            id="vetName"
                                            name="vetName"
                                            class="form-control"
                                            placeholder="Enter veterinarian name">

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="record-card">

                            <div class="record-card-header">

                                <h2>
                                    Additional Information
                                </h2>

                            </div>

                            <div class="record-card-body">

                                <label
                                    for="notes"
                                    class="form-label">

                                    Notes

                                </label>

                                <textarea
                                    id="notes"
                                    name="notes"
                                    rows="5"
                                    class="form-control"
                                    placeholder="Enter additional notes"></textarea>

                            </div>

                        </div>

                        <div class="form-actions">

                            <a
                                href="health.php"
                                class="cancel-btn">

                                Cancel

                            </a>

                            <button
                                type="submit"
                                class="save-btn">

                                <i class="bi bi-check-lg"></i>

                                Save Health Record

                            </button>

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="health-info-card">

                            <div class="info-icon">

                                <i class="bi bi-heart-pulse"></i>

                            </div>

                            <h3>
                                Health Record
                            </h3>

                            <p>
                                Keep accurate health records for every
                                animal to track treatment, vaccination
                                and regular checkups.
                            </p>

                            <div class="info-list">

                                <div>

                                    <i class="bi bi-check-circle"></i>

                                    <span>
                                        Record health issues
                                    </span>

                                </div>

                                <div>

                                    <i class="bi bi-check-circle"></i>

                                    <span>
                                        Track treatments
                                    </span>

                                </div>

                                <div>

                                    <i class="bi bi-check-circle"></i>

                                    <span>
                                        Manage vaccinations
                                    </span>

                                </div>

                                <div>

                                    <i class="bi bi-check-circle"></i>

                                    <span>
                                        Schedule next checkup
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>

    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>

    <script src="/SmartDairy/js/validation.js"></script>

    <script src="/SmartDairy/js/health_record.js"></script>

</body>

</html>