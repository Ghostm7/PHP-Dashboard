<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

include_once 'database-connect.php'; // Make sure the path is correct

$query = "SELECT id, username, email FROM users";
$result = $db_connect->query($query);

if ($result) {
    $users = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($users);
} else {
    echo json_encode([]);
}
?>
