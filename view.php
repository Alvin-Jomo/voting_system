<?php include ('sess.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_banner.php');?>
        <!-- Page Content -->
          <!-- Navigation -->
        <div id="page-wrapper">
<!-- used to give a list for the voter to choose from -->
    <heading class="menue-select">
            <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Select Candidate Group</option>
                <option value = "candidates/pres.php">President</option>
                <option value = "candidates/vp.php">Vice President</option>
                <option value = "candidates/ua.php">Male Non-resident</option>
                <option value = "candidates/ss.php">Female Non-Resident</option>
                <option value = "candidates/ea.php">Entertainment Advisor</option>
                <option value = "candidates/tr.php">Treasurer</option>
                <option value = "candidates/vtr.php">Vice Treasurer</option>
                <option value = "candidates/sg.php">Secretary General</option>
                <option value = "candidates/ta.php">SCHOOl REP</option>
                <option value = "candidates/pb.php">Class Rep</option>
                <option value = "candidates/ac.php">Academics</option>
                </select>
            </center>

    </heading> 
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script>
    function page (src){
        window.location=src;
    }
    </script>

</body>

</html>

