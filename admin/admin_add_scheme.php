<?php
require_once __DIR__ . "/includes/admin_auth.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Scheme - SmartDairy Pro</title>
    <link rel="stylesheet" href="/SmartDairy/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_header.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_sidebar.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_footer.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_layout.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_module.css">
    <link rel="stylesheet" href="/SmartDairy/admin/css/admin_add_scheme.css">
</head>

<body>
    <?php include "includes/admin_header.php"; ?>
    <?php include "includes/admin_sidebar.php"; ?>

    <main class="admin-page add-scheme-page">
        <div class="container-fluid">
            <div class="page-header">
                <div>
                    <h1>Add Scheme</h1>
                    <p>Add a new government or dairy scheme for farmers.</p>
                </div>
            </div>

            <form class="module-card module-form" id="addSchemeForm" method="POST" novalidate>
                <section class="form-section">
                    <h2>Scheme Information</h2>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="schemeName" class="form-label">Scheme Name</label>
                            <input type="text" class="form-control" id="schemeName" name="scheme_name" maxlength="150" data-validation="required min max" data-min="3" data-max="150" required>
                            <div class="invalid-feedback" id="scheme_nameError"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" id="category" name="category" data-validation="required" required>
                                <option value="">Select Category</option>
                                <option>Business Support</option>
                                <option>Infrastructure</option>
                                <option>Credit</option>
                                <option>Subsidy</option>
                                <option>Dairy Development</option>
                                <option>Animal Husbandry</option>
                                <option>Other</option>
                            </select>
                            <div class="invalid-feedback" id="categoryError"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="provider" class="form-label">Provider</label>
                            <input type="text" class="form-control" id="provider" name="provider" maxlength="150" data-validation="required min max" data-min="2" data-max="150" required>
                            <div class="invalid-feedback" id="providerError"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="lastDate" class="form-label">Last Date</label>
                            <input type="date" class="form-control" id="lastDate" name="last_date" data-validation="required" required>
                            <div class="invalid-feedback" id="last_dateError"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" data-validation="required" required>
                                <option value="">Select Status</option>
                                <option>Open</option>
                                <option>Under Review</option>
                                <option>Closed</option>
                            </select>
                            <div class="invalid-feedback" id="statusError"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="schemeLink" class="form-label">Scheme Link <span class="text-muted fw-normal">(Optional)</span></label>
                            <input type="url" class="form-control" id="schemeLink" name="scheme_link" maxlength="2048" aria-describedby="scheme_linkError">
                            <div class="invalid-feedback" id="scheme_linkError"></div>
                        </div>
                    </div>
                </section>

                <section class="form-section">
                    <h2>Scheme Details</h2>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4" maxlength="1000" data-validation="required min max" data-min="20" data-max="1000" required></textarea>
                            <div class="invalid-feedback" id="descriptionError"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="eligibility" class="form-label">Eligibility</label>
                            <textarea class="form-control" id="eligibility" name="eligibility" rows="4" maxlength="1000" data-validation="required min max" data-min="10" data-max="1000" required></textarea>
                            <div class="invalid-feedback" id="eligibilityError"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="benefits" class="form-label">Benefits</label>
                            <textarea class="form-control" id="benefits" name="benefits" rows="4" maxlength="1000" data-validation="required min max" data-min="10" data-max="1000" required></textarea>
                            <div class="invalid-feedback" id="benefitsError"></div>
                        </div>
                        <div class="col-12">
                            <label for="applicationProcess" class="form-label">Application Process</label>
                            <textarea class="form-control" id="applicationProcess" name="application_process" rows="4" maxlength="1000" data-validation="required min max" data-min="10" data-max="1000" required></textarea>
                            <div class="invalid-feedback" id="application_processError"></div>
                        </div>
                    </div>
                </section>

                <div class="module-actions">
                    <a href="admin_schemes.php" class="btn btn-outline-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success">Add Scheme</button>
                </div>
            </form>
        </div>
    </main>

    <?php include "includes/admin_footer.php"; ?>
    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>
    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>
    <script src="/SmartDairy/js/validation.js"></script>
    <script src="/SmartDairy/admin/js/admin_add_scheme.js"></script>
</body>

</html>