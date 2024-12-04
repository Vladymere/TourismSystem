<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Management System - Destinations</title>
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
            <section id="destinations">
                <h3>Popular Destinations</h3>
                <div class="cards">
                    <div class="card">
                        <h4>Boracay</h4>
                        <p>White sand beaches and vibrant nightlife.</p>
                    </div>
                    <div class="card">
                        <h4>Palawan</h4>
                        <p>Stunning lagoons and limestone cliffs.</p>
                    </div>
                    <div class="card">
                        <h4>Cebu</h4>
                        <p>Historical sites and beautiful beaches.</p>
                    </div>
                </div>
            </section>
            <section id="destination-details">
                <h3>Destination Details</h3>
                <div class="details">
                    <h4>Boracay</h4>
                    <img src="Boracay.jpg" alt="Boracay" class="destination-image">
                    <p>Boracay is a small island in the central Philippines. It's known for its resorts and beaches. Along the west coast, White Beach is backed by palm trees, bars, and restaurants. On the east coast, strong winds make Bulabog Beach a hub for water sports. Nearby, the observation deck on Mount Luho offers panoramic views over the island.</p>
                </div>
                <div class="details">
                    <h4>Palawan</h4>
                    <img src="Palawan.jpg" alt="Palawan" class="destination-image">
                    <p>Palawan is an archipelagic province of the Philippines that is located in the region of MIMAROPA. Its capital is the city of Puerto Princesa, but it is governed independently from the city. The islands of Palawan stretch between Mindoro in the northeast and Borneo in the southwest. It is known for its white beaches, crystal-clear waters, and stunning limestone cliffs.</p>
                </div>
                <div class="details">
                    <h4>Cebu</h4>
                    <img src="Cebu.jpg" alt="Cebu" class="destination-image">
                    <p>Cebu is a province of the Philippines located in the Central Visayas region, and consists of a main island and 167 surrounding islands and islets. Its capital is Cebu City, the oldest city and first capital of the Philippines, which is politically independent from the provincial government. Cebu is known for its historical landmarks, beautiful beaches, and vibrant festivals.</p>
                </div>
            </section>
            <section id="user-reviews">
                <h3>User Reviews</h3>
                <ul class="reviews">
                    <li>
                        <h4>John Ashley Ramos</h4>
                        <p>Boracay is amazing! The beaches are pristine and the nightlife is fantastic. Highly recommend!</p>
                    </li>
                    <li>
                        <h4>Ron Celajes</h4>
                        <p>Palawan is a paradise on earth. The lagoons and cliffs are breathtaking. A must-visit destination!</p>
                    </li>
                    <li>
                        <h4>Tian Caguioa</h4>
                        <p>Cebu has a perfect mix of history and natural beauty. The beaches are beautiful and the people are very friendly.</p>
                    </li>
                </ul>
            </section>
        </main>
    </div>
</body>
</html>