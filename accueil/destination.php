<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destination</title>
</head>

<body>
    <button id="logout" >Log Out </button>
    <?php
    session_start();
    if (isset($_SESSION['nom_prenom'])) {
    ?>
        <h3> Bonjour <?php echo $_SESSION['nom_prenom'];
                    } ?> </h3>

        <?php
    if(isset($_POST['action'])){
        unset($_SESSION['nom_prenom']);
    }
        ?>
</body>

</html>