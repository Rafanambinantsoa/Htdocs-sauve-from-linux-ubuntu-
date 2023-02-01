<?php
	include('conn.php');
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8" name = "viewport" content = "width-device=width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<title>nada</title>
	</head>
<body>
	<div style="height:30px;"></div>
	<div class = "row">	
		<div class = "col-md-3">
		</div>
		<div class = "col-md-6 well">
			<div class="row">
                <div class="col-lg-12">
                    <center><h2 class = "text-primary">Crud Hono </h2></center>
					<hr>
				<div>
					<form class = "form">
						<div class = "form-group">
							<label>Numéro Matricule:</label>
							<input type  = "text" id = "nummatri" class = "form-control">
						</div>
						<div class = "form-group">
							<label>Nom</label>
							<input type  = "text" id = "nom" class = "form-control">
						</div>
						<div class = "form-group">
							<label>Télephone :</label>
							<input type  = "number" id = "phone" class = "form-control">
						</div>
						<div class = "form-group">
							<button type = "button" id="addnew" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Add</button>
						</div>
					</form>
				</div>
                </div>
            </div><br>
			<div class="row">
			<div id="userTable"></div>
			</div>
		</div>
	</div>
</body>
<script src = "js/jquery-3.1.1.js"></script>	
<script src = "js/bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		showUser();
		//Add New
		$(document).on('click', '#addnew', function(){
			if ($('#nummatri').val()=="" || $('#nom').val()=="" || $('#phone').val()==""){
				alert('Please input data first');
			}
			else{
			$nummatri=$('#nummatri').val();
			$nom=$('#nom').val();				
			$phone=$('#phone').val();				
				$.ajax({
					type: "POST",
					url: "addnew.php",
					data: {
						nummatri: $nummatri,
						nom: $nom,
						phone: $phone,
						add: 1,
					},
					success: function(){
						showUser();
					}
				});
			}
		});
		//Delete
		$(document).on('click', '.delete', function(){
			$id=$(this).val();
				$.ajax({
					type: "POST",
					url: "delete.php",
					data: {
						id: $id,
						del: 1,
					},
					success: function(){
						showUser();
					}
				});
		});
		//Update
		$(document).on('click', '.updateuser', function(){
			$uid=$(this).val();
			$('#edit'+$uid).modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
			$unummatri=$('#unummatri'+$uid).val();
			$unom=$('#unom'+$uid).val();
			$uphone=$('#uphone'+$uid).val();
				$.ajax({
					type: "POST",
					url: "update.php",
					data: {
						id: $uid,
						nummatri: $unummatri,
						nom: $unom,
						phone:$uphone,
						edit: 1,
					},
					success: function(){
						showUser();
					}
				});
		});
	
	});
	
	//Showing our Table
	function showUser(){
		$.ajax({
			url: 'show_user.php',
			type: 'POST',
			async: false,
			data:{
				show: 1
			},
			success: function(response){
				$('#userTable').html(response);
			}
		});
	}
	
</script>
</html>