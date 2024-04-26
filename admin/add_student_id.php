<?php include ('session.php')?>
<?php include ('head.php');?>


<?php
	require_once 'dbcon.php';
	if (isset ($_POST ['add'])){
		$id_number =$_POST['id_number'];
		$names =$_POST['names'];
		$started = $_POST['started'];

		$query = $conn->query("SELECT * FROM ids WHERE id_number='$id_number'") or die ($conn->$error);
			$count = $query->fetch_array();
		if ($count  > 0){
?>
		<script>
			alert( 'Student ID already in Database');
			window.location='current_students.php';
	</script>	
<?php
	}
	else{
			$conn->query("insert into ids(id_number, names, started) VALUES('$id_number', '$names', '$started')");
?>
	<script>
			alert( 'Successfully Added');
			window.location='current_students.php';
	</script>
<?php
	}
} 
?>


    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Enter Student ID</center>
						</div>    
					</div>
				</h4>
			</div>

<div class="modal-body">										
				<form action="" method = "post" >	
				<label>Student ID</label>
				<div><input class ="form-control" id="student_id" name="id_number" pattern="[A-Za-z]{3}/[A-Za-z]{1}/[0-9]{2}-[0-9]{5}/[0-9]{4}" type = "text"  placeholder = "Student ID" required>
											<script>
  const inputField = document.getElementById("student_id");
  inputField.addEventListener("input", function() {
    const regex = /^[A-Za-z]{3}\/[A-Za-z]{1}\/[0-9]{2}-[0-9]{5}\/[0-9]{4}$/;
    if (!regex.test(inputField.value)) {
      inputField.setCustomValidity("please enter the input in the format ***/*/**-*****/****");
    } else {
      inputField.setCustomValidity("");
    }
  });
</script>
</div>
					<div class="form-group">
						<label>Full Names</label>
							<input class="form-control" type ="text" name = "names" required="true">
					</div>
					<div class="form-group">
						<label>Year First Registered</label>
							<input class="form-control" type ="date" name = "started" required="true">
					</div>
											
					<button name = "add" type="submit" class="btn btn-primary">Add to Database</button>
				</form>
			</div>
            <div class="modal-footer">
                <a  href = "current_students.php"><button type="button" class="btn btn-default" data-dismiss="modal">Back</button></a>
            </div>
				
		</div>					
	</div>
</div>