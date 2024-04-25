<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- google font poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    
    <div class="signup-container">
        <form class="wrapper" name="form" method="POST" action="signup.php">
            <div class="account-name" class="forms">
                <label>Name</label>
                <input type="text" class="name-field" name="username" placeholder="Name"/>

            </div>

            <div class="account-email" class="forms">
                <label>Email</label>
                <input type="email" class="email-field" name="email" placeholder="email"/>            </div>

            <div class="account-password" class="forms">
                <label>Password</label>
                <input type="password" class="password-field" name="password" placeholder="password"/>
            </div>

            <div class="account-confirm-password" class="forms">
                <label>Confirm Password</label>
                <input type="password" class="confirm-password-field" name="confirm-password" placeholder="password"/>
            </div>
            <button class="sign-button" name="signup-btn">Sign Up</button>
              
        </form>
    </div>
</body>
</html>