<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color:green;">
         <h1 align="center" style="text-align:center; font-size:30px; font-weight:bold; color:white">ONLINE VOTING PAGE</h1> 
            
            
               <?php require 'admin/dbcon.php';
				$query = $conn->query("SELECT * from voters where voters_id ='$session_id'")or die ($error);
				
				while ($row = $query->fetch_array()){
				
				
			 ?>
               <div style="border:4px solid black; width:200px; border-radius:10px">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color: white">
					<i><b>Welcome: </b><?php echo $user_username = $user_row['firstname']." ".$user_row['lastname'];?></i>
                    </a>                     
                </li>
            <li class="dropdown">
                <a href="logout.php"style = "color: white; padding-rignt: 30px;"> <i class = "fa fa-sign-out" style = "color: black"></i>Logout</a>
            </li>
                </div>
           

			<?php 
        break;
        }?>
        </nav>