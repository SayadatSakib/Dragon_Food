<?php
	session_start();

	include_once 'crud.php';
	
	$crud = new Crud();

    if(isset($_POST['submit'])){

	  $email = $_POST['email'];
	  $password = md5($_POST['password']);
	  
	  
	  $query = "select * from admin_table where email='$email' AND password='$password'";
	
	  $result = $crud->getData($query);
	if($result) {
		foreach($result as $res){
			$email = $res['email'];
			$name = $res['name'];
		}
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $name;
		$_SESSION['start'] = time(); // Taking now logged in time.
        // Ending a session in 30 minutes from the starting time.
        $_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
		header("location:index.php");
	}else{
		header("location:AdminLogin.php?status=NotOk");
	}
	

  }
	
?>