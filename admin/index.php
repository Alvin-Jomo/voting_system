<?php include ('head.php');?>

<body>
<?php include ('index_banner.php');?>
    <div class="container">
        <div class="row">
		
                    <center> 
                        <i>Login As:</i>
                        <select onchange = "page(this.value)">
                            <option selected disables>System Admin</option>
                            <option value = "../login.php">Student Voter</option> 
                    </select>
                        
                    </center>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">

                    
                    <div class="panel-body">
                        
                    <div class="form-heading" style="background:rgba(0, 100, 0, 1);">
                        <center>Admin Log in</center>
                    </div>
                        <form role="form" method = "post" enctype = "multipart/form-data">
                                <div class="form-group">
                                    <label for = "username" >Login ID</label>
                                        <input class="form-control" placeholder="Enter Login ID" name="login_id" type="text" autofocus>
                                </div>
							
                                <div class="form-group">
									<label for = "username" >Username</label>
										<input class="form-control" placeholder="Enter Username" name="username" type="text" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Enter Password" name="password" type="password" value="">
                                </div>
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
							
									<?php include ('login_query.php');?>
                        </form>
                    </div>
                </div>
            </div>
			
			 </div>
        </div>
    </div>
    <script type="text/javascript">
  function page (src) {
    window.location = src;
  }
  </script>

  <?php 
  include ('script.php');
  ?>

</body>

</html>
