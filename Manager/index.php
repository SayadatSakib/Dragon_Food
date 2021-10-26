<?php

    session_start();
    if(!isset($_SESSION['m_email']))
    {
        header("location:ManagerLogin.php");
    }
    else {
    $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['m_expire']) {
        session_destroy();
        //header("location:ManagerLogin.php");
    }
    }

?>
<?php include 'inc/header.php';?>



    
    <div id="body" style=" ">
    	<br>

		<div class="card" style="margin-left: 10px; margin-right: 10px; background: #1b053e94;"> 
		  <div class="card-header">
		    <h5 style="color: black; font-weight: bold">Welcome to Dashboard !</h5>
		  </div>
		  <div class="card-body" >
       


		  </div>
		</div>

    </div>



<?php include 'inc/footer.php';?>