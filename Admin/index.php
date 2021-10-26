<?php

    session_start();
    if(!isset($_SESSION['email']))
    {
        header("location:AdminLogin.php");
    }
    else {
    $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['expire']) {
        session_destroy();
        //header("location:ManagerLogin.php");
    }
    }

?>
<?php include 'inc/header.php';?>



    
    <div id="body" style=" ">
        <br>


    </div>



<?php include 'inc/footer.php';?>