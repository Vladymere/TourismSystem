<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Management System - Settings</title>
    <link rel="stylesheet" href="settings.css">
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
            <section id="profile-settings">
                <h3>Profile Settings</h3>
                <form action="update_profile.php" method="POST" class="settings-form">
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="Ashley" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="ashley@example.com" required>
                    </div>
                    <button type="submit" class="settings-button">Update Profile</button>
                </form>
            </section>
            <section id="password-settings">
                <h3>Change Password</h3>
                <form action="change_password.php" method="POST" class="settings-form">
                    <div class="input-group">
                        <label for="current-password">Current Password</label>
                        <input type="password" id="current-password" name="current_password" required>
                    </div>
                    <div class="input-group">
                        <label for="new-password">New Password</label>
                        <input type="password" id="new-password" name="new_password" required>
                    </div>
                    <div class="input-group">
                        <label for="confirm-password">Confirm New Password</label>
                        <input type="password" id="confirm-password" name="confirm_password" required>
                    </div>
                    <button type="submit" class="settings-button">Change Password</button>
                </form>
            </section>
            <section id="notification-settings">
                <h3>Notification Preferences</h3>
                <form action="update_notifications.php" method="POST" class="settings-form">
                    <div class="input-group">
                        <label for="email-notifications">Email Notifications</label>
                        <select id="email-notifications" name="email_notifications" required>
                            <option value="enabled" selected>Enabled</option>
                            <option value="disabled">Disabled</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="sms-notifications">SMS Notifications</label>
                        <select id="sms-notifications" name="sms_notifications" required>
                            <option value="enabled">Enabled</option>
                            <option value="disabled" selected>Disabled</option>
                        </select>
                    </div>
                    <button type="submit" class="settings-button">Update Notifications</button>
                </form>
            </section>
        </main>
    </div>
</body>
</html>