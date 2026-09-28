<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

require_once "config/database.php";

$userId = $_SESSION["user_id"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $fullName = trim($_POST["full_name"]);
    $mobile = trim($_POST["mobile"]);
    $email = trim($_POST["email"]);
    $address = trim($_POST["address"]);
    $village = trim($_POST["village"]);
    $district = trim($_POST["district"]);
    $state = trim($_POST["state"]);

    $stmt = $conn->prepare(
        "UPDATE users
         SET full_name = ?, mobile = ?, email = ?, address = ?,
             village = ?, district = ?, state = ?
         WHERE id = ?"
    );

    $stmt->bind_param(
        "sssssssi",
        $fullName,
        $mobile,
        $email,
        $address,
        $village,
        $district,
        $state,
        $userId
    );

    if ($stmt->execute()) {

        $_SESSION["full_name"] = $fullName;

        header("Location: profile.php");
        exit;
    }

    $errorMessage = "Unable to update profile.";

    $stmt->close();
}

$stmt = $conn->prepare(
    "SELECT full_name, mobile, email, address, village, district, state
     FROM users
     WHERE id = ?"
);

$stmt->bind_param("i", $userId);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

$stmt->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Edit Profile - SmartDairy Pro</title>

    <link
        rel="stylesheet"
        href="/SmartDairy/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/header.css">

    <link rel="stylesheet" href="css/footer.css">


    <link
        rel="stylesheet"
        href="/SmartDairy/css/edit_profile.css">

</head>

<body>

    <?php include "includes/header.php"; ?>

    <main class="edit-profile-page">

        <div class="container-fluid">

            <div class="edit-profile-header">

                <div>

                    <h1>Edit Profile</h1>

                    <p>
                        Update your personal information.
                    </p>

                </div>

                <a
                    href="profile.php"
                    class="back-btn">

                    <i class="bi bi-arrow-left"></i>
                    Back to Profile

                </a>

            </div>

            <?php if (isset($errorMessage)) { ?>

                <div class="alert alert-danger">
                    <?php echo htmlspecialchars($errorMessage); ?>
                </div>

            <?php } ?>

            <div class="edit-profile-card">

                <form
                    method="POST"
                    id="editProfileForm">

                    <div class="form-section">

                        <div class="section-heading">

                            <div class="section-icon">

                                <i class="bi bi-person"></i>

                            </div>

                            <div>

                                <h2>Personal Information</h2>

                                <p>
                                    Update your basic personal details.
                                </p>

                            </div>

                        </div>

                        <div class="row g-4">

                            <div class="col-md-6">

                                <label
                                    for="fullName"
                                    class="form-label">

                                    Full Name

                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="fullName"
                                    name="full_name"
                                    value="<?php echo htmlspecialchars($user["full_name"] ?? ""); ?>"
                                    data-validation="required alpha"
                                    data-min="2"
                                    data-max="100">

                                <span
                                    class="error-message"
                                    id="full_nameError">
                                </span>

                            </div>

                            <div class="col-md-6">

                                <label
                                    for="mobile"
                                    class="form-label">

                                    Mobile Number

                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="mobile"
                                    name="mobile"
                                    value="<?php echo htmlspecialchars($user["mobile"] ?? ""); ?>"
                                    data-validation="required numeric"
                                    data-min="10"
                                    data-max="15">

                                <span
                                    class="error-message"
                                    id="mobileError">
                                </span>

                            </div>

                            <div class="col-md-6">

                                <label
                                    for="email"
                                    class="form-label">

                                    Email Address

                                </label>

                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    value="<?php echo htmlspecialchars($user["email"] ?? ""); ?>"
                                    data-validation="required email">

                                <span
                                    class="error-message"
                                    id="emailError">
                                </span>

                            </div>

                        </div>

                    </div>

                    <div class="form-section">

                        <div class="section-heading">

                            <div class="section-icon">

                                <i class="bi bi-geo-alt"></i>

                            </div>

                            <div>

                                <h2>Address Information</h2>

                                <p>
                                    Update your location details.
                                </p>

                            </div>

                        </div>

                        <div class="row g-4">

                            <div class="col-12">

                                <label
                                    for="address"
                                    class="form-label">

                                    Address

                                </label>

                                <textarea
                                    class="form-control"
                                    id="address"
                                    name="address"
                                    rows="3"
                                    data-validation="required"><?php echo htmlspecialchars($user["address"] ?? ""); ?></textarea>

                                <span
                                    class="error-message"
                                    id="addressError">
                                </span>

                            </div>

                            <div class="col-md-6">

                                <label
                                    for="village"
                                    class="form-label">

                                    Village

                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="village"
                                    name="village"
                                    value="<?php echo htmlspecialchars($user["village"] ?? ""); ?>"
                                    data-validation="required alpha">

                                <span
                                    class="error-message"
                                    id="villageError">
                                </span>

                            </div>

                            <div class="col-md-6">

                                <label
                                    for="district"
                                    class="form-label">

                                    District

                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="district"
                                    name="district"
                                    value="<?php echo htmlspecialchars($user["district"] ?? ""); ?>"
                                    data-validation="required alpha">

                                <span
                                    class="error-message"
                                    id="districtError">
                                </span>

                            </div>

                            <div class="col-md-6">

                                <label
                                    for="state"
                                    class="form-label">

                                    State

                                </label>

                                <select
                                    class="form-select"
                                    id="state"
                                    name="state"
                                    data-validation="required">

                                    <option value="">
                                        Select State
                                    </option>

                                    <option
                                        value="Gujarat"
                                        <?php echo ($user["state"] ?? "") === "Gujarat" ? "selected" : ""; ?>>

                                        Gujarat

                                    </option>

                                    <option
                                        value="Maharashtra"
                                        <?php echo ($user["state"] ?? "") === "Maharashtra" ? "selected" : ""; ?>>

                                        Maharashtra

                                    </option>

                                    <option
                                        value="Rajasthan"
                                        <?php echo ($user["state"] ?? "") === "Rajasthan" ? "selected" : ""; ?>>

                                        Rajasthan

                                    </option>

                                    <option
                                        value="Madhya Pradesh"
                                        <?php echo ($user["state"] ?? "") === "Madhya Pradesh" ? "selected" : ""; ?>>

                                        Madhya Pradesh

                                    </option>

                                </select>

                                <span
                                    class="error-message"
                                    id="stateError">
                                </span>

                            </div>

                        </div>

                    </div>

                    <div class="form-actions">

                        <a
                            href="profile.php"
                            class="cancel-btn">

                            Cancel

                        </a>

                        <button
                            type="submit"
                            class="save-btn">

                            <i class="bi bi-check-lg"></i>

                            Save Changes

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src="/SmartDairy/js/jquery-4.0.0.min.js"></script>

    <script src="/SmartDairy/js/bootstrap.bundle.min.js"></script>

    <script src="/SmartDairy/js/validation.js"></script>

    <script src="/SmartDairy/js/edit_profile.js"></script>

</body>

</html>