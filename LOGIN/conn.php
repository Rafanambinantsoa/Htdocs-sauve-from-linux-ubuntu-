<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conn</title>
</head>

<body>
    <p>Felicitation , Mr <?php echo $_SESSION['tsuka']; ?>
    <form action="" method="post">
        <button name="logout" >Log Out </button>
    </form>
        
    </p>
    <?php 
    if(isset($_POST['logout'])){
        session_destroy();
        header('location:login.php');
    } 

    if(!isset($_SESSION['tsuka'])){
        header('location:login.php');
        exit();
    }
    
    ?>

</body>

</html>