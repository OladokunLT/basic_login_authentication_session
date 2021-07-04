

<?php

if (isset($_POST["submit"])){
    session_start();

    if(empty($_POST["user_name"])){
            echo "Username is required <br />";
        } else {
            $user_name = $_POST["user_name"];
            if (!preg_match("/^[a-zA-Z\s]+$/", $user_name)){
                echo "Name must be letters and space only <br />";
            }            
        }

        if(empty($_POST["email"])){
            echo "Valid email is required <br />";
        } else{
            $email = $_POST["email"];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Email must be valid email <br />";
            }             
        }        
        
        if(empty($_POST["password"])){
            $password = $_POST["password"];
            echo "Password must not be empty";
        }
            
    $_SESSION["user_name"] = $user_name;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>    
    <title>Registration page</title>
</head>
<body>
    <h1>Registration Page</h1>
    <p>Hello! welcome to the registration page.</p>

    <form action=" <?php echo $_SERVER["PHP_SELF"]?>" method="POST">
        <p><input type="text" name="user_name" required placeholder= "enter your first and last name"></p>
        <p><input type="email" name= "email" required placeholder= "enter your email"></p>
        <p><input type="password" name= "password" required placeholder= "enter prefered password"></p>
        <p><input name="submit" type= "Submit" value= "submit"></p>
    </form>
</body>
</html>
