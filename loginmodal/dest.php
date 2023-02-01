<?php  session_start() ;
//anti_hack
if(!isset($_SESSION['kim'])){
    header('location:index.php');
}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php 

    echo $_SESSION['kim'];

    //deconnexion
    if(isset($_POST['action'])){
        session_destroy();
    }
    ?>
    <button id="logout">Log Out </button>
    <script src="jquery/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="app.js"></script>
</body>
</html>