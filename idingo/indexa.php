<?php
session_start();
if(!isset($_SESSION['nom'])){
  header('location:index.php');
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title></title>
</head>

<body>
  <!-- <a href="index.php" name="logout" class="btn btn-danger">Deconnexion</a> -->
  <?php
  if (isset($_SESSION['nom'])) {
  ?>
    <h3> Bonjour <?php echo $_SESSION['nom'];
                } ?> </h3>

    <?php 
     if(isset($_POST['action'])){
      session_destroy();
  }

    ?>
    <button class="btn btn-danger" id="logout">Deconnexion</button>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="bd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>