<?php
include 'database.php';

$name = $_POST['nom'];
$nime = $_POST['prenom'];

$sql = "INSERT INTO `nada` (`nom`, `prenom`) VALUES ('$name', '$nime')";

if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode" => 200));
} else {
    echo json_encode((array("statusCode" => 201)));
}
mysqli_close($conn);
