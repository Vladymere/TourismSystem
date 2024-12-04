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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $status = $_POST['status'];

    $stmt = $conn->prepare("INSERT INTO bookings (user, destination, date, status) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $user, $destination, $date, $status);

    if ($stmt->execute()) {
        header("Location: bookings.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>