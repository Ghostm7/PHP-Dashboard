<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Servicest</title>
    <style>
           /* Style for the image container */
           .image-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        /* Style for each image */
        .image-container img {
            width: 30%; /* Adjust width of the images */
            border-radius: 5px;
        }

        /* Style for the paragraph container */
        .paragraph-container {
            text-align: center;
            margin-top: 20px;
        }

        /* Style for each paragraph */
        .paragraph-container p {
            margin-top: 10px;
        }
    </style>
</head>
<body>
 <!-- include navigation -->    
<?php include 'navigation.php'?>



<!-- Image container -->
<div class="image-container">
    <img src="img/car repair1.jpg" alt="Image 1">
    <img src="img/car repair2.jpeg" alt="Image 2">
    <img src="img/car repair3.webp" alt="Image 3">
</div>
<div class="image-container">
    <img src="img/car repair4.jpg" alt="Image 1">
    <img src="img/car repair5.jpg" alt="Image 2">
    <img src="img/car repair6.jpg" alt="Image 3">
</div>
</body>
</html>