<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Header</title>
</head>

<body>
    <header class="admin-header">

        <nav class="navbar">

            <div class="container-fluid">

                <div class="admin-header-left">

                    <button
                        type="button"
                        class="sidebar-toggle"
                        id="sidebarToggle">

                        <i class="bi bi-list"></i>

                    </button>

                    <a
                        href="admin_index.php"
                        class="admin-brand">

                        <img
                            src="/SmartDairy/images/logo.jpg"
                            alt="SmartDairy Pro">

                    </a>

                </div>

                <div class="admin-header-right">

                    <button
                        type="button"
                        class="notification-btn">

                        <i class="bi bi-bell"></i>

                        <span class="notification-dot"></span>

                    </button>

                    <div class="admin-user dropdown">

                        <button
                            type="button"
                            class="admin-user-btn dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">

                            <i class="bi bi-person-circle"></i>

                            <span>
                                Admin
                            </span>

                        </button>

                        <ul class="dropdown-menu dropdown-menu-end">

                            <li>

                                <a
                                    class="dropdown-item"
                                    href="admin_settings.php">

                                    <i class="bi bi-gear"></i>

                                    Settings

                                </a>

                            </li>

                            <li>

                                <hr class="dropdown-divider">

                            </li>

                            <li>

                                <a
                                    class="dropdown-item logout-link"
                                    href="admin_logout.php">

                                    <i class="bi bi-box-arrow-right"></i>

                                    Logout

                                </a>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </nav>

    </header>
</body>

</html>