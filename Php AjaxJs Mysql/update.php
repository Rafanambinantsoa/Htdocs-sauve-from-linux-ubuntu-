<?php
	include('conn.php');
	if(isset($_POST['edit'])){
		$id=$_POST['id'];
		$nummatri=$_POST['nummatri'];
		$nom=$_POST['nom'];
		$phone=$_POST['phone'];
		
		mysqli_query($conn,"update `user` set nummatri='$nummatri', nom='$nom' , phone = '$phone' where userid='$id'");
	}
?>