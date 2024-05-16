<?php
echo "Processing signup";

echo "<br>";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Include database connection
include 'database-connect.php';

// Check if the connection variable is defined
if (!isset($db_connect)) {
    die("Database connection failed.");
}

// Use prepared statements to insert data securely
$stmt = $db_connect->prepare("INSERT INTO Users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $hashed_password);

$result = $stmt->execute();

if ($result) {
    header('Location: login.php');
} else {
    echo "Signup failed: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$db_connect->close();
?>

