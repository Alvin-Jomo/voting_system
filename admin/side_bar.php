<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color:rgba(0, 100, 0, 1)">
            <div class="navbar-header">
                <a class="navbar-brand" href="" style = "color:white;background-color:rgba(0, 100, 0, 1); border:4px solid black; border-radius:10px; "></i>Admin Panel</a>
				
            </div>
      

            <ul class="nav navbar-top-links navbar-right">
            
               <?php require 'dbcon.php';
				$query = $conn->query("SELECT * from user where user_id ='$session_id'")or die ($error);
				
				while ($row = $query->fetch_array()){
				
				
			 ?>
               
                <li class="dropdown" style="background-color:rgba(0, 100, 0, 1); border:4px solid black; border-radius:10px;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color: white">
					<b>Welcome: <?php echo $user_username = $user_row['firstname']." ".$user_row['lastname'];?></b>
                    </a>
                </li>
           
            </ul>
			<?php }?>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu" style="background-color:rgba(0, 80, 1, 1);">
                        
                        <li>
                            <h1 style="color:black"><i class="fa fa-menu fa-fw" ></i>Menu </a></h1>
                        </li>
                        <li style="background:rgba(0, 100, 0, 1);border:2px solid black; border-radius:10px;">
                            <a href="candidate.php"><i class = "fa fa-user fa-fw"></i> View Candidates</a>
                         
                        </li>
                        <br />
						<li style="background:rgba(0, 100, 0, 1);border:2px solid black; border-radius:10px;">
                          <a href="voters.php"><i class = "fa fa-user fa-fw"></i> View Voters</a>
                        </li>
                        <br />
                        <li style="background:rgba(0, 100, 0, 1);border:2px solid black; border-radius:10px;">
                          <a href="current_students.php"><i class = "fa fa-user fa-fw"></i>Students</a>
                        </li>
                        <br />
                        <li style="background:rgba(0, 100, 0, 1);border:2px solid black; border-radius:10px;">
                            <a href="canvassing.php"><i class="fa fa-download fa-fw"></i>Election Reports</a>
                        </li>
                        <br />
                        <li style="background:rgba(0, 100, 0, 1);border:2px solid black; border-radius:10px;">
                            <a href="login_times.php"> <i class = "fa fa-users" ></i>User Login Time</a>
                        </li>
                        <br />
                        <li style="background:rgba(0, 100, 0, 1);border:2px solid black; border-radius:10px;">
                           <a href="logout.php"> <i class = "fa fa-sign-out" ></i>Logout</a>
                </li>
                <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
                        </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>