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

    <title>Settings - SmartDairy Pro</title>

    <link
        rel="stylesheet"
        href="/SmartDairy/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/header.css">

    <link rel="stylesheet" href="css/footer.css">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <link
        rel="stylesheet"
        href="/SmartDairy/css/settings.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="settings-page">

        <div class="container-fluid">

            <div class="settings-header">

                <div>

                    <h1>Settings</h1>

                    <p>
                        Manage your account and application preferences.
                    </p>

                </div>

            </div>

            <div class="row g-4">

                <div class="col-lg-8">

                    <div class="settings-card">

                        <div class="settings-section">

                            <div class="section-heading">

                                <div class="section-icon">

                                    <i class="bi bi-person"></i>

                                </div>

                                <div>

                                    <h2>Account Settings</h2>

                                    <p>
                                        Manage your account information.
                                    </p>

                                </div>

                            </div>

                            <div class="setting-row">

                                <div>

                                    <strong>
                                        Profile Information
                                    </strong>

                                    <span>
                                        Update your name, mobile number
                                        and other personal details.
                                    </span>

                                </div>

                                <a
                                    href="profile.php"
                                    class="setting-btn">

                                    Edit

                                </a>

                            </div>

                            <div class="setting-row">

                                <div>

                                    <strong>
                                        Password
                                    </strong>

                                    <span>
                                        Change your account password.
                                    </span>

                                </div>

                                <button
                                    type="button"
                                    class="setting-btn"
                                    id="changePasswordBtn">

                                    Change

                                </button>

                            </div>

                        </div>

                        <div class="settings-section">

                            <div class="section-heading">

                                <div class="section-icon">

                                    <i class="bi bi-bell"></i>

                                </div>

                                <div>

                                    <h2>Notifications</h2>

                                    <p>
                                        Choose which notifications you want
                                        to receive.
                                    </p>

                                </div>

                            </div>

                            <div class="setting-row">

                                <div>

                                    <strong>
                                        Milk Collection Reminders
                                    </strong>

                                    <span>
                                        Receive reminders for milk collection
                                        records.
                                    </span>

                                </div>

                                <div class="form-check form-switch">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="milkReminder"
                                        checked>

                                </div>

                            </div>

                            <div class="setting-row">

                                <div>

                                    <strong>
                                        Health Reminders
                                    </strong>

                                    <span>
                                        Get reminders for health checkups
                                        and vaccinations.
                                    </span>

                                </div>

                                <div class="form-check form-switch">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="healthReminder"
                                        checked>

                                </div>

                            </div>

                            <div class="setting-row">

                                <div>

                                    <strong>
                                        Appointment Notifications
                                    </strong>

                                    <span>
                                        Receive updates about veterinary
                                        appointments.
                                    </span>

                                </div>

                                <div class="form-check form-switch">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="appointmentNotification"
                                        checked>

                                </div>

                            </div>

                        </div>

                        <div class="settings-section">

                            <div class="section-heading">

                                <div class="section-icon">

                                    <i class="bi bi-display"></i>

                                </div>

                                <div>

                                    <h2>Application Preferences</h2>

                                    <p>
                                        Manage your application preferences.
                                    </p>

                                </div>

                            </div>

                            <div class="setting-row">

                                <div>

                                    <strong>
                                        Language
                                    </strong>

                                    <span>
                                        Select your preferred language.
                                    </span>

                                </div>

                                <select
                                    id="language"
                                    class="form-select setting-select">

                                    <option value="english">
                                        English
                                    </option>

                                    <option value="gujarati">
                                        Gujarati
                                    </option>

                                    <option value="hindi">
                                        Hindi
                                    </option>

                                </select>

                            </div>

                            <div class="setting-row">

                                <div>

                                    <strong>
                                        Date Format
                                    </strong>

                                    <span>
                                        Select how dates should be displayed.
                                    </span>

                                </div>

                                <select
                                    id="dateFormat"
                                    class="form-select setting-select">

                                    <option value="dd-mm-yyyy">
                                        DD-MM-YYYY
                                    </option>

                                    <option value="mm-dd-yyyy">
                                        MM-DD-YYYY
                                    </option>

                                    <option value="yyyy-mm-dd">
                                        YYYY-MM-DD
                                    </option>

                                </select>

                            </div>

                        </div>

                        <div class="settings-section danger-section">

                            <div class="section-heading">

                                <div class="section-icon danger-icon">

                                    <i class="bi bi-shield-exclamation"></i>

                                </div>

                                <div>

                                    <h2>Account Actions</h2>

                                    <p>
                                        Manage your account session.
                                    </p>

                                </div>

                            </div>

                            <div class="setting-row">

                                <div>

                                    <strong>
                                        Logout
                                    </strong>

                                    <span>
                                        Sign out from your SmartDairy Pro
                                        account.
                                    </span>

                                </div>

                                <a
                                    href="logout.php"
                                    class="logout-btn">

                                    <i class="bi bi-box-arrow-right"></i>

                                    Logout

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="settings-info-card">

                        <div class="info-icon">

                            <i class="bi bi-gear"></i>

                        </div>

                        <h2>
                            Settings
                        </h2>

                        <p>
                            Your preferences will be used to
                            personalize your SmartDairy Pro experience.
                        </p>

                        <div class="info-item">

                            <i class="bi bi-check-circle"></i>

                            <span>
                                Account preferences
                            </span>

                        </div>

                        <div class="info-item">

                            <i class="bi bi-check-circle"></i>

                            <span>
                                Notification preferences
                            </span>

                        </div>

                        <div class="info-item">

                            <i class="bi bi-check-circle"></i>

                            <span>
                                Application preferences
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>

    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>

    <script src="/SmartDairy/js/settings.js"></script>

</body>

</html>