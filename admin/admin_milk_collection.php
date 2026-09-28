<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milk Collection - SmartDairy Pro</title>

    <link rel="stylesheet" href="/SmartDairy/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_header.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_sidebar.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_footer.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_layout.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_milk_collection.css">
</head>

<body>

    <?php include "includes/admin_header.php"; ?>
    <?php include "includes/admin_sidebar.php"; ?>

    <main class="admin-page milk-page">
        <div class="container-fluid">

            <div class="page-header">
                <div>
                    <h1>Milk Collection</h1>
                    <p>Manage daily milk collection records and quality details.</p>
                </div>
            </div>

            <div class="row g-4 milk-summary">
                <div class="col-md-6 col-xl-3">
                    <div class="summary-card">
                        <span class="summary-icon"><i class="bi bi-droplet"></i></span>
                        <div><span>Today's Collection</span><h2>1,248 L</h2></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="summary-card">
                        <span class="summary-icon"><i class="bi bi-calendar-week"></i></span>
                        <div><span>This Week</span><h2>8,642 L</h2></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="summary-card">
                        <span class="summary-icon"><i class="bi bi-calendar3"></i></span>
                        <div><span>This Month</span><h2>32,480 L</h2></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="summary-card">
                        <span class="summary-icon"><i class="bi bi-percent"></i></span>
                        <div><span>Average Fat</span><h2>4.2%</h2></div>
                    </div>
                </div>
            </div>

            <div class="content-card">
                <div class="toolbar row g-3">
                    <div class="col-lg-3">
                        <div class="search-box">
                            <i class="bi bi-search"></i>
                            <input type="search" id="milkSearch" placeholder="Search farmer or animal ID" aria-label="Search milk records">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <select class="form-select" id="milkType" aria-label="Filter by milk type">
                            <option value="all">All Types</option>
                            <option value="cow">Cow</option>
                            <option value="buffalo">Buffalo</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <select class="form-select" id="milkSession" aria-label="Filter by collection session">
                            <option value="all">All Sessions</option>
                            <option value="morning">Morning</option>
                            <option value="evening">Evening</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <select class="form-select" id="milkDate" aria-label="Filter by date">
                            <option value="all">All Dates</option>
                            <option value="today">Today</option>
                            <option value="week">This Week</option>
                            <option value="month">This Month</option>
                        </select>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table milk-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Farmer</th>
                                <th>Animal</th>
                                <th>Type</th>
                                <th>Session</th>
                                <th>Quantity</th>
                                <th>Fat</th>
                                <th>SNF</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-search="rajesh patel gauri an-001" data-type="cow" data-session="morning" data-date="2026-09-28">
                                <td>28 Sep 2026</td>
                                <td>Rajesh Patel</td>
                                <td><div class="milk-name"><span class="milk-icon"><i class="bi bi-droplet"></i></span><span>Gauri<small>AN-001</small></span></div></td>
                                <td>Cow</td>
                                <td>Morning</td>
                                <td>86 L</td>
                                <td>4.2%</td>
                                <td>8.6%</td>
                                <td>₹4,214</td>
                                <td><a href="admin_milk_details.php?id=1" class="view-btn">View</a></td>
                            </tr>
                            <tr data-search="mehul shah rani an-002" data-type="buffalo" data-session="morning" data-date="2026-09-28">
                                <td>28 Sep 2026</td>
                                <td>Mehul Shah</td>
                                <td><div class="milk-name"><span class="milk-icon"><i class="bi bi-droplet"></i></span><span>Rani<small>AN-002</small></span></div></td>
                                <td>Buffalo</td>
                                <td>Morning</td>
                                <td>72 L</td>
                                <td>4.4%</td>
                                <td>8.8%</td>
                                <td>₹3,528</td>
                                <td><a href="admin_milk_details.php?id=2" class="view-btn">View</a></td>
                            </tr>
                            <tr data-search="kiran joshi kamdhenu an-003" data-type="cow" data-session="evening" data-date="2026-09-27">
                                <td>27 Sep 2026</td>
                                <td>Kiran Joshi</td>
                                <td><div class="milk-name"><span class="milk-icon"><i class="bi bi-droplet"></i></span><span>Kamdhenu<small>AN-003</small></span></div></td>
                                <td>Cow</td>
                                <td>Evening</td>
                                <td>65 L</td>
                                <td>4.1%</td>
                                <td>8.5%</td>
                                <td>₹3,185</td>
                                <td><a href="admin_milk_details.php?id=3" class="view-btn">View</a></td>
                            </tr>
                            <tr data-search="amit parmar moti an-004" data-type="buffalo" data-session="morning" data-date="2026-09-27">
                                <td>27 Sep 2026</td>
                                <td>Amit Parmar</td>
                                <td><div class="milk-name"><span class="milk-icon"><i class="bi bi-droplet"></i></span><span>Moti<small>AN-004</small></span></div></td>
                                <td>Buffalo</td>
                                <td>Morning</td>
                                <td>58 L</td>
                                <td>4.3%</td>
                                <td>8.7%</td>
                                <td>₹2,842</td>
                                <td><a href="admin_milk_details.php?id=4" class="view-btn">View</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="empty-message" id="noMilkRecords">No milk records found.</div>
            </div>

        </div>
    </main>

    <?php include "includes/admin_footer.php"; ?>

    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>
    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>
    <script src="/SmartDairy/admin/js/admin_milk_collection.js"></script>
</body>

</html>
