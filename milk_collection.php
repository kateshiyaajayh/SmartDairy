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

    <title>Milk Collection - SmartDairy Pro</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/milk_collection.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="milk-page">

        <div class="container-fluid">

            <div class="page-heading">

                <div>
                    <h1>Milk Collection</h1>
                    <p>Track and manage daily milk collection records.</p>
                </div>

                <a href="record_milk.php" class="record-btn">
                    <i class="bi bi-plus-lg"></i>
                    Record Milk
                </a>

            </div>


            <div class="row g-4 milk-summary">

                <div class="col-md-6 col-xl-3">

                    <div class="milk-summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-droplet"></i>
                        </div>

                        <div>
                            <span>Today's Collection</span>
                            <strong>0 L</strong>
                        </div>

                    </div>

                </div>


                <div class="col-md-6 col-xl-3">

                    <div class="milk-summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-calendar-week"></i>
                        </div>

                        <div>
                            <span>This Week</span>
                            <strong>0 L</strong>
                        </div>

                    </div>

                </div>


                <div class="col-md-6 col-xl-3">

                    <div class="milk-summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-calendar-month"></i>
                        </div>

                        <div>
                            <span>This Month</span>
                            <strong>0 L</strong>
                        </div>

                    </div>

                </div>


                <div class="col-md-6 col-xl-3">

                    <div class="milk-summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-percent"></i>
                        </div>

                        <div>
                            <span>Average Fat</span>
                            <strong>0%</strong>
                        </div>

                    </div>

                </div>

            </div>


            <div class="milk-panel">

                <div class="panel-heading">

                    <div>
                        <h2>Milk Collection Records</h2>
                        <p>View and manage your recent milk collection.</p>
                    </div>

                </div>


                <div class="filter-row">

                    <div class="search-box">

                        <i class="bi bi-search"></i>

                        <input
                            type="text"
                            id="milkSearch"
                            placeholder="Search animal...">

                    </div>


                    <div class="filter-box">

                        <select id="animalTypeFilter">

                            <option value="">
                                All Animal Types
                            </option>

                            <option value="Cow">
                                Cow
                            </option>

                            <option value="Buffalo">
                                Buffalo
                            </option>

                        </select>

                    </div>


                    <div class="filter-box">

                        <input
                            type="date"
                            id="collectionDate">

                    </div>

                </div>


                <div class="table-responsive">

                    <table class="table milk-table">

                        <thead>

                            <tr>
                                <th>Date</th>
                                <th>Animal</th>
                                <th>Type</th>
                                <th>Session</th>
                                <th>Quantity</th>
                                <th>Fat</th>
                                <th>SNF</th>
                                <th>Action</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td>26 Sep 2026</td>
                                <td>Cow #001</td>
                                <td>Cow</td>
                                <td>Morning</td>
                                <td>8.5 L</td>
                                <td>4.2%</td>
                                <td>8.6%</td>
                                <td>
                                    <a href="#" class="table-action">
                                        View
                                    </a>
                                </td>
                            </tr>


                            <tr>
                                <td>26 Sep 2026</td>
                                <td>Buffalo #002</td>
                                <td>Buffalo</td>
                                <td>Morning</td>
                                <td>6.2 L</td>
                                <td>6.8%</td>
                                <td>9.1%</td>
                                <td>
                                    <a href="#" class="table-action">
                                        View
                                    </a>
                                </td>
                            </tr>


                            <tr>
                                <td>25 Sep 2026</td>
                                <td>Cow #003</td>
                                <td>Cow</td>
                                <td>Evening</td>
                                <td>7.8 L</td>
                                <td>4.1%</td>
                                <td>8.5%</td>
                                <td>
                                    <a href="#" class="table-action">
                                        View
                                    </a>
                                </td>
                            </tr>


                            <tr>
                                <td>25 Sep 2026</td>
                                <td>Buffalo #004</td>
                                <td>Buffalo</td>
                                <td>Evening</td>
                                <td>7.1 L</td>
                                <td>6.5%</td>
                                <td>8.9%</td>
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
    <script src="js/milk_collection.js"></script>

</body>

</html>