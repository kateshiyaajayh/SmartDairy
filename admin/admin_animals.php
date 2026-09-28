<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Animals - SmartDairy Pro</title>

    <link
        rel="stylesheet"
        href="/SmartDairy/css/bootstrap.min.css">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/admin/css/admin_header.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/admin/css/admin_sidebar.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/admin/css/admin_footer.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/admin/css/admin_animals.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/admin/css/admin_layout.css">

</head>

<body>

    <?php include "includes/admin_header.php"; ?>

    <?php include "includes/admin_sidebar.php"; ?>

    <main class="admin-page">

        <div class="container-fluid">

            <div class="page-header">

                <div>

                    <h1>
                        Animals
                    </h1>

                    <p>
                        Manage registered animals and their records.
                    </p>

                </div>

            </div>

            <div class="row g-4 animal-summary">

                <div class="col-md-6 col-xl-3">
                    <div class="summary-card">
                        <span class="summary-icon"><i class="bi bi-grid-3x3-gap"></i></span>
                        <div><span>Total Animals</span>
                            <h2>482</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="summary-card">
                        <span class="summary-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 7 6.5 3.5 4.5 4M16 7l1.5-3.5 2 0.5M7 8 3.5 7l2 4M17 8l3.5-1-2 4"/><path d="M7 8c-1.2.8-2 2-2 3.5v2c0 4.2 2.7 7 7 7s7-2.8 7-7v-2c0-1.5-.8-2.7-2-3.5-2.5-1.5-7.5-1.5-10 0Z"/><path d="M9 12h.01M15 12h.01M9 16c1.7 1.2 4.3 1.2 6 0"/></svg></span>
                        <div><span>Cows</span>
                            <h2>286</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="summary-card">
                        <span class="summary-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 7C5.5 6 3.8 3.4 4.5 2.5 7 2.5 9 4 10 6M16 7c2.5-1 4.2-3.6 3.5-4.5C17 2.5 15 4 14 6"/><path d="M7 8c-1.2.8-2 2-2 3.5v2c0 4.2 2.7 7 7 7s7-2.8 7-7v-2c0-1.5-.8-2.7-2-3.5-2.5-1.5-7.5-1.5-10 0Z"/><path d="M9 12h.01M15 12h.01M8 16c2 1.4 6 1.4 8 0"/></svg></span>
                        <div><span>Buffaloes</span>
                            <h2>196</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="summary-card">
                        <span class="summary-icon"><i class="bi bi-heart-pulse"></i></span>
                        <div><span>Under Treatment</span>
                            <h2>12</h2>
                        </div>
                    </div>
                </div>

            </div>

            <div class="content-card">

                <div class="toolbar row g-3">

                    <div class="col-lg-6">
                        <div class="search-box">
                            <i class="bi bi-search"></i>
                            <input
                                type="search"
                                id="animalSearch"
                                placeholder="Search by animal ID, farmer name or type"
                                aria-label="Search animals">
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <select class="form-select" id="animalType" aria-label="Filter by animal type">
                            <option value="all">All Types</option>
                            <option value="cow">Cow</option>
                            <option value="buffalo">Buffalo</option>
                        </select>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <select class="form-select" id="animalStatus" aria-label="Filter by status">
                            <option value="all">All Status</option>
                            <option value="healthy">Healthy</option>
                            <option value="under-treatment">Under Treatment</option>
                            <option value="vaccination-due">Vaccination Due</option>
                            <option value="checkup-due">Checkup Due</option>
                        </select>
                    </div>

                </div>

                <div class="table-responsive">

                    <table class="table animal-table">
                        <thead>
                            <tr>
                                <th>Animal</th>
                                <th>Animal ID</th>
                                <th>Type</th>
                                <th>Farmer</th>
                                <th>Breed</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr data-search="AN-001 cow rajesh patel gir jersey female healthy" data-type="cow" data-status="healthy">
                                <td>
                                    <div class="animal-name"><span class="animal-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 7 6.5 3.5 4.5 4M16 7l1.5-3.5 2 0.5M7 8 3.5 7l2 4M17 8l3.5-1-2 4"/><path d="M7 8c-1.2.8-2 2-2 3.5v2c0 4.2 2.7 7 7 7s7-2.8 7-7v-2c0-1.5-.8-2.7-2-3.5-2.5-1.5-7.5-1.5-10 0Z"/><path d="M9 12h.01M15 12h.01M9 16c1.7 1.2 4.3 1.2 6 0"/></svg></span><strong>Gauri</strong></div>
                                </td>
                                <td>AN-001</td>
                                <td>Cow</td>
                                <td>Rajesh Patel</td>
                                <td>Gir</td>
                                <td>Female</td>
                                <td><span class="status healthy">Healthy</span></td>
                                <td><a href="#" class="view-btn">View</a></td>
                            </tr>

                            <tr data-search="AN-002 buffalo mehul shah murrah female under treatment" data-type="buffalo" data-status="under-treatment">
                                <td>
                                    <div class="animal-name"><span class="animal-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 7C5.5 6 3.8 3.4 4.5 2.5 7 2.5 9 4 10 6M16 7c2.5-1 4.2-3.6 3.5-4.5C17 2.5 15 4 14 6"/><path d="M7 8c-1.2.8-2 2-2 3.5v2c0 4.2 2.7 7 7 7s7-2.8 7-7v-2c0-1.5-.8-2.7-2-3.5-2.5-1.5-7.5-1.5-10 0Z"/><path d="M9 12h.01M15 12h.01M8 16c2 1.4 6 1.4 8 0"/></svg></span><strong>Rani</strong></div>
                                </td>
                                <td>AN-002</td>
                                <td>Buffalo</td>
                                <td>Mehul Shah</td>
                                <td>Murrah</td>
                                <td>Female</td>
                                <td><span class="status under-treatment">Under Treatment</span></td>
                                <td><a href="#" class="view-btn">View</a></td>
                            </tr>

                            <tr data-search="AN-003 cow kiran joshi sahiwal female vaccination due" data-type="cow" data-status="vaccination-due">
                                <td>
                                    <div class="animal-name"><span class="animal-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 7 6.5 3.5 4.5 4M16 7l1.5-3.5 2 0.5M7 8 3.5 7l2 4M17 8l3.5-1-2 4"/><path d="M7 8c-1.2.8-2 2-2 3.5v2c0 4.2 2.7 7 7 7s7-2.8 7-7v-2c0-1.5-.8-2.7-2-3.5-2.5-1.5-7.5-1.5-10 0Z"/><path d="M9 12h.01M15 12h.01M9 16c1.7 1.2 4.3 1.2 6 0"/></svg></span><strong>Kamdhenu</strong></div>
                                </td>
                                <td>AN-003</td>
                                <td>Cow</td>
                                <td>Kiran Joshi</td>
                                <td>Sahiwal</td>
                                <td>Female</td>
                                <td><span class="status vaccination-due">Vaccination Due</span></td>
                                <td><a href="#" class="view-btn">View</a></td>
                            </tr>

                            <tr data-search="AN-004 buffalo amit parmar jaffarabadi male checkup due" data-type="buffalo" data-status="checkup-due">
                                <td>
                                    <div class="animal-name"><span class="animal-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 7C5.5 6 3.8 3.4 4.5 2.5 7 2.5 9 4 10 6M16 7c2.5-1 4.2-3.6 3.5-4.5C17 2.5 15 4 14 6"/><path d="M7 8c-1.2.8-2 2-2 3.5v2c0 4.2 2.7 7 7 7s7-2.8 7-7v-2c0-1.5-.8-2.7-2-3.5-2.5-1.5-7.5-1.5-10 0Z"/><path d="M9 12h.01M15 12h.01M8 16c2 1.4 6 1.4 8 0"/></svg></span><strong>Moti</strong></div>
                                </td>
                                <td>AN-004</td>
                                <td>Buffalo</td>
                                <td>Amit Parmar</td>
                                <td>Jaffarabadi</td>
                                <td>Male</td>
                                <td><span class="status checkup-due">Checkup Due</span></td>
                                <td><a href="#" class="view-btn">View</a></td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <div class="empty-message" id="noAnimals">
                    No animals found.
                </div>

            </div>

        </div>

    </main>

    <?php include "includes/admin_footer.php"; ?>

    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>
    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>
    <script src="/SmartDairy/admin/js/admin_animals.js"></script>

</body>

</html>
