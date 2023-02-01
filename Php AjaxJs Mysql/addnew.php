<?php
	include('conn.php');
	if(isset($_POST['add'])){
		$nummatri=$_POST['nummatri'];
		$nom=$_POST['nom'];
		$phone=$_POST['phone'];
		
		mysqli_query($conn,"insert into `user` (nummatri, nom , phone) values ('$nummatri', '$nom' , '$phone')");
	}
?>