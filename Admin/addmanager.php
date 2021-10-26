<?php
/*
    session_start();
    if(!isset($_SESSION['c_email']))
    {
        header("location:login.php");
    }
    else {
    $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['c_expire']) {
        session_destroy();
        //header("location:ManagerLogin.php");
    }
    }
    header("Access-Control-Allow-Origin: *"); /*sir Question
*/
?>


<?php include 'inc/header.php';?>

    <style type="text/css">

        .infoBox
        {
            width: 310px;
            height: 420px;
            background:#06102ba3;
            color: #fff;
        }
        .input_field
        {
            margin-bottom:10px;
            padding:6px;
            border-radius:4px;
            border:2px solid orange;
        }
        .input_field:hover
        {
            border:2px solid black;
        }
        .Addbtn{
                width: 20% !important;
        }
             
    </style>

    <div id="body">
    	<br>
		<div class="card" style="margin-left: 10px; margin-right: 10px; background: #1b053e94;">
		  <div class="card-header">
		    <h4 style="color: white; font-weight: bold">Add Manager</h4>
		  </div>
		  <div class="card-body">

                    <form action="AddManager_crud.php" method="POST">
                            <div class="boxField">

                                <input class="input_field" type="text" name="User_name" placeholder="User name" required/> <br/>

                                <input class="input_field" type="text" name="Address" placeholder="Address" required /> <br/>

                                <input class="input_field" type="text" name="Phone_number" placeholder="Phone number"required/> <br/>

                                <input class="input_field" type="text" name="Age" placeholder="Age" required/> <br/>

                                <input class="input_field" type="email" name="Email" placeholder="Email" required/> <br/>

                                <input class="input_field" type="password" name="Password" placeholder="Password" required/><br/>

                                <input class="input_field" type="password" name="CPassword" placeholder="Confirm password" required/><br/>

                                <input class="btn btn-outline-warning " type="submit" name="submit" value="Save"/><br/>

                            </div>     
                    </form> 

		  </div>
		</div>
        <br>
    </div>

<?php include 'inc/footer.php';?>