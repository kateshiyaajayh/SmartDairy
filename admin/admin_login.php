<?php

session_start();

if (isset($_SESSION["admin_id"])) {
    header("Location: admin_index.php");
    exit;
}

$loginError = $_SESSION["admin_login_error"] ?? "";
unset($_SESSION["admin_login_error"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Admin Login - SmartDairy Pro</title>

    <link
        rel="stylesheet"
        href="/SmartDairy/css/bootstrap.min.css">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link
        rel="stylesheet"
        href="/SmartDairy/admin/css/admin_login.css">

</head>

<body>

    <main class="admin-login-page">

        <div class="admin-login-card">

            <div class="admin-login-header">

                <div class="admin-logo">

                    <img
                        src="/SmartDairy/images/logo.jpg"
                        alt="SmartDairy Pro">

                </div>

                <h1>
                    Admin Login
                </h1>

                <p>
                    Sign in to manage SmartDairy Pro.
                </p>

            </div>

            <?php if ($loginError !== ""): ?>
                <div class="alert alert-danger py-2" role="alert">
                    <?= htmlspecialchars($loginError, ENT_QUOTES, "UTF-8") ?>
                </div>
            <?php endif; ?>

            <form
                method="POST"
                action="admin_login_process.php"
                id="adminLoginForm">

                <div class="mb-3">

                    <label
                        for="email"
                        class="form-label">

                        Email Address

                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-envelope"></i>
                        </span>

                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            placeholder="Enter admin email"
                            data-validation="required email">

                    </div>

                    <span
                        class="error-message"
                        id="emailError">
                    </span>

                </div>

                <div class="mb-3">

                    <label
                        for="password"
                        class="form-label">

                        Password

                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-lock"></i>
                        </span>

                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            placeholder="Enter admin password"
                            data-validation="required">

                        <button
                            type="button"
                            class="password-toggle"
                            id="passwordToggle">

                            <i class="bi bi-eye"></i>

                        </button>

                    </div>

                    <span
                        class="error-message"
                        id="passwordError">
                    </span>

                </div>

                <div class="login-options">

                    <div class="form-check">

                        <input
                            type="checkbox"
                            class="form-check-input"
                            id="remember"
                            name="remember">

                        <label
                            class="form-check-label"
                            for="remember">

                            Remember me

                        </label>

                    </div>

                </div>

                <button
                    type="submit"
                    class="admin-login-btn">

                    <i class="bi bi-box-arrow-in-right"></i>

                    Login

                </button>

            </form>

            <div class="admin-login-footer">

                <a href="/SmartDairy/login.php">

                    <i class="bi bi-arrow-left"></i>

                    Back to Farmer Login

                </a>

            </div>

        </div>

    </main>

    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>

    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>

    <script src="/SmartDairy/js/validation.js"></script>

    <script src="/SmartDairy/admin/js/admin_login.js"></script>

</body>

</html>
