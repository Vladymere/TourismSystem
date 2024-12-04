<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Management System - Users</title>
    <link rel="stylesheet" href="users.css">
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
            <section id="current-users">
                <h3>Current Users</h3>
                <table class="users-table">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Ashley Ramos</td>
                            <td>JohnAshley@gmail.com</td>
                            <td>Admin</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ron Celajes</td>
                            <td>Ron@gmail.com</td>
                            <td>User</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tian Caguioa</td>
                            <td>Tian@gmail.com</td>
                            <td>User</td>
                            <td>Inactive</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section id="user-details">
                <h3>User Details</h3>
                <div class="details">
                    <h4>User ID: 1</h4>
                    <p>Name: John Ashley Ramos</p>
                    <p>Email: JohnAshley@gmail.com</p>
                    <p>Role: Admin</p>
                    <p>Status: Active</p>
                </div>
            </section>
            <section id="add-user">
                <h3>Add New User</h3>
                <form action="add_user.php" method="POST" class="user-form">
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label for="role">Role</label>
                        <select id="role" name="role" required>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="status">Status</label>
                        <select id="status" name="status" required>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="user-button">Add User</button>
                </form>
            </section>
        </main>
    </div>
</body>
</html>