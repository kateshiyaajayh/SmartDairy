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

    <title>Dashboard - SmartDairy Pro</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <?php include "includes/header.php"; ?>


    <main class="dashboard">

        <div class="container-fluid">

            <div class="dashboard-heading">

                <div>
                    <h1>
                        Welcome back,
                        <?php echo htmlspecialchars($_SESSION["full_name"]); ?>
                    </h1>

                    <p>
                        Here's what's happening on your dairy farm today.
                    </p>
                </div>

                <div class="dashboard-date">
                    <i class="bi bi-calendar3"></i>
                    <span><?php echo date("d M Y"); ?></span>
                </div>

            </div>


            <div class="row g-4 dashboard-cards">

                <div class="col-md-6 col-xl-3">

                    <div class="summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-people"></i>
                        </div>

                        <div class="summary-content">
                            <p>Total Animals</p>
                            <h2>0</h2>
                            <span>Registered animals</span>
                        </div>

                    </div>

                </div>


                <div class="col-md-6 col-xl-3">

                    <div class="summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-droplet"></i>
                        </div>

                        <div class="summary-content">
                            <p>Today's Milk</p>
                            <h2>0 L</h2>
                            <span>Milk collected today</span>
                        </div>

                    </div>

                </div>


                <div class="col-md-6 col-xl-3">

                    <div class="summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-currency-rupee"></i>
                        </div>

                        <div class="summary-content">
                            <p>Today's Sales</p>
                            <h2>₹0</h2>
                            <span>Sales recorded today</span>
                        </div>

                    </div>

                </div>


                <div class="col-md-6 col-xl-3">

                    <div class="summary-card">

                        <div class="summary-icon">
                            <i class="bi bi-heart-pulse"></i>
                        </div>

                        <div class="summary-content">
                            <p>Health Due</p>
                            <h2>0</h2>
                            <span>Upcoming health tasks</span>
                        </div>

                    </div>

                </div>

            </div>
            <div class="quick-actions">

                <div class="section-heading">
                    <div>
                        <h2>Quick Actions</h2>
                        <p>Manage your dairy records quickly.</p>
                    </div>
                </div>


                <div class="row g-3">

                    <div class="col-sm-6 col-lg-3">

                        <a href="animals.php" class="action-card">

                            <span class="action-icon">
                                <i class="bi bi-plus-lg"></i>
                            </span>

                            <span class="action-content">
                                <strong>Add Animal</strong>
                                <small>Register a new animal</small>
                            </span>

                            <i class="bi bi-arrow-up-right action-arrow"></i>

                        </a>

                    </div>


                    <div class="col-sm-6 col-lg-3">

                        <a href="milk_collection.php" class="action-card">

                            <span class="action-icon">
                                <i class="bi bi-droplet"></i>
                            </span>

                            <span class="action-content">
                                <strong>Record Milk</strong>
                                <small>Add today's milk collection</small>
                            </span>

                            <i class="bi bi-arrow-up-right action-arrow"></i>

                        </a>

                    </div>


                    <div class="col-sm-6 col-lg-3">

                        <a href="sales.php" class="action-card">

                            <span class="action-icon">
                                <i class="bi bi-currency-rupee"></i>
                            </span>

                            <span class="action-content">
                                <strong>Add Sale</strong>
                                <small>Record a new sale</small>
                            </span>

                            <i class="bi bi-arrow-up-right action-arrow"></i>

                        </a>

                    </div>


                    <div class="col-sm-6 col-lg-3">

                        <a href="health.php" class="action-card">

                            <span class="action-icon">
                                <i class="bi bi-heart-pulse"></i>
                            </span>

                            <span class="action-content">
                                <strong>Health Record</strong>
                                <small>Add health information</small>
                            </span>

                            <i class="bi bi-arrow-up-right action-arrow"></i>

                        </a>

                    </div>

                </div>

            </div>
            <div class="dashboard-overview">

                <div class="row g-4">

                    <div class="col-lg-8">

                        <div class="dashboard-panel">

                            <div class="panel-heading">
                                <div>
                                    <h2>Milk Collection Overview</h2>
                                    <p>Milk collected during the last 7 days.</p>
                                </div>

                                <a href="milk_collection.php">
                                    View All
                                </a>
                            </div>


                            <div class="milk-summary">

                                <div>
                                    <span>Today</span>
                                    <strong>0 L</strong>
                                </div>

                                <div>
                                    <span>This Week</span>
                                    <strong>0 L</strong>
                                </div>

                                <div>
                                    <span>This Month</span>
                                    <strong>0 L</strong>
                                </div>

                            </div>


                            <div class="milk-chart">

                                <div class="chart-bars">

                                    <div class="chart-item">
                                        <span class="bar" style="height: 35%;"></span>
                                        <small>Mon</small>
                                    </div>

                                    <div class="chart-item">
                                        <span class="bar" style="height: 55%;"></span>
                                        <small>Tue</small>
                                    </div>

                                    <div class="chart-item">
                                        <span class="bar" style="height: 45%;"></span>
                                        <small>Wed</small>
                                    </div>

                                    <div class="chart-item">
                                        <span class="bar" style="height: 70%;"></span>
                                        <small>Thu</small>
                                    </div>

                                    <div class="chart-item">
                                        <span class="bar" style="height: 60%;"></span>
                                        <small>Fri</small>
                                    </div>

                                    <div class="chart-item">
                                        <span class="bar" style="height: 80%;"></span>
                                        <small>Sat</small>
                                    </div>

                                    <div class="chart-item">
                                        <span class="bar" style="height: 65%;"></span>
                                        <small>Sun</small>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="col-lg-4">

                        <div class="dashboard-panel animal-overview">

                            <div class="panel-heading">
                                <div>
                                    <h2>Animal Overview</h2>
                                    <p>Current animal records.</p>
                                </div>

                                <a href="animals.php">
                                    View All
                                </a>
                            </div>


                            <div class="animal-list">

                                <div class="animal-row">
                                    <div class="animal-icon">
                                        <i class="bi bi-grid-3x3-gap"></i>
                                    </div>

                                    <div>
                                        <strong>Cows</strong>
                                        <span>0 animals</span>
                                    </div>

                                    <b>0</b>
                                </div>


                                <div class="animal-row">
                                    <div class="animal-icon">
                                        <i class="bi bi-grid-3x3-gap"></i>
                                    </div>

                                    <div>
                                        <strong>Buffaloes</strong>
                                        <span>0 animals</span>
                                    </div>

                                    <b>0</b>
                                </div>


                                <div class="animal-row">
                                    <div class="animal-icon">
                                        <i class="bi bi-heart-pulse"></i>
                                    </div>

                                    <div>
                                        <strong>Healthy</strong>
                                        <span>Healthy animals</span>
                                    </div>

                                    <b>0</b>
                                </div>


                                <div class="animal-row">
                                    <div class="animal-icon">
                                        <i class="bi bi-heart-pulse"></i>
                                    </div>

                                    <div>
                                        <strong>Under Treatment</strong>
                                        <span>Needs attention</span>
                                    </div>

                                    <b>0</b>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <div class="dashboard-health">

                <div class="row g-4">

                    <div class="col-lg-7">

                        <div class="dashboard-panel">

                            <div class="panel-heading">
                                <div>
                                    <h2>Health & Vaccination</h2>
                                    <p>Upcoming health activities for your animals.</p>
                                </div>

                                <a href="health.php">
                                    View All
                                </a>
                            </div>


                            <div class="health-list">

                                <div class="health-item">

                                    <div class="health-icon warning">
                                        <i class="bi bi-shield-exclamation"></i>
                                    </div>

                                    <div class="health-info">
                                        <strong>Vaccination Due</strong>
                                        <span>Cow #001 · Due in 3 days</span>
                                    </div>

                                    <span class="health-status warning">
                                        Due Soon
                                    </span>

                                </div>


                                <div class="health-item">

                                    <div class="health-icon warning">
                                        <i class="bi bi-calendar2-check"></i>
                                    </div>

                                    <div class="health-info">
                                        <strong>Health Checkup</strong>
                                        <span>Cow #004 · Due in 5 days</span>
                                    </div>

                                    <span class="health-status warning">
                                        Upcoming
                                    </span>

                                </div>


                                <div class="health-item">

                                    <div class="health-icon success">
                                        <i class="bi bi-check-circle"></i>
                                    </div>

                                    <div class="health-info">
                                        <strong>Vaccination Completed</strong>
                                        <span>Cow #007 · 25 Sep 2026</span>
                                    </div>

                                    <span class="health-status success">
                                        Completed
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="col-lg-5">

                        <div class="dashboard-panel">

                            <div class="panel-heading">
                                <div>
                                    <h2>Current Milk Rates</h2>
                                    <p>Latest available milk rates.</p>
                                </div>

                                <a href="rates.php">
                                    View All
                                </a>
                            </div>


                            <div class="rate-list">

                                <div class="rate-item">

                                    <div class="rate-icon">
                                        <i class="bi bi-droplet"></i>
                                    </div>

                                    <div class="rate-info">
                                        <strong>Cow Milk</strong>
                                        <span>Per litre</span>
                                    </div>

                                    <strong class="rate-value">
                                        ₹45
                                    </strong>

                                </div>


                                <div class="rate-item">

                                    <div class="rate-icon">
                                        <i class="bi bi-droplet"></i>
                                    </div>

                                    <div class="rate-info">
                                        <strong>Buffalo Milk</strong>
                                        <span>Per litre</span>
                                    </div>

                                    <strong class="rate-value">
                                        ₹58
                                    </strong>

                                </div>


                                <div class="rate-footer">
                                    Updated today
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <div class="recent-milk">

                <div class="dashboard-panel">

                    <div class="panel-heading">
                        <div>
                            <h2>Recent Milk Collection</h2>
                            <p>Latest milk collection records.</p>
                        </div>

                        <a href="milk_collection.php">
                            View All
                        </a>
                    </div>

                    <div class="table-responsive">

                        <table class="table recent-table">

                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Animal</th>
                                    <th>Quantity</th>
                                    <th>Fat</th>
                                    <th>SNF</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>26 Sep 2026</td>
                                    <td>Cow #001</td>
                                    <td>8.5 L</td>
                                    <td>4.2%</td>
                                    <td>8.6%</td>
                                </tr>

                                <tr>
                                    <td>26 Sep 2026</td>
                                    <td>Buffalo #002</td>
                                    <td>6.2 L</td>
                                    <td>6.8%</td>
                                    <td>9.1%</td>
                                </tr>

                                <tr>
                                    <td>25 Sep 2026</td>
                                    <td>Cow #003</td>
                                    <td>7.8 L</td>
                                    <td>4.1%</td>
                                    <td>8.5%</td>
                                </tr>

                                <tr>
                                    <td>25 Sep 2026</td>
                                    <td>Buffalo #004</td>
                                    <td>7.1 L</td>
                                    <td>6.5%</td>
                                    <td>8.9%</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
            <div class="recent-sales">

                <div class="dashboard-panel">

                    <div class="panel-heading">
                        <div>
                            <h2>Recent Sales</h2>
                            <p>Latest sales recorded on your farm.</p>
                        </div>

                        <a href="sales.php">
                            View All
                        </a>
                    </div>

                    <div class="table-responsive">

                        <table class="table recent-table">

                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Customer</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>26 Sep 2026</td>
                                    <td>Rajesh Patel</td>
                                    <td>Milk</td>
                                    <td>10 L</td>
                                    <td>₹450</td>
                                    <td>
                                        <span class="sale-status completed">
                                            Completed
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>26 Sep 2026</td>
                                    <td>Mahesh Dairy</td>
                                    <td>Milk</td>
                                    <td>18 L</td>
                                    <td>₹810</td>
                                    <td>
                                        <span class="sale-status completed">
                                            Completed
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>25 Sep 2026</td>
                                    <td>Vijay Parmar</td>
                                    <td>Milk</td>
                                    <td>12 L</td>
                                    <td>₹540</td>
                                    <td>
                                        <span class="sale-status pending">
                                            Pending
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>25 Sep 2026</td>
                                    <td>Krishna Dairy</td>
                                    <td>Milk</td>
                                    <td>20 L</td>
                                    <td>₹900</td>
                                    <td>
                                        <span class="sale-status completed">
                                            Completed
                                        </span>
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
            <div class="dashboard-alerts">

                <div class="dashboard-panel">

                    <div class="panel-heading">
                        <div>
                            <h2>Notifications & Alerts</h2>
                            <p>Important updates that need your attention.</p>
                        </div>

                        <a href="#">
                            View All
                        </a>
                    </div>

                    <div class="alert-list">

                        <div class="alert-item">

                            <div class="alert-icon warning">
                                <i class="bi bi-shield-exclamation"></i>
                            </div>

                            <div class="alert-content">
                                <strong>Vaccination Due</strong>
                                <span>Cow #001 vaccination is due in 3 days.</span>
                            </div>

                            <span class="alert-date">
                                Today
                            </span>

                        </div>


                        <div class="alert-item">

                            <div class="alert-icon warning">
                                <i class="bi bi-calendar2-check"></i>
                            </div>

                            <div class="alert-content">
                                <strong>Health Checkup</strong>
                                <span>Cow #004 health checkup is scheduled soon.</span>
                            </div>

                            <span class="alert-date">
                                Today
                            </span>

                        </div>


                        <div class="alert-item">

                            <div class="alert-icon info">
                                <i class="bi bi-droplet"></i>
                            </div>

                            <div class="alert-content">
                                <strong>Milk Rate Updated</strong>
                                <span>Current buffalo milk rate is ₹58 per litre.</span>
                            </div>

                            <span class="alert-date">
                                1 day ago
                            </span>

                        </div>


                        <div class="alert-item">

                            <div class="alert-icon danger">
                                <i class="bi bi-currency-rupee"></i>
                            </div>

                            <div class="alert-content">
                                <strong>Pending Payment</strong>
                                <span>₹540 payment is pending from Vijay Parmar.</span>
                            </div>

                            <span class="alert-date">
                                2 days ago
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>


    <?php include "includes/footer.php"; ?>


    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>