<?php
    include_once ('connect.php');

    $query = "SELECT id,num_matr,	nom_etu , prenom_etu , age , date_nais , 	email , 	telephone, adresse , 	sexe , niveau , mention , 	anne_univ FROM etudiant ORDER BY id ASC ";

    $read = mysqli_query($conn,$query);

    $json = array();

    while($data = mysqli_fetch_assoc($read)){
        $json[] = $data;
    }

    $record["userdata"] = $json;
    echo json_encode($record);
