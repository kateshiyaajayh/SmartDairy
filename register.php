<?php

require_once "config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullName = trim($_POST["fullName"] ?? "");
    $mobile = trim($_POST["mobile"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $address = trim($_POST["address"] ?? "");
    $village = trim($_POST["village"] ?? "");
    $district = trim($_POST["district"] ?? "");
    $state = trim($_POST["state"] ?? "");
    $password = $_POST["password"] ?? "";
    $confirmPassword = $_POST["confirmPassword"] ?? "";

    if (
        $fullName == "" ||
        $mobile == "" ||
        $email == "" ||
        $address == "" ||
        $village == "" ||
        $district == "" ||
        $state == "" ||
        $password == "" ||
        $confirmPassword == ""
    ) {
        die("Please fill all required fields.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }

    if (!preg_match("/^[0-9]{10}$/", $mobile)) {
        die("Invalid mobile number.");
    }

    if ($password != $confirmPassword) {
        die("Passwords do not match.");
    }

    $check = $conn->prepare(
        "SELECT id FROM users WHERE email = ? OR mobile = ?"
    );

    $check->bind_param("ss", $email, $mobile);
    $check->execute();

    $result = $check->get_result();

    if ($result->num_rows > 0) {
        die("Email or mobile number already registered.");
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare(
        "INSERT INTO users
        (full_name, mobile, email, address, village, district, state, password)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
    );

    $stmt->bind_param(
        "ssssssss",
        $fullName,
        $mobile,
        $email,
        $address,
        $village,
        $district,
        $state,
        $password
    );

    if ($stmt->execute()) {
        echo "Registration successful.";
        exit;
    }

    echo "Registration failed.";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="register-page row g-0">

        <div class="register-left col-lg-6">

            <img src="images/whitelogo.jpg" alt="SmartDairyPro" class="left-logo">

            <p class="tagline">Modern Dairy Management System</p>

            <h1>
                Smarter Dairy Farming
                <br>
                for a
                <br>
                <span>Better Tomorrow</span>
            </h1>

            <p class="description">
                Manage your animals, track milk collection,
                monitor health, and grow your dairy business
                with SmartDairy Pro.
            </p>

            <div class="feature">
                <div class="feature-icon">
                    <i class="bi bi-people"></i>
                </div>

                <div>
                    <h3>Animal Management</h3>
                    <p>Keep complete records</p>
                </div>
            </div>

            <div class="feature">
                <div class="feature-icon">
                    <i class="bi bi-droplet"></i>
                </div>

                <div>
                    <h3>Milk Collection</h3>
                    <p>Track quantity & quality</p>
                </div>
            </div>

            <div class="feature">
                <div class="feature-icon">
                    <i class="bi bi-heart-pulse"></i>
                </div>

                <div>
                    <h3>Health & Vaccination</h3>
                    <p>Ensure healthy animals</p>
                </div>
            </div>

            <div class="feature">
                <div class="feature-icon">
                    <i class="bi bi-bar-chart-line-fill"></i>
                </div>

                <div>
                    <h3>Reports & Analytics</h3>
                    <p>Make better decisions</p>
                </div>
            </div>

            <div class="bottom-message">
                <p>Healthy Animals</p>
                <p>Quality Milk</p>
                <p>Stronger Farmers</p>
            </div>

        </div>


        <div class="register-right col-lg-6">

            <div class="register-card">

                <img src="images/logo.jpg" alt="SmartDairyPro" class="form-logo">

                <h2>Create Your Account</h2>

                <p class="form-description">
                    Join SmartDairy Pro and start managing your dairy farm
                    easily and efficiently.
                </p>

                <form id="registerForm" method="POST" action="">

                    <div class="form-group">

                        <label for="fullName">
                            Full Name <span>*</span>
                        </label>

                        <div class="input-box">
                            <i class="bi bi-person"></i>

                            <input type="text"
                                id="fullName"
                                name="fullName"
                                placeholder="Enter your full name"
                                data-validation="required alpha">
                        </div>

                        <span class="error text-danger" id="fullNameError"></span>

                    </div>


                    <div class="form-group">

                        <label for="mobile">
                            Mobile Number <span>*</span>
                        </label>

                        <div class="input-box">
                            <i class="bi bi-telephone"></i>

                            <input type="tel"
                                id="mobile"
                                name="mobile"
                                placeholder="Enter your mobile number"
                                data-validation="required numeric min max"
                                data-min="10"
                                data-max="10">
                        </div>

                        <span class="error text-danger" id="mobileError"></span>

                    </div>


                    <div class="form-group">

                        <label for="email">
                            Email Address <span>*</span>
                        </label>

                        <div class="input-box">
                            <i class="bi bi-envelope"></i>

                            <input type="email"
                                id="email"
                                name="email"
                                placeholder="Enter your email address"
                                data-validation="required email">
                        </div>

                        <span class="error text-danger" id="emailError"></span>

                    </div>

                    <div class="form-group">

                        <label for="address">
                            Address <span>*</span>
                        </label>

                        <div class="input-box">
                            <i class="bi bi-geo-alt"></i>

                            <input type="text"
                                id="address"
                                name="address"
                                placeholder="Enter your full address"
                                data-validation="required">
                        </div>

                        <span class="error text-danger" id="addressError"></span>

                    </div>


                    <div class="form-group">

                        <label for="village">
                            Village / City <span>*</span>
                        </label>

                        <div class="input-box">
                            <i class="bi bi-house"></i>

                            <input type="text"
                                id="village"
                                name="village"
                                placeholder="Enter your village or city"
                                data-validation="required alpha">
                        </div>

                        <span class="error text-danger" id="villageError"></span>

                    </div>


                    <div class="location-row row g-3">

                        <div class="form-group col-md-6">

                            <label for="district">
                                District <span>*</span>
                            </label>

                            <div class="input-box">
                                <i class="bi bi-map"></i>

                                <input type="text"
                                    id="district"
                                    name="district"
                                    placeholder="Enter your district"
                                    data-validation="required alpha">
                            </div>

                            <span class="error text-danger" id="districtError"></span>

                        </div>


                        <div class="form-group col-md-6">

                            <label for="state">
                                State <span>*</span>
                            </label>

                            <div class="input-box">
                                <i class="bi bi-map"></i>

                                <input type="text"
                                    id="state"
                                    name="state"
                                    placeholder="Enter your state"
                                    data-validation="required alpha">
                            </div>

                            <span class="error text-danger" id="stateError"></span>

                        </div>

                    </div>


                    <div class="form-group">

                        <label for="password">
                            Password <span>*</span>
                        </label>

                        <div class="input-box">
                            <i class="bi bi-lock"></i>

                            <input type="password"
                                id="password"
                                name="password"
                                placeholder="Create a password"
                                data-validation="required strongPassword min max"
                                data-min="8"
                                data-max="25">

                            <i class="bi bi-eye password-toggle"></i>
                        </div>

                        <span class="error text-danger" id="passwordError"></span>

                    </div>


                    <div class="form-group">

                        <label for="confirmPassword">
                            Confirm Password <span>*</span>
                        </label>

                        <div class="input-box">
                            <i class="bi bi-lock"></i>

                            <input type="password"
                                id="confirmPassword"
                                name="confirmPassword"
                                placeholder="Confirm your password"
                                data-validation="required confirmPassword"
                                data-password-id="password">

                            <i class="bi bi-eye password-toggle"></i>
                        </div>

                        <span class="error text-danger" id="confirmPasswordError"></span>

                    </div>


                    <div class="terms">

                        <input type="checkbox"
                            id="terms"
                            name="terms"
                            data-validation="terms">

                        <label for="terms">
                            I agree to the
                            <a href="#">Terms & Conditions</a>
                            and
                            <a href="#">Privacy Policy</a>
                        </label>

                        <span class="error text-danger" id="termsError"></span>

                    </div>


                    <button type="submit" class="create-btn">
                        Create Account
                        <i class="bi bi-arrow-right"></i>
                    </button>


                    <div class="signin">
                        <span>Already have an account?</span>
                        <a href="login.php">Sign in</a>
                    </div>
                </form>

            </div>

        </div>

    </div>


    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/register.js"></script>

</body>

</html>