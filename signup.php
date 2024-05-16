<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
    <style>
         <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-input {
            margin-bottom: 15px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #e81817;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ce3831;
        }
    </style>
    </style>


</head>
<body>
 <!-- include navigation -->    
<?php include 'navigation.php'?>

<!-- Main Content -->
<h1>Signup Form</h1>

        <form action="process_signup.php" method="post">
            <div class="form-input">
                <input type="text" name="username" placeholder="Enter username" >
            </div>
            <div class="form-input">
                <input type="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Enter password">
            </div>
            <div class="form-input">
                <input type="submit" name="signup" value="Signup">
            </div>
        </form>
    </div>
    
</body>
</html>