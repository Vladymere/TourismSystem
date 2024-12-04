<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Management System - Bookings</title>
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
            <section id="current-bookings">
                <h3>Current Bookings</h3>
                <table class="bookings-table">
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>User</th>
                            <th>Destination</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Database connection
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "tourism_management";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT id, user, destination, date, status FROM bookings";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                    <td>" . $row["id"]. "</td>
                                    <td>" . $row["user"]. "</td>
                                    <td>" . $row["destination"]. "</td>
                                    <td>" . $row["date"]. "</td>
                                    <td>" . $row["status"]. "</td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No bookings found</td></tr>";
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </section>
            <section id="booking-details">
                <h3>Booking Details</h3>
                <div class="details">
                    <h4>Booking ID: 1</h4>
                    <p>User: John Ashley Ramos</p>
                    <p>Destination: Boracay</p>
                    <p>Date: 2023-10-15</p>
                    <p>Status: Confirmed</p>
                </div>
            </section>
            <section id="add-booking">
                <h3>Add New Booking</h3>
                <form action="add_booking.php" method="POST" class="booking-form">
                    <div class="input-group">
                        <label for="user">User</label>
                        <input type="text" id="user" name="user" required>
                    </div>
                    <div class="input-group">
                        <label for="destination">Destination</label>
                        <input type="text" id="destination" name="destination" required>
                    </div>
                    <div class="input-group">
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="input-group">
                        <label for="status">Status</label>
                        <select id="status" name="status" required>
                            <option value="Confirmed">Confirmed</option>
                            <option value="Pending">Pending</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                    </div>
                    <button type="submit" class="booking-button">Add Booking</button>
                </form>
            </section>
        </main>
    </div>
</body>
</html>