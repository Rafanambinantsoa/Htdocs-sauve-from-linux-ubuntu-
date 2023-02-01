<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($password == "123" && $username =="karim"){
        header('location:conn.php');
        session_start();
        $_SESSION['tsuka'] = $username;
    }
    else{ 
        echo "<script>alert('Mot de passe ou Username incorrect')</script>" ;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="">
</head>

<body>
    <form method="post">
        <div>
            <label for="Username">Username</label>
            <input type="text" name="username">
        </div>

        <div>
            <label for="Password">Password</label>
            <input type="password" name="password">
        </div>

        <div>
            <input type="submit" name="submit" value="Connexion">
        </div>
    </form>

    <script src="jquery/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>