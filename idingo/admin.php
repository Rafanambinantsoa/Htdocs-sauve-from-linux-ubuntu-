<?php
session_start();
include 'connect.php';

if(isset($_POST['code'])){
    $query = "SELECT count(*) as tsuka FROM 'Admin' WHERE code = '".$_POST['code']."' and nom = '".$_POST['nom']."' ";
    $result = mysqli_query($con , $query);
    while($rows = mysqli_fetch_assoc($result)){
        $a =  $rows['tsuka'];
        $nom_prenom = $rows['nom_prenom'];
        if($a > 0 ){
            $_SESSION['nom'] = $nom_prenom;
            echo 'success';
            // header('location:indexa.php');:
        }
        else{
            echo 'No';
        }
    }
        
    
}
// if(isset($_POST['action'])){
//     session_destroy();
//     echo 'Oui';
// }
