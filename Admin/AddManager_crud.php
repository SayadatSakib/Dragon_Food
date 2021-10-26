<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	if(isset($_POST['submit'])){
		$User_name = $_POST['User_name'];
		$Address = $_POST['Address'];
		$Phone_number = $_POST['Phone_number'];
		$Age = $_POST['Age'];
		$Email = $_POST['Email'];
		$Password = md5($_POST['Password']);

		
		$result = $crud->execute("INSERT into manager_info(user_name,address,phone_number,age,email,password) VALUES('$User_name','$Address','$Phone_number','$Age','$Email','$Password')");
		
		if($result){
			header("location:addmanager.php?status=ok");
		}else{
			echo "Insertion Problem!";
		}
		
	}
	
	
?>