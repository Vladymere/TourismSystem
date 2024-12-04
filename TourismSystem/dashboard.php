<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Dashboard</title>
    <link rel="stylesheet" href="dashbboard.css">
</head>
<body>
    <div class="dashboard-container">
        <nav class="sidebar">
            <h1 class="logo">Philippines Spot</h1>
            <ul class="nav-links">
                <li><a href="overview.php">Overview</a></li>
                <li><a href="destinations.php">Destinations</a></li>
                <li><a href="bookings.php">Bookings</a></li>
                <li><a href="users.php">Users</a></li>
                <li><a href="reports.php">Reports</a></li>
                <li><a href="settings.php">Settings</a></li>
            </ul>
            <div class="logout">
                <a href="index.html">Logout</a>
            </div>
        </nav>
        <main class="main-content">
            <header class="header">
                <h2>Welcome - Ashley, Cristian and Ron!</h2>
            </header>
            <section id="overview">
                <h3>Dashboard Overview</h3>
                <div class="cards">
                    <div class="card">
                        <h4>Total Visitors</h4>
                        <p>1,234</p>
                    </div>
                    <div class="card">
                        <h4>Active Bookings</h4>
                        <p>345</p>
                    </div>
                    <div class="card">
                        <h4>Total Revenue</h4>
                        <p>₱1,234,567</p>
                    </div>
                </div>
            </section>
            <!-- Additional sections can go here -->
        </main>
    </div>
</body>
</html>
