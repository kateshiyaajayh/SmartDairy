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

    <title>Animals - SmartDairy Pro</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/animals.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="animals-page">

        <div class="container-fluid">

            <div class="page-heading">

                <div>
                    <h1>Animals</h1>
                    <p>Manage and track all animals on your dairy farm.</p>
                </div>

                <a href="add_animal.php" class="add-animal-btn">
                    <i class="bi bi-plus-lg"></i>
                    Add Animal
                </a>

            </div>


            <div class="row g-4 animal-summary">

                <div class="col-md-6 col-xl-3">

                    <div class="animal-summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-grid-3x3-gap"></i>
                        </div>

                        <div>
                            <span>Total Animals</span>
                            <strong>0</strong>
                        </div>

                    </div>

                </div>


                <div class="col-md-6 col-xl-3">

                    <div class="animal-summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-grid-3x3-gap"></i>
                        </div>

                        <div>
                            <span>Cows</span>
                            <strong>0</strong>
                        </div>

                    </div>

                </div>


                <div class="col-md-6 col-xl-3">

                    <div class="animal-summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-grid-3x3-gap"></i>
                        </div>

                        <div>
                            <span>Buffaloes</span>
                            <strong>0</strong>
                        </div>

                    </div>

                </div>


                <div class="col-md-6 col-xl-3">

                    <div class="animal-summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-heart-pulse"></i>
                        </div>

                        <div>
                            <span>Under Treatment</span>
                            <strong>0</strong>
                        </div>

                    </div>

                </div>

            </div>


            <div class="animals-panel">

                <div class="panel-heading">

                    <div>
                        <h2>Animal Records</h2>
                        <p>View and manage your registered animals.</p>
                    </div>

                    <div class="animal-search">

                        <i class="bi bi-search"></i>

                        <input
                            type="text"
                            id="animalSearch"
                            placeholder="Search animals...">

                    </div>

                </div>


                <div class="table-responsive">

                    <table class="table animals-table">

                        <thead>

                            <tr>
                                <th>ID</th>
                                <th>Animal</th>
                                <th>Type</th>
                                <th>Breed</th>
                                <th>Age</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td>#001</td>
                                <td>Cow #001</td>
                                <td>Cow</td>
                                <td>Gir</td>
                                <td>4 Years</td>
                                <td>
                                    <span class="animal-status healthy">
                                        Healthy
                                    </span>
                                </td>
                                <td>
                                    <a href="#" class="table-action">
                                        View
                                    </a>
                                </td>
                            </tr>


                            <tr>
                                <td>#002</td>
                                <td>Cow #002</td>
                                <td>Cow</td>
                                <td>HF</td>
                                <td>3 Years</td>
                                <td>
                                    <span class="animal-status healthy">
                                        Healthy
                                    </span>
                                </td>
                                <td>
                                    <a href="#" class="table-action">
                                        View
                                    </a>
                                </td>
                            </tr>


                            <tr>
                                <td>#003</td>
                                <td>Buffalo #001</td>
                                <td>Buffalo</td>
                                <td>Jaffarabadi</td>
                                <td>5 Years</td>
                                <td>
                                    <span class="animal-status treatment">
                                        Treatment
                                    </span>
                                </td>
                                <td>
                                    <a href="#" class="table-action">
                                        View
                                    </a>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/animals.js"></script>

</body>

</html>