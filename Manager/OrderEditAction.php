<?php

	include_once 'Crud.php';
	
	$crud = new Crud();
	
	
		$or_id = $_POST['or_id'];
		$product_name = $_POST['product_name'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		$t_price = $_POST['t_price'];

		$result = $crud->execute("CALL ORDER_UPDATE('$or_id','$product_name','$price','$quantity','$t_price')");
		
		if($result){
			echo true;
		}else{
			echo false;
		}	
	
?>