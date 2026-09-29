<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: admin_login.php");
    exit;
}

$email = isset($_POST["email"]) && is_string($_POST["email"])
    ? trim($_POST["email"])
    : "";
$password = isset($_POST["password"]) && is_string($_POST["password"])
    ? $_POST["password"]
    : "";

if ($email === "" || $password === "") {
    $_SESSION["admin_login_error"] = "Invalid email or password.";
    header("Location: admin_login.php");
    exit;
}

require_once __DIR__ . "/../config/database.php";

$statement = $conn->prepare("SELECT id, name, email, password FROM admins WHERE email = ? LIMIT 1");

if ($statement) {
    $statement->bind_param("s", $email);
    $queryExecuted = $statement->execute();
    $rowFound = false;
    $passwordVerified = false;

    if ($queryExecuted) {
        $statement->bind_result($adminId, $adminName, $adminEmail, $passwordHash);
        $rowFound = $statement->fetch() === true;
        $passwordVerified = $rowFound && is_string($passwordHash) && password_verify($password, $passwordHash);
    }

    if ($passwordVerified) {
        $statement->close();
        session_regenerate_id(true);

        $_SESSION["admin_id"] = $adminId;
        $_SESSION["admin_name"] = $adminName;
        $_SESSION["admin_email"] = $adminEmail;
        unset($_SESSION["admin_login_error"]);

        header("Location: admin_index.php");
        exit;
    }

    $statement->close();
}

$_SESSION["admin_login_error"] = "Invalid email or password.";
header("Location: admin_login.php");
exit;
