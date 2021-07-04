<?php

    session_start();
    $_SESSION["user_name"];
    $_SESSION["email"];
    $_SESSION["password"];    

?> 


<!DOCTYPE html>
<html>
<head>    
    <title>Login page</title>
</head>
<body>
    <h1>Login Page</h1>
    <p>Hi! welcome to the login page.</p>

    <form action="registration.php" method="POST">        
        <p><input type="email" name= "email" placeholder= "enter your email"></p>
        <p><input type="password" name= "password" placeholder= "enter prefered password"></p>
        <p><input type="submit" name= "submit" value= "submit"></p>
    </form>
    <p><a href = "registration.php">Sign up</a> </p>
</body>
</html>