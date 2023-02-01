<?php
    require_once "../Models/util.php";
    init_session();

    echo "Bonjour ". $_SESSION['utilisateur']. ". Vous etes connecte";
    echo "<a href='../Controllers/C_Login.php?dec=oui'>Deconnecter</a>";
?>