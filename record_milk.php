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

    <title>Record Milk - SmartDairy Pro</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/record_milk.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="record-milk-page">

        <div class="container-fluid">

            <div class="page-heading">

                <div>
                    <h1>Record Milk</h1>
                    <p>Add a new milk collection record.</p>
                </div>

                <a href="milk_collection.php" class="back-btn">
                    <i class="bi bi-arrow-left"></i>
                    Back to Collection
                </a>

            </div>


            <div class="record-form-panel">

                <form id="milkForm" method="POST">

                    <div class="form-section">

                        <div class="section-title">
                            <h2>Collection Information</h2>
                            <p>Enter the basic milk collection details.</p>
                        </div>


                        <div class="row g-3">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="animal">
                                        Animal
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-grid-3x3-gap"></i>

                                        <select
                                            id="animal"
                                            name="animal"
                                            data-validation="required">

                                            <option value="">
                                                Select animal
                                            </option>

                                            <option value="Cow #001">
                                                Cow #001
                                            </option>

                                            <option value="Cow #002">
                                                Cow #002
                                            </option>

                                            <option value="Buffalo #001">
                                                Buffalo #001
                                            </option>

                                            <option value="Buffalo #002">
                                                Buffalo #002
                                            </option>

                                        </select>

                                    </div>

                                    <span
                                        id="animalError"
                                        class="error-message">
                                    </span>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="collectionDate">
                                        Collection Date
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-calendar3"></i>

                                        <input
                                            type="date"
                                            id="collectionDate"
                                            name="collectionDate"
                                            data-validation="required">

                                    </div>

                                    <span
                                        id="collectionDateError"
                                        class="error-message">
                                    </span>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="session">
                                        Collection Session
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-clock"></i>

                                        <select
                                            id="session"
                                            name="session"
                                            data-validation="required">

                                            <option value="">
                                                Select session
                                            </option>

                                            <option value="Morning">
                                                Morning
                                            </option>

                                            <option value="Evening">
                                                Evening
                                            </option>

                                        </select>

                                    </div>

                                    <span
                                        id="sessionError"
                                        class="error-message">
                                    </span>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="quantity">
                                        Milk Quantity
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-droplet"></i>

                                        <input
                                            type="number"
                                            id="quantity"
                                            name="quantity"
                                            placeholder="Enter quantity in litres"
                                            min="0"
                                            step="0.1"
                                            data-validation="required">

                                    </div>

                                    <span
                                        id="quantityError"
                                        class="error-message">
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="form-section">

                        <div class="section-title">
                            <h2>Milk Quality</h2>
                            <p>Enter the quality details of the collected milk.</p>
                        </div>


                        <div class="row g-3">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="fat">
                                        Fat Percentage
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-percent"></i>

                                        <input
                                            type="number"
                                            id="fat"
                                            name="fat"
                                            placeholder="Enter fat percentage"
                                            min="0"
                                            step="0.1">

                                    </div>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="snf">
                                        SNF Percentage
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-percent"></i>

                                        <input
                                            type="number"
                                            id="snf"
                                            name="snf"
                                            placeholder="Enter SNF percentage"
                                            min="0"
                                            step="0.1">

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="form-section">

                        <div class="section-title">
                            <h2>Additional Information</h2>
                            <p>Add any notes related to this collection.</p>
                        </div>


                        <div class="form-group">

                            <label for="notes">
                                Notes
                            </label>

                            <textarea
                                id="notes"
                                name="notes"
                                rows="4"
                                placeholder="Enter additional information..."></textarea>

                        </div>

                    </div>


                    <div class="form-actions">

                        <a href="milk_collection.php" class="cancel-btn">
                            Cancel
                        </a>

                        <button type="submit" class="save-btn">
                            <i class="bi bi-check-lg"></i>
                            Save Collection
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/record_milk.js"></script>

</body>

</html>