<?php include ('head.php');?>
<body>
    <?php include ('index_banner.php');?>

    <div class="container">
        <div class="row">
           
                <div class="menue">
                    
            </div>
            &nbsp;&nbsp;&nbsp;
            <div class="col-md-4 col-md-offset-4">
			
                <div class="login-panel"><!-- has form in it-->
				
                <!--creating a login page where you can login as an admin or a voter  -->
                    
                    <div class="form-panel"><center>
                        <h5><b><i>Login As:</i></b>
                        <select onchange = "page(this.value)">
                            <option value = "admin/index.php">System Admin</option>
                            <option selected disables>Student Voter</option> 
                        </select>
                       </p>
                        </h5>
                    </center>
                        <form role="form" method = "post" enctype = "multipart/form-data" class="index-form">
                            <div class="form-heading" style="background-color:rgba(0, 100, 0, 1);">
                            <center style="color:black;">Student Login</center>
                            </div>
                            
                                
                                <div class="form-field">
									<label for = "username">Student ID: </label><br/>
										<input class="form-control" id="student_id" placeholder="Enter Student ID" name="idno" type="text" pattern="[A-Za-z]{3}/[A-Za-z]{1}/[0-9]{2}-[0-9]{5}/[0-9]{4}" required = "required"  autofocus>
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
                                <div class="form-field">
									<label for = "username" >Password: </label>
										<input class="form-control" id="password" placeholder="Enter Password" name="password" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[#@$%&*])[0-9a-zA-Z#@$%&*]{6,}" required = "required">
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
                             <br/>
                                <center><button class="btn btn-lg btn-success btn-block " name = "login" style= " margin-bottom:0px;" width="50">Login</button>
                                &nbsp; 
                            <a  href="register/index.php"><button type="button" class="btn btn-lg btn-success btn-block" data-dismiss="modal" style= " margin-bottom:0px;">Register</button></a>
            
                                &nbsp;

                                <?php 
                                /*to connect to the database*/ 
                                	require_once 'admin/dbcon.php';
	
                                    if(isset($_POST['login'])){
                                        $idno=$_POST['idno'];
                                        $password=$_POST['password'];
                                    //to query the database
                                        $result = $conn->query("SELECT * FROM voters WHERE id_number = '$idno' && password = '".md5($password)."' && `account` = 'active' && `status` = 'Unvoted'") or die("connection failed");
                                        $row = $result->fetch_array();
                                        $voted = $conn->query("SELECT * FROM `voters` WHERE id_number = '$idno' && password = '".md5($password)."' && `status` = 'Voted'")->num_rows;
                                        $numberOfRows = $result->num_rows;				
                                        
                                        
                                        if ($numberOfRows > 0){
                                            session_start();
                                            $_SESSION['voters_id'] = $row['voters_id'];
                                            header('location:vote.php');
                                        }
                                        
                                // used to check if the voter voted or the account is not active
                                        if($voted == 1){
                                            ?>
                                            <script type="text/javascript">
                                            alert('Sorry You Already Voted')
                                            </script>
                                            <?php
                                        }else{
                                            ?>
                                            <script type="text/javascript">
                                            alert('You Have Entered Wrong Student_Id/Password or Your account is not Actived')
                                            </script>
                                            <?php
                                        }
                                    
                                    }
                                ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

  <?php include ('script.php');?>

  <script type="text/javascript">
  function page (src) {
    window.location = src;
  }
  </script>
</body>

</html>
