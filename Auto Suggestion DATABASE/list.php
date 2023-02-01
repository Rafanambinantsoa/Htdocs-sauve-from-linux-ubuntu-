<?php
include_once 'connect.php';

$query = "SELECT * FROM personne";
$result = mysqli_query($con , $query);
if($result){
    // creation du tableau
    $tableau = array(); 
    //on effectue une boucle pour recuperer les données
    while($row = mysqli_fetch_assoc($result)){
        //on ajoute celle ci dans notre tableau
        array_push($tableau , $row['Nom']);

    }
     $kim = json_encode($tableau);
    //on affiche le tableau
    // var_dump ($tableau);
}
else{
    echo $k = mysqli_error($con);
}
