<?php 
session_start();
include_once "conn.php";

$email = mysqli_real_escape_string($con , $_POST['email']);
$password = mysqli_real_escape_string($con , $_POST['password']);

// echo "Hello from login.php";
if(!empty($email) && !empty($password)){
    $sql = mysqli_query($con , "SELECT * from users where email = '$email' and password = '$password' ");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['unique_id'] = $row['unique_id'];
        echo "success";
    }
    else{
        echo "Email or Password";
    }
}
else{
    echo "All fields are required ";
}



?>