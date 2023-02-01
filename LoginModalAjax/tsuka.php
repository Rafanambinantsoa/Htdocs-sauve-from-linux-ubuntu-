<?php
session_start();
include_once 'connect.php';

if(isset($_POST['nif'])){
    $nif = $_POST['nif'];
    $cin = $_POST['cin'];
    $query = "SELECT NIF, num_cin , nom_prenom FROM contribuable where NIF = '".$nif."' AND num_cin = '".$cin."' ";
    $res = mysqli_query($con , $query);
    $row = mysqli_fetch_assoc($res);
    if(mysqli_num_rows($res) > 0 ){
        $ki = $row['nom_prenom'];
        $_SESSION['kim'] = $ki;
        echo 'Success';

    }else{
        echo "No";  
    }
}
