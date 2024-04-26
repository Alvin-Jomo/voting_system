
<?php include ('head.php');?>
<body>

    <div id="wrapper">
    	<?php    
        include ('index_banner.php');
        ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row" >
			
					<div class="form-panel" >
                      
                        <div class="form-body"> 

                         <form method = "post" enctype = "multipart/form-data">
                         	
                                <div class="form-heading">
                         		<center style="background-color:rgba(0, 100, 0, 1);">Voter Registeration</center>
                         		</div>
								<div>
											<div class="form-field">
												<label>Student ID</label><br/>
												<input class ="form-control" id="student_id" name="id_number" pattern="[A-Za-z]{3}/[A-Za-z]{1}/[0-9]{2}-[0-9]{5}/[0-9]{4}" type = "text"  placeholder = "Student ID" required>
											</div>
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
                                               <div>
											<div class="form-field">											
												<label>Password</label><br/>
												<input  class="form-control" type="password" id="password" name="password"placeholder="enter a strong password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[#@$%&*])[0-9a-zA-Z#@$%&*]{6,}" required>
											</div>
											<div class="form-field">											
												<label>Retype Password</label><br/>
													<input class="form-control"  type = "password" name = "password1" id = "pass" placeholder="Retype Password" required="true"/>
											</div>
											<script>
  const passwordField = document.getElementById("password");
  passwordField.addEventListener("input", function() {
    const regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[#@$%&*])[0-9a-zA-Z#@$%&*]{6,}$/;
    if (!regex.test(passwordField.value)) {
      passwordField.setCustomValidity("Password must be at least 6 characters long and contain at least one uppercase letter, one lowercase letter, one digit, and one special character (#@*$%&)");
    } else {
      passwordField.setCustomValidity("");
    }
  });
</script>
</div>
											<div class="form-field">
												<label>First Name</label><br/>
													<input class="form-control" type ="text" name = "firstname" placeholder="First Name" required="true">
											</div>
											
											<div class="form-field">
												<label>Last Name</label><br/>
													<input class="form-control"  type = "text" name = "lastname" placeholder="Last Name" required="true">
											</div>

											<div class="form-field">
												<label>Gender</label> <br/>
													<select class = "form-control" name = "gender">
													<option disabled selected>select your gender from below list</option>
														<option >Male</option>
														<option >Female</option>														
													</select>
											</div>
											
											<div class="form-field">
												<label>Program of Study <i>(enter initials only i.e BIT,CSC, ETS, SIK...)</i></label><br/>
												<select class = "form-control" name = "prog_study">
												        <option disabled selected>select your school from below list</option>
														<option >ETS</option>
														<option >COMP SCI</option>
														<option >BIT</option>
														<option >SIK</option>
														<option >OTHERS</option>														
													</select>
											</div>

											<div class="form-field">
												<label>Select Study Level</label> <br/>
													<select class = "form-control" name = "year_level">
													<option disabled selected>select current year of study from below list</option>
														<option>1st Year</option>
														<option>2nd Year</option>
														<option>3rd Year</option>
														<option>4th Year</option>
														
													</select>
											</div>
												<br/>					
											 	 <center><button name = "save" type="submit">Create My Account</button></center>
                                            <div class="link">
											 	 <h2><center><a href="../login.php" style = "font-size:16px;">Login to vote</a></center></h2>
											</div>

						  				 </div>
                                       
										
										</form>
								
							<?php //PHP script to insert signup data into database
								require 'signUpData.php';
								
							?>

						</div>
						    
					</form>
					
                    </div>
                </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
       

    </div>
    <!-- /#wrapper -->
</body>

</html>

