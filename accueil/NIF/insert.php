<?php

   include_once "connect.php";

   $nom     = $_POST["nomprenom"];
   $cin         = $_POST["cin"];
   $activite      = $_POST["activite"];
   $stat         = $_POST["stat"];
   $adrs   = $_POST["adrs"];
   $foko       = $_POST["foko"];
   $commune   = $_POST["commune"];
   $region     = $_POST["region"];
   $gender        = $_POST["gender"];

   $query = "INSERT INTO contribuable (nom_contri, cin , adresses, lieu_exploitation , activite ) 
                                                   VALUES ('$nom','$cin','$adrs','$stat','$adrs','$foko','$commune','$region','$gender')";

   $insert = mysqli_query($conn,$query);

    if($insert){
        //Response
        echo "Eregistrement reussi mon pote";

    }

