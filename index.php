<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
    <style>
             /* style.css */
body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: hidden; /* Prevent scrolling */
}

.background-cover {
    background-image: url('img/carw.jpg');
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

    </style>
</head>
<body>
<!-- Include navigation -->   
<?php include 'navigation.php'?>




<!-- Main Content -->
<div class="background-cover">
    <div class="content">
        <h1>G-CAR DEALERSHIP</h1>
        
    </div>
</div>
    
</body>
</html>
