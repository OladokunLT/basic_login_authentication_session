<?php 
    session_start();

    $user_name = $_SESSION["user_name"];
    $email = $_SESSION["email"];
    $password = $_SESSION["password"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <p><a href= "login.php"> Sign out </a></p>
    <h3>You are welcome to my website.</h3>
    <p>Hurray!!! You are signed in as <?php echo htmlspecialchars($email); ?> </p>   
</body>
</html>