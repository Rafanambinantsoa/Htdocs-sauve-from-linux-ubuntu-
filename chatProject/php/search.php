<?php
include_once "conn.php";

$searchTerm = mysqli_real_escape_string($con , $_POST['rech']);
$sql = mysqli_query($con , "SELECT * FROM users where fname like '%$searchTerm%' or lname like '%$searchTerm%' ");

$output = "";

if(mysqli_num_rows($sql) > 0 ){
    // $output.="Misy";
    include_once "data_search.php";
}
else{
    $output.= "There is no User";
}
echo $output;