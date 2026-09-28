<?php
$activePage = basename($_SERVER['PHP_SELF']);

if ($activePage === 'admin_milk_details.php') {
    $activePage = 'admin_milk_collection.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sidebar</title>
</head>

<body>
    <aside class="admin-sidebar" id="adminSidebar">

        <div class="sidebar-menu">

            <div class="menu-section">

                <span class="menu-title">
                    Main
                </span>

                <a
                    href="admin_index.php"
                    class="sidebar-link <?= $activePage === 'admin_index.php' ? 'active' : '' ?>">

                    <i class="bi bi-grid-1x2"></i>

                    <span>
                        Dashboard
                    </span>

                </a>

            </div>

            <div class="menu-section">

                <span class="menu-title">
                    Management
                </span>

                <a
                    href="admin_farmers.php"
                    class="sidebar-link <?= $activePage === 'admin_farmers.php' ? 'active' : '' ?>">

                    <i class="bi bi-person"></i>

                    <span>
                        Farmers
                    </span>

                </a>

                <a
                    href="admin_animals.php"
                    class="sidebar-link <?= $activePage === 'admin_animals.php' ? 'active' : '' ?>">

                    <i class="bi bi-grid-3x3-gap"></i>

                    <span>
                        Animals
                    </span>

                </a>

                <a
                    href="admin_milk_collection.php"
                    class="sidebar-link <?= $activePage === 'admin_milk_collection.php' ? 'active' : '' ?>">

                    <i class="bi bi-droplet"></i>

                    <span>
                        Milk Collection
                    </span>

                </a>

                <a
                    href="admin_health.php"
                    class="sidebar-link <?= $activePage === 'admin_health.php' ? 'active' : '' ?>">

                    <i class="bi bi-heart-pulse"></i>

                    <span>
                        Health Records
                    </span>

                </a>

            </div>

            <div class="menu-section">

                <span class="menu-title">
                    Marketplace
                </span>

                <a
                    href="admin_products.php"
                    class="sidebar-link <?= $activePage === 'admin_products.php' ? 'active' : '' ?>">

                    <i class="bi bi-box-seam"></i>

                    <span>
                        Products
                    </span>

                </a>

                <a
                    href="admin_orders.php"
                    class="sidebar-link <?= $activePage === 'admin_orders.php' ? 'active' : '' ?>">

                    <i class="bi bi-cart3"></i>

                    <span>
                        Orders
                    </span>

                </a>

            </div>

            <div class="menu-section">

                <span class="menu-title">
                    Veterinary
                </span>

                <a
                    href="admin_vets.php"
                    class="sidebar-link <?= $activePage === 'admin_vets.php' ? 'active' : '' ?>">

                    <i class="bi bi-person-badge"></i>

                    <span>
                        Veterinarians
                    </span>

                </a>

                <a
                    href="admin_appointments.php"
                    class="sidebar-link <?= $activePage === 'admin_appointments.php' ? 'active' : '' ?>">

                    <i class="bi bi-calendar-check"></i>

                    <span>
                        Appointments
                    </span>

                </a>

            </div>

            <div class="menu-section">

                <span class="menu-title">
                    Information
                </span>

                <a
                    href="admin_rates.php"
                    class="sidebar-link <?= $activePage === 'admin_rates.php' ? 'active' : '' ?>">

                    <i class="bi bi-currency-rupee"></i>

                    <span>
                        Milk Rates
                    </span>

                </a>

                <a
                    href="admin_schemes.php"
                    class="sidebar-link <?= $activePage === 'admin_schemes.php' ? 'active' : '' ?>">

                    <i class="bi bi-file-earmark-text"></i>

                    <span>
                        Schemes
                    </span>

                </a>

            </div>

            <div class="menu-section">

                <span class="menu-title">
                    System
                </span>

                <a
                    href="admin_settings.php"
                    class="sidebar-link <?= $activePage === 'admin_settings.php' ? 'active' : '' ?>">

                    <i class="bi bi-gear"></i>

                    <span>
                        Settings
                    </span>

                </a>

            </div>

        </div>

    </aside>
</body>

</html>
