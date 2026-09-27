<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>

<body>
    <header class="main-header">

        <nav class="navbar navbar-expand-lg">

            <div class="container-fluid">

                <a href="index.php" class="navbar-brand">
                    <img src="images/logo.jpg" alt="SmartDairy Pro">
                </a>

                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNavigation"
                    aria-controls="mainNavigation"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNavigation">

                    <ul class="navbar-nav mx-auto">

                        <li class="nav-item">
                            <a href="animals.php" class="nav-link">
                                Animals
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="milk_collection.php" class="nav-link">
                                Milk Collection
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="market.php" class="nav-link">
                                Market
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="health.php" class="nav-link">
                                Health
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="vets.php" class="nav-link">
                                Vets
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="rates.php" class="nav-link">
                                Rates
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="schemes.php" class="nav-link">
                                Schemes
                            </a>
                        </li>

                    </ul>

                    <div class="header-actions">

                        <button type="button" class="notification-btn">
                            <i class="bi bi-bell"></i>
                            <span class="notification-dot"></span>
                        </button>

                        <div class="user-menu dropdown">

                            <button
                                type="button"
                                class="user-btn dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">

                                <i class="bi bi-person"></i>

                                <span>
                                    <?php echo htmlspecialchars($_SESSION["full_name"] ?? "User"); ?>
                                </span>

                            </button>

                            <ul class="dropdown-menu dropdown-menu-end">

                                <li>
                                    <a class="dropdown-item" href="profile.php">
                                        <i class="bi bi-person"></i>
                                        My Profile
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="index.php">
                                        <i class="bi bi-grid"></i>
                                        Dashboard
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="activity.php">
                                        <i class="bi bi-clock-history"></i>
                                        My Activity
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="settings.php">
                                        <i class="bi bi-gear"></i>
                                        Settings
                                    </a>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item logout-link" href="logout.php">
                                        <i class="bi bi-box-arrow-right"></i>
                                        Logout
                                    </a>
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </nav>

    </header>
</body>

</html>