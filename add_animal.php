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

    <title>Add Animal - SmartDairy Pro</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/add_animal.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="add-animal-page">

        <div class="container-fluid">

            <div class="page-heading">

                <div>
                    <h1>Add Animal</h1>
                    <p>Register a new animal in your dairy farm.</p>
                </div>

                <a href="animals.php" class="back-btn">
                    <i class="bi bi-arrow-left"></i>
                    Back to Animals
                </a>

            </div>


            <div class="animal-form-panel">

                <form id="animalForm" method="POST">

                    <div class="form-section">

                        <div class="section-title">
                            <h2>Basic Information</h2>
                            <p>Enter the basic details of the animal.</p>
                        </div>


                        <div class="row g-3">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="animalId">
                                        Animal ID
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-hash"></i>

                                        <input
                                            type="text"
                                            id="animalId"
                                            name="animalId"
                                            placeholder="Enter animal ID"
                                            data-validation="required">

                                    </div>

                                    <span
                                        id="animalIdError"
                                        class="error-message">
                                    </span>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="animalType">
                                        Animal Type
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-grid-3x3-gap"></i>

                                        <select
                                            id="animalType"
                                            name="animalType"
                                            data-validation="required">

                                            <option value="">
                                                Select animal type
                                            </option>

                                            <option value="Cow">
                                                Cow
                                            </option>

                                            <option value="Buffalo">
                                                Buffalo
                                            </option>

                                        </select>

                                    </div>

                                    <span
                                        id="animalTypeError"
                                        class="error-message">
                                    </span>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="breed">
                                        Breed
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-diagram-3"></i>

                                        <input
                                            type="text"
                                            id="breed"
                                            name="breed"
                                            placeholder="Enter breed"
                                            data-validation="required alpha">

                                    </div>

                                    <span
                                        id="breedError"
                                        class="error-message">
                                    </span>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="gender">
                                        Gender
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-person"></i>

                                        <select
                                            id="gender"
                                            name="gender"
                                            data-validation="required">

                                            <option value="">
                                                Select gender
                                            </option>

                                            <option value="Male">
                                                Male
                                            </option>

                                            <option value="Female">
                                                Female
                                            </option>

                                        </select>

                                    </div>

                                    <span
                                        id="genderError"
                                        class="error-message">
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="form-section">

                        <div class="section-title">
                            <h2>Animal Details</h2>
                            <p>Enter age and purchase information.</p>
                        </div>


                        <div class="row g-3">

                            <div class="col-md-4">

                                <div class="form-group">

                                    <label for="dateOfBirth">
                                        Date of Birth
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-calendar3"></i>

                                        <input
                                            type="date"
                                            id="dateOfBirth"
                                            name="dateOfBirth">

                                    </div>

                                </div>

                            </div>


                            <div class="col-md-4">

                                <div class="form-group">

                                    <label for="purchaseDate">
                                        Purchase Date
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-calendar-check"></i>

                                        <input
                                            type="date"
                                            id="purchaseDate"
                                            name="purchaseDate">

                                    </div>

                                </div>

                            </div>


                            <div class="col-md-4">

                                <div class="form-group">

                                    <label for="purchasePrice">
                                        Purchase Price
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-currency-rupee"></i>

                                        <input
                                            type="number"
                                            id="purchasePrice"
                                            name="purchasePrice"
                                            placeholder="Enter amount"
                                            min="0">

                                    </div>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="milkCapacity">
                                        Average Milk Capacity
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-droplet"></i>

                                        <input
                                            type="number"
                                            id="milkCapacity"
                                            name="milkCapacity"
                                            placeholder="Litres per day"
                                            min="0"
                                            step="0.1">

                                    </div>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="status">
                                        Current Status
                                    </label>

                                    <div class="input-box">

                                        <i class="bi bi-heart-pulse"></i>

                                        <select
                                            id="status"
                                            name="status">

                                            <option value="Healthy">
                                                Healthy
                                            </option>

                                            <option value="Under Treatment">
                                                Under Treatment
                                            </option>

                                            <option value="Pregnant">
                                                Pregnant
                                            </option>

                                            <option value="Inactive">
                                                Inactive
                                            </option>

                                        </select>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="form-section">

                        <div class="section-title">
                            <h2>Additional Information</h2>
                            <p>Add any extra information about the animal.</p>
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

                        <a href="animals.php" class="cancel-btn">
                            Cancel
                        </a>

                        <button type="submit" class="save-btn">
                            <i class="bi bi-check-lg"></i>
                            Save Animal
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
    <script src="js/add_animal.js"></script>

</body>

</html>