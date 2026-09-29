<?php
require_once __DIR__ . "/includes/admin_auth.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments - SmartDairy Pro</title>
    <link rel="stylesheet" href="/SmartDairy/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_header.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_sidebar.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_footer.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_layout.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_module.css">
</head>

<body>
    <?php include "includes/admin_header.php"; ?>
    <?php include "includes/admin_sidebar.php"; ?>
    <main class="admin-page">
        <div class="container-fluid">
            <div class="page-header">
                <div>
                    <h1>Appointments</h1>
                    <p>Review veterinary appointments requested by farmers.</p>
                </div>
            </div>
            <div class="row g-4 module-summary">
                <div class="col-md-6 col-xl-3">
                    <div class="summary-card"><span class="summary-icon"><i class="bi bi-calendar-check"></i></span>
                        <div><span>Total Appointments</span>
                            <h2>46</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="summary-card"><span class="summary-icon"><i class="bi bi-hourglass-split"></i></span>
                        <div><span>Pending</span>
                            <h2>5</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="summary-card"><span class="summary-icon"><i class="bi bi-check2-circle"></i></span>
                        <div><span>Confirmed</span>
                            <h2>12</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="summary-card"><span class="summary-icon"><i class="bi bi-calendar-day"></i></span>
                        <div><span>Today</span>
                            <h2>3</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="module-card">
                <div class="module-toolbar row g-3">
                    <div class="col-lg-8">
                        <div class="module-search"><i class="bi bi-search"></i><input type="search" placeholder="Search farmer, veterinarian or animal" aria-label="Search appointments"></div>
                    </div>
                    <div class="col-md-6 col-lg-4"><select class="form-select module-filter" data-filter="status">
                            <option value="all">All Status</option>
                            <option value="pending">Pending</option>
                            <option value="confirmed">Confirmed</option>
                            <option value="completed">Completed</option>
                            <option value="cancelled">Cancelled</option>
                        </select></div>
                </div>
                <div class="table-responsive">
                    <table class="table module-table">
                        <thead>
                            <tr>
                                <th>Appointment</th>
                                <th>Date & Time</th>
                                <th>Farmer</th>
                                <th>Veterinarian</th>
                                <th>Animal</th>
                                <th>Reason</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-search="apt-001 rajesh patel dr rajesh patel gauri fever" data-status="pending">
                                <td>#APT-001</td>
                                <td>29 Sep 2026, 10:00 AM</td>
                                <td>Rajesh Patel</td>
                                <td>Dr. Rajesh Patel</td>
                                <td>Gauri (AN-001)</td>
                                <td>Fever</td>
                                <td><span class="status-badge pending">Pending</span></td>
                                <td><a href="#" class="view-btn">View</a></td>
                            </tr>
                            <tr data-search="apt-002 mehul shah dr mehul shah rani vaccination" data-status="confirmed">
                                <td>#APT-002</td>
                                <td>29 Sep 2026, 11:30 AM</td>
                                <td>Mehul Shah</td>
                                <td>Dr. Mehul Shah</td>
                                <td>Rani (AN-002)</td>
                                <td>Vaccination</td>
                                <td><span class="status-badge confirmed">Confirmed</span></td>
                                <td><a href="#" class="view-btn">View</a></td>
                            </tr>
                            <tr data-search="apt-003 kiran joshi dr kiran joshi kamdhenu checkup" data-status="completed">
                                <td>#APT-003</td>
                                <td>28 Sep 2026, 09:00 AM</td>
                                <td>Kiran Joshi</td>
                                <td>Dr. Kiran Joshi</td>
                                <td>Kamdhenu (AN-003)</td>
                                <td>Routine checkup</td>
                                <td><span class="status-badge completed">Completed</span></td>
                                <td><a href="#" class="view-btn">View</a></td>
                            </tr>
                            <tr data-search="apt-004 amit parmar dr amit parmar moti injury" data-status="cancelled">
                                <td>#APT-004</td>
                                <td>27 Sep 2026, 04:00 PM</td>
                                <td>Amit Parmar</td>
                                <td>Dr. Amit Parmar</td>
                                <td>Moti (AN-004)</td>
                                <td>Leg injury</td>
                                <td><span class="status-badge cancelled">Cancelled</span></td>
                                <td><a href="#" class="view-btn">View</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="empty-message" id="noRecords">No appointments found.</div>
            </div>
        </div>
    </main>
    <?php include "includes/admin_footer.php"; ?>
    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>
    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>
    <script src="/SmartDairy/admin/js/admin_records.js"></script>
</body>

</html>