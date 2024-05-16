<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
    <style>
        /* style.css */
body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: hidden; /* Prevent scrolling */
}

.background-cover {
    background-image: url('img/car.jpg');
    background-size: cover;
    background-position: center;
    height: 100vh; /* Full viewport height */
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    position: relative; /* Set position relative for absolute positioning of child elements */
    flex-direction: column; /* Make children stack vertically */
}

.content {
    text-align: center;
}

.logout-button {
    margin-top: 20px; /* Add some space between the message and the button */
    background-color: #e81817; /* Adjust button styles as needed */
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
}

    </style>
</head>
<body>
<!-- Include navigation -->


<!-- Main Content -->
<div class="background-cover">
    <div class="content">
        <h1>Welcome to Your Dashboard, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <!-- Add a logout button below the welcome message -->
        <form action="logout.php" method="post" class="logout-form">
            <button type="submit" class="logout-button">Logout</button>
        </form>
    </div>
</div>

</body>
</html>
