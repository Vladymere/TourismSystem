<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Management System - Overview</title>
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
                <h2>Welcome - Ashley, Cristian, Ron!</h2>
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
                    <div class="card">
                        <h4>New Users</h4>
                        <p>56</p>
                    </div>
                    <div class="card">
                        <h4>Popular Destinations</h4>
                        <p>Boracay, Palawan, Cebu</p>
                    </div>
                </div>
            </section>
            <section id="recent-activities">
                <h3>Recent Activities</h3>
                <ul class="activities">
                    <li>User John Ashley Ramos booked a trip to Boracay.</li>
                    <li>User Ron Celajes registered an account.</li>
                    <li>User Tian Caguioa left a review for Palawan.</li>
                </ul>
            </section>
            <section id="statistics">
                <h3>Statistics</h3>
                <div class="stats">
                    <div class="stat">
                        <h4>Monthly Visitors</h4>
                        <p>5,678</p>
                    </div>
                    <div class="stat">
                        <h4>Monthly Revenue</h4>
                        <p>₱2,345,678</p>
                    </div>
                    <div class="stat">
                        <h4>Monthly Bookings</h4>
                        <p>789</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>