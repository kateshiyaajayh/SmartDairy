<?php

session_start();

require_once "config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    if ($email == "" || $password == "") {
        die("Please enter email and password.");
    }

    $stmt = $conn->prepare(
        "SELECT id, full_name, email, password FROM users WHERE email = ?"
    );

    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        die("Invalid email or password.");
    }

    $user = $result->fetch_assoc();

    if (!password_verify($password, $user["password"])) {
        die("Invalid email or password.");
    }

    $_SESSION["user_id"] = $user["id"];
    $_SESSION["full_name"] = $user["full_name"];
    $_SESSION["email"] = $user["email"];

    echo "Login successful.";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - SmartDairy</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="login-page">

        <div class="login-left">

            <img src="images/whitelogo.jpg" class="left-logo" alt="SmartDairy">

            <h1>Welcome Back</h1>

            <p>
                Login to manage your dairy operations,
                milk collection and farm records.
            </p>

        </div>

        <div class="login-right">

            <div class="login-card">

                <img src="images/logo.jpg" class="form-logo" alt="SmartDairy">

                <h2>Sign In</h2>

                <p class="form-description">
                    Enter your account details to continue.
                </p>

                <form id="loginForm" method="POST" action="">

                    <div class="form-group">
                        <label for="email">Email</label>

                        <div class="input-box">
                            <i class="bi bi-envelope"></i>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Enter your email"
                                data-validation="required email">

                        </div>

                        <span id="emailError" class="error-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>

                        <div class="input-box">
                            <i class="bi bi-lock"></i>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Enter your password"
                                data-validation="required">

                            <i class="bi bi-eye password-toggle"></i>
                        </div>

                        <span id="passwordError" class="error-message"></span>
                    </div>

                    <div class="login-options">

                        <div>
                            <div class="remember-me">
                                <input
                                    type="checkbox"
                                    id="remember"
                                    name="remember"
                                    data-validation="terms">

                                <label for="remember">Remember me</label>
                            </div>

                            <span id="rememberError" class="error-message"></span>
                        </div>

                        <a href="#">Forgot Password?</a>

                    </div>

                    <button type="submit" class="login-btn">
                        Login <i class="bi bi-arrow-right"></i>
                    </button>

                </form>

                <div class="signup-link">
                    Don't have an account?
                    <a href="register.php">Create Account</a>
                </div>

            </div>

        </div>

    </div>

    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/login.js"></script>

</body>

</html>