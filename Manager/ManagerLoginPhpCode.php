<?php

	session_start();

	include_once 'crud.php';
	
	$crud = new Crud();

    if(isset($_POST['submit'])){

	  $email = $_POST['email'];
	  $password = md5($_POST['password']);
	  
	  
	  $query = "select * from manager_info where email='$email' AND password='$password'";
	
	  $result = $crud->getData($query);
	if($result) {
		foreach($result as $res){
			$email = $res['email'];
			$user_name = $res['user_name'];
		}
		$_SESSION['m_email'] = $email;
		$_SESSION['m_user_name'] = $user_name;
		$_SESSION['start'] = time(); // Taking now logged in time.
        // Ending a session in 30 minutes from the starting time.
        $_SESSION['m_expire'] = $_SESSION['start'] + (20 * 60);
		header("location:index.php");
	}else{
        header("location:ManagerLogin.php?status=NotOk");
	}
	
  }
	
?>