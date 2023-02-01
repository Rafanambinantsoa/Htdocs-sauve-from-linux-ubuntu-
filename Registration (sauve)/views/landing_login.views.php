<?php
require_once "Models/image.models.php";
$kim = new Image;
session_start();

if (isset($_SESSION['name'])) {
    echo $_SESSION['name'];

?>
    <img src="views/img/<?= $kim->getImg($_SESSION['name']); ?>" alt="Inserer une Image">


    <form action="<?= URL ?>idem" method="post" enctype="multipart/form-data">
        <input type="hidden" name="tsukasa" value="<?= $_SESSION['name']  ?>">
        <input type="file" name="kaito" id="img">

        <input type="submit" value="Choisir">
    </form>



    <a href="<?= URL ?>session"> <button>Deconnexion</button> </a>

<?php

} else {
    header('Location:' . URL . 'l');
}
