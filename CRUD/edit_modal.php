<div class="modal fade" id="edit<?php echo $urow['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<?php
		$n=mysqli_query($conn,"select * from `user` where userid='".$urow['userid']."'");
		$nrow=mysqli_fetch_array($n);
	?>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class = "modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<center><h3 class = "text-success modal-title">Update Member</h3></center>
		</div>
		<form class="form">
		<div class="modal-body">
			nummatri: <input type="text" value="<?php echo $nrow['nummatri']; ?>" id="unummatri<?php echo $urow['userid']; ?>" class="form-control">
			nom: <input type="text" value="<?php echo $nrow['nom']; ?>" id="unom<?php echo $urow['userid']; ?>" class="form-control">
			phone: <input type="text" value="<?php echo $nrow['phone']; ?>" id="uphone<?php echo $urow['userid']; ?>" class="form-control">
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button> | <button type="button" class="updateuser btn btn-success" value="<?php echo $urow['userid']; ?>"><span class = "glyphicon glyphicon-floppy-disk"></span> Save</button>
		</div>
		</form>
    </div>
  </div>
</div>