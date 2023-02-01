<?php

session_start();
// if(isset($_SESSION['unique_id'])){
    include_once "../exp/php/conn.php";

    $outgoing = mysqli_real_escape_string($con , $_POST['outgoing_id']);
    $incoming = mysqli_real_escape_string($con , $_POST['incoming_id']);
    $message = mysqli_real_escape_string($con , $_POST['message']);

    if(!empty($message)){
        $sql = mysqli_query($con , "INSERT INTO messages (incoming_msg_id , outgoing_msg_id , msg) values($incoming , $outgoing , '$message')");

    }
// }
// else{
    // header("Location:login.php");
// }